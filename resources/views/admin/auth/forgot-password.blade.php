<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Meadow Minds</title>
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
            <h3 class="fw-bold text-dark mt-3 mb-1">Forgot Password?</h3>
            <p class="text-muted" style="font-size: 0.9rem;">Enter your registered email and we'll send you a reset link.</p>
        </div>

        {{-- Success message --}}
        @if(session('success'))
            <div class="alert alert-success border-0 p-3 mb-4" style="border-radius: 10px; font-size: 0.9rem;">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            </div>
        @endif

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

        <form action="{{ route('password.forgot.send') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="form-label text-muted fw-semibold">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0" style="border-radius: 10px 0 0 10px; color: #64748b;">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email"
                           class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="admin@meadowminds.com"
                           required
                           autofocus
                           style="border-radius: 0 10px 10px 0;">
                </div>
                @error('email')
                    <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">
                <i class="fas fa-paper-plane me-2"></i> Send Reset Link
            </button>
        </form>

        <div class="text-center mt-2">
            <a href="{{ route('login') }}" class="back-link">
                <i class="fas fa-arrow-left me-1"></i> Back to Login
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
