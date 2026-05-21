<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\ContactReply;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        $stats = [
            'contacts' => ContactMessage::count(),
            'unread_contacts' => ContactMessage::where('is_read', false)->count(),
            'gallery_count' => Gallery::count(),
            'dmit_count' => Gallery::where('category', 'dmit')->count(),
            'training_count' => Gallery::where('category', 'training')->count(),
            'workshops_count' => Gallery::where('category', 'workshops')->count(),
            'outdoor_count' => Gallery::where('category', 'outdoor')->count(),
        ];
        
        $recent_messages = ContactMessage::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_messages'));
    }

    // Contact messages view & delete
    public function contactsIndex()
    {
        $contacts = ContactMessage::with('replies')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function contactsShow($id)
    {
        $contact = ContactMessage::with('replies')->findOrFail($id);
        if (!$contact->is_read) {
            $contact->update(['is_read' => true]);
        }
        return view('admin.contacts.show', compact('contact'));
    }

    public function contactsDelete($id)
    {
        $contact = ContactMessage::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact message deleted successfully.');
    }

    public function contactsReply(Request $request, $id)
    {
        $contact = ContactMessage::findOrFail($id);

        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $recipient = $contact->email;
        $subject = $request->subject;
        $replyMessage = $request->message;

        Mail::raw($replyMessage, function ($message) use ($recipient, $subject) {
            $message->to($recipient)
                    ->subject($subject);
        });

        $contact->replies()->create([
            'subject' => $subject,
            'message' => $replyMessage,
        ]);

        $contact->update([
            'is_read' => true,
        ]);

        return redirect()->route('admin.contacts.show', $id)->with('success', 'Reply email has been sent successfully.');
    }

    public function profileShow()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'old_password' => 'nullable|string',
            'password'     => 'nullable|string|min:8|confirmed',
        ]);

        $user->name  = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            // Verify old password before allowing the change
            if (!$request->filled('old_password') || !\Illuminate\Support\Facades\Hash::check($request->old_password, $user->password)) {
                return back()->withErrors(['old_password' => 'The old password you entered is incorrect.'])->withInput();
            }
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully.');
    }

    public function checkOldPassword(Request $request)
    {
        $user = Auth::user();
        $valid = Hash::check($request->old_password, $user->password);
        return response()->json(['valid' => $valid]);
    }

    // ─── Forgot Password ──────────────────────────────────────────────────────

    public function forgotPasswordForm()
    {
        return view('admin.auth.forgot-password');
    }

    public function forgotPasswordSend(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('success', 'A password reset link has been sent to your email address.');
        }

        return back()->withErrors(['email' => __($status)]);
    }

    public function resetPasswordForm(Request $request, $token)
    {
        return view('admin.auth.reset-password', [
            'token' => $token,
            'email' => $request->query('email', ''),
        ]);
    }

    public function resetPasswordUpdate(Request $request)
    {
        $request->validate([
            'token'                 => 'required',
            'email'                 => 'required|email',
            'password'              => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill(['password' => Hash::make($password)])
                     ->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('success', 'Password reset successfully. Please log in.');
        }

        return back()->withErrors(['email' => __($status)]);
    }
}

