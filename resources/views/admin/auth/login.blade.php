<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Meadow Minds</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap 5 CSS -->
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

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 440px;
            overflow: hidden;
            padding: 40px;
        }

        .login-logo {
            font-size: 3rem;
            color: var(--color-primary);
            text-align: center;
            margin-bottom: 20px;
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
    </style>
</head>
<body>

    <div class="login-card">
        <div class="text-center mb-4">
            <div class="login-logo mb-3">
                <img src="{{ asset('assets/images/meadow-minds-logo.png') }}" alt="Meadow Minds Logo" style="height: 72px; width: auto; max-width: 100%;">
            </div>
            <h3 class="fw-bold text-dark">Welcome Back</h3>
            <p class="text-muted">Sign in to control center</p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger border-0 p-3 mb-4" style="border-radius: 10px; font-size: 0.9rem;">
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="email" class="form-label text-muted fw-semibold">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="admin@meadowminds.com" required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label text-muted fw-semibold">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control border-end-0" id="password" name="password" placeholder="••••••••" required style="border-radius: 10px 0 0 10px;">
                    <button class="btn btn-outline-secondary bg-white border-start-0" type="button" id="togglePassword" style="border-radius: 0 10px 10px 0; border-color: #cbd5e1;">
                        <i class="fas fa-eye text-muted"></i>
                    </button>
                </div>
            </div>

            <div class="mb-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label text-muted text-sm" for="remember">Remember me</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">
                <i class="fas fa-sign-in-alt me-2"></i> Log In
            </button>

            <div class="text-center">
                <a href="{{ route('password.forgot') }}" class="text-decoration-none fw-semibold" style="font-size: 0.88rem; color: var(--color-primary);">Forgot Password?</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
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
    </script>
</body>
</html>
