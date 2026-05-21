@extends('layouts.admin')

@section('title', 'Profile Settings')

@section('content')
    <div class="mb-4 d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div>
            <h3 class="fw-bold text-dark m-0">Profile Settings</h3>
            <p class="text-muted m-0">Manage your administrator account credentials and personal details.</p>
        </div>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary d-flex align-items-center gap-2" style="border-radius: 8px; font-weight: 600; font-size: 0.9rem;">
            <i class="fas fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm" style="border-radius: 16px; border: 1px solid rgba(0,0,0,0.04) !important;">
                <div class="card-header bg-white border-0 py-3 px-4" style="border-radius: 16px 16px 0 0;">
                    <div class="d-flex align-items-center gap-2">
                        <i class="fas fa-user-cog text-success" style="font-size: 1.2rem;"></i>
                        <h5 class="fw-bold text-dark m-0">Account Details</h5>
                    </div>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold text-muted" style="font-size: 0.88rem;">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0" style="color: #64748b;"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control border-start-0 ps-0 @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required placeholder="e.g. Administrator">
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold text-muted" style="font-size: 0.88rem;">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0" style="color: #64748b;"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required placeholder="e.g. admin@meadowminds.com">
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr class="my-4" style="border-color: #e2e8f0;">

                        <h6 class="fw-bold text-dark mb-3"><i class="fas fa-lock me-1 text-muted"></i> Change Password <small class="text-muted fw-normal">(Leave blank to keep current password)</small></h6>

                        <div class="row g-3">
                            {{-- Old Password (full width) --}}
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="old_password" class="form-label fw-bold text-muted" style="font-size: 0.88rem;">Old Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="color: #64748b;"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control border-start-0 border-end-0 ps-0 @error('old_password') is-invalid @enderror" id="old_password" name="old_password" placeholder="Enter your current password" autocomplete="current-password">
                                        <button class="btn btn-outline-secondary bg-white border-start-0 border-end-0 toggle-password" type="button" data-target="old_password" style="border-color: #cbd5e1;">
                                            <i class="fas fa-eye text-muted"></i>
                                        </button>
                                        <span class="input-group-text bg-light border-start-0" id="old_password_status" style="min-width: 38px; transition: all 0.2s;"></span>
                                    </div>
                                    @error('old_password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    <div id="old_password_msg" class="mt-1" style="font-size: 0.82rem;"></div>
                                </div>
                            </div>
                            {{-- New Password --}}
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-bold text-muted" style="font-size: 0.88rem;">New Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="color: #64748b;"><i class="fas fa-key"></i></span>
                                        <input type="password" class="form-control border-start-0 border-end-0 ps-0 @error('password') is-invalid @enderror" id="password" name="password" placeholder="Min. 8 characters" disabled autocomplete="new-password">
                                        <button class="btn btn-outline-secondary bg-white border-start-0 toggle-password" type="button" data-target="password" style="border-color: #cbd5e1;">
                                            <i class="fas fa-eye text-muted"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- Confirm New Password --}}
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label fw-bold text-muted" style="font-size: 0.88rem;">Confirm New Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="color: #64748b;"><i class="fas fa-shield-alt"></i></span>
                                        <input type="password" class="form-control border-start-0 border-end-0 ps-0" id="password_confirmation" name="password_confirmation" placeholder="Re-type password" disabled autocomplete="new-password">
                                        <button class="btn btn-outline-secondary bg-white border-start-0 toggle-password" type="button" data-target="password_confirmation" style="border-color: #cbd5e1;">
                                            <i class="fas fa-eye text-muted"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2 mt-4">
                            <button type="submit" class="btn btn-primary px-4 fw-bold" style="border-radius: 8px;">
                                <i class="fas fa-save me-1"></i> Save Changes
                            </button>
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary px-4" style="border-radius: 8px;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card bg-light border-0 shadow-none" style="border-radius: 16px;">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-success mb-3"><i class="fas fa-shield-alt me-1"></i> Security Notice</h5>
                    <p class="text-muted" style="font-size: 0.88rem; line-height: 1.6;">
                        Keeping your login credentials up to date ensures your administration panel remains secure.
                    </p>
                    <ul class="text-muted text-sm ps-3 mb-0" style="font-size: 0.88rem; line-height: 1.6;">
                        <li class="mb-2">Use a unique, high-entropy password.</li>
                        <li class="mb-2">Do not share your dashboard credentials.</li>
                        <li class="mb-0">Update your credentials periodically to adhere to best security practices.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');
            const passwordInput = document.getElementById(targetId);
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });

    const oldPassInput       = document.getElementById('old_password');
    const newPassInput       = document.getElementById('password');
    const confirmPassInput   = document.getElementById('password_confirmation');
    const statusIcon         = document.getElementById('old_password_status');
    const msgDiv             = document.getElementById('old_password_msg');
    const checkUrl           = "{{ route('admin.profile.check-password') }}";
    const csrfToken          = document.querySelector('meta[name="csrf-token"]') 
                               ? document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                               : "{{ csrf_token() }}";

    let debounceTimer = null;

    function lockNewFields() {
        newPassInput.disabled     = true;
        confirmPassInput.disabled = true;
        newPassInput.value        = '';
        confirmPassInput.value    = '';
    }

    function unlockNewFields() {
        newPassInput.disabled     = false;
        confirmPassInput.disabled = false;
        newPassInput.focus();
    }

    oldPassInput.addEventListener('input', function () {
        clearTimeout(debounceTimer);

        const val = oldPassInput.value.trim();

        // Reset state while typing
        statusIcon.innerHTML = '';
        msgDiv.innerHTML     = '';
        oldPassInput.classList.remove('is-valid', 'is-invalid');
        lockNewFields();

        if (val.length === 0) return;

        // Show spinner while waiting
        statusIcon.innerHTML = '<i class="fas fa-circle-notch fa-spin text-muted"></i>';

        debounceTimer = setTimeout(function () {
            fetch(checkUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ old_password: val })
            })
            .then(res => res.json())
            .then(data => {
                if (data.valid) {
                    // ✅ Correct — unlock new password fields
                    oldPassInput.classList.add('is-valid');
                    oldPassInput.classList.remove('is-invalid');
                    statusIcon.innerHTML = '<i class="fas fa-check-circle text-success"></i>';
                    msgDiv.innerHTML     = '<span class="text-success fw-semibold"><i class="fas fa-unlock-alt me-1"></i>Password verified — you can now set a new password.</span>';
                    unlockNewFields();
                } else {
                    // ❌ Wrong — keep new password fields locked
                    oldPassInput.classList.add('is-invalid');
                    oldPassInput.classList.remove('is-valid');
                    statusIcon.innerHTML = '<i class="fas fa-times-circle text-danger"></i>';
                    msgDiv.innerHTML     = '<span class="text-danger fw-semibold"><i class="fas fa-exclamation-circle me-1"></i>Incorrect old password.</span>';
                    lockNewFields();
                }
            })
            .catch(() => {
                statusIcon.innerHTML = '';
                msgDiv.innerHTML     = '<span class="text-warning">Unable to verify. Please try again.</span>';
            });
        }, 600); // 600ms debounce — fires after user stops typing
    });
});
</script>
@endsection
