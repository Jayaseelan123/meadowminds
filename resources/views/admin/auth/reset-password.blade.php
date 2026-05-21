<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Meadow Minds</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --color-primary: #1a5d3b;
            --color-secondary: #9ccc65;
            --font-family: 'Outfit', sans-serif;
        }

        body {
            font-family: var(--font-family);
            background: linear-gradient(135deg, var(--color-primary) 0%, #114028 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card-box {
            background: rgba(255, 255, 255, 0.97);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 440px;
            padding: 40px;
        }

        .btn-primary {
            background-color: var(--color-primary);
            border-color: var(--color-primary);
            padding: 12px;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #12422a;
            border-color: #12422a;
        }

        .form-control {
            padding: 12px 16px;
            border-radius: 10px;
            border: 1px solid #cbd5e1;
        }

        .form-control:focus {
            border-color: var(--color-secondary);
            box-shadow: 0 0 0 0.25rem rgba(156, 204, 101, 0.25);
        }

        .back-link {
            color: var(--color-primary);
            font-weight: 600;
            font-size: 0.88rem;
            text-decoration: none;
        }

        .back-link:hover {
            color: #12422a;
        }
    </style>
</head>
<body>

    <div class="card-box">
        <div class="text-center mb-4">
            <a href="{{ route('login') }}">
                <img src="{{ asset('assets/images/meadow-minds-logo.png') }}" alt="Meadow Minds Logo" style="height: 68px; width: auto; max-width: 100%;">
            </a>
            <h3 class="fw-bold text-dark mt-3 mb-1">Set New Password</h3>
            <p class="text-muted" style="font-size: 0.9rem;">Enter your email and choose a strong new password.</p>
        </div>

        {{-- Error messages --}}
        @if($errors->any())
            <div class="alert alert-danger border-0 p-3 mb-4" style="border-radius: 10px; font-size: 0.9rem;">
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('password.reset.update') }}" method="POST">
            @csrf

            {{-- Hidden token --}}
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-3">
                <label for="email" class="form-label text-muted fw-semibold">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0" style="border-radius: 10px 0 0 10px; color: #64748b;">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email"
                           class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror"
                           id="email"
                           name="email"
                           value="{{ old('email', $email) }}"
                           placeholder="admin@meadowminds.com"
                           required
                           autofocus
                           style="border-radius: 0 10px 10px 0;">
                </div>
                @error('email')
                    <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-muted fw-semibold">New Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0" style="border-radius: 10px 0 0 10px; color: #64748b;">
                        <i class="fas fa-key"></i>
                    </span>
                    <input type="password"
                           class="form-control border-start-0 border-end-0 ps-0 @error('password') is-invalid @enderror"
                           id="password"
                           name="password"
                           placeholder="Min. 8 characters"
                           required
                           style="border-radius: 0;">
                    <button class="btn btn-outline-secondary bg-white border-start-0 toggle-password" type="button" data-target="password" style="border-radius: 0 10px 10px 0; border-color: #cbd5e1;">
                        <i class="fas fa-eye text-muted"></i>
                    </button>
                </div>
                @error('password')
                    <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label text-muted fw-semibold">Confirm New Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0" style="border-radius: 10px 0 0 10px; color: #64748b;">
                        <i class="fas fa-shield-alt"></i>
                    </span>
                    <input type="password"
                           class="form-control border-start-0 border-end-0 ps-0"
                           id="password_confirmation"
                           name="password_confirmation"
                           placeholder="Re-type new password"
                           required
                           style="border-radius: 0;">
                    <button class="btn btn-outline-secondary bg-white border-start-0 toggle-password" type="button" data-target="password_confirmation" style="border-radius: 0 10px 10px 0; border-color: #cbd5e1;">
                        <i class="fas fa-eye text-muted"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">
                <i class="fas fa-lock me-2"></i> Reset Password
            </button>
        </form>

        <div class="text-center mt-2">
            <a href="{{ route('login') }}" class="back-link">
                <i class="fas fa-arrow-left me-1"></i> Back to Login
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
    </script>
</body>
</html>
