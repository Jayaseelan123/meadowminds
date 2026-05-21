<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $contacts = ContactMessage::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function contactsShow($id)
    {
        $contact = ContactMessage::findOrFail($id);
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
}
