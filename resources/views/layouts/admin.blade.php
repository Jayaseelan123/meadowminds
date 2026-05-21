<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | Meadow Minds</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --sidebar-width: 260px;
            --color-primary: #1a5d3b;
            --color-primary-dark: #12422a;
            --color-secondary: #9ccc65;
            --color-accent: #fbc02d;
            --color-dark: #1e293b;
            --color-light: #f8fafc;
            --font-family: 'Outfit', sans-serif;
        }

        body {
            font-family: var(--font-family);
            background-color: #f1f5f9;
            color: #334155;
            overflow-x: hidden;
        }

        /* Sidebar styling */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: var(--color-dark);
            color: #fff;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-brand {
            padding: 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            background: #fff;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 14px 24px;
            color: #cbd5e1;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            border-left: 4px solid transparent;
        }

        .sidebar-menu li a:hover,
        .sidebar-menu li.active a {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.05);
            border-left-color: var(--color-secondary);
        }

        .sidebar-menu li a i {
            width: 24px;
            font-size: 1.1rem;
            margin-right: 12px;
        }

        /* Main Content wrapper */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        /* Top Navbar */
        .top-navbar {
            background-color: #fff;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.02);
            border-bottom: 1px solid #e2e8f0;
        }

        .content-container {
            padding: 30px;
            flex-grow: 1;
        }

        /* Card stylings */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            background-color: #fff;
            margin-bottom: 24px;
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #f1f5f9;
            padding: 18px 24px;
            font-weight: 600;
            color: var(--color-primary);
        }

        .btn-primary {
            background-color: var(--color-primary);
            border-color: var(--color-primary);
        }

        .btn-primary:hover, .btn-primary:focus {
            background-color: var(--color-primary-dark);
            border-color: var(--color-primary-dark);
        }

        /* Stat cards */
        .stat-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 24px;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            transition: transform 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        /* Breadcrumb custom styling */
        .breadcrumb-item a {
            color: var(--color-primary);
            text-decoration: none;
        }
        
        /* Hide caret arrow for profile dropdown */
        .hide-toggle-arrow::after {
            display: none !important;
        }
        
        #adminProfileDropdown:hover .rounded-circle {
            background-color: #f1f5f9 !important;
            border-color: #cbd5e1 !important;
            transform: scale(1.03);
        }
        
        #adminProfileDropdown:hover span {
            color: #1e293b !important;
        }
    </style>
    @yield('styles')
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand text-center d-flex align-items-center justify-content-center py-3 bg-white" style="border-bottom: 1px solid rgba(0,0,0,0.08);">
            <a href="{{ route('home') }}" target="_blank" class="d-block">
                <img src="{{ asset('assets/images/meadow-minds-logo.png') }}" alt="Meadow Minds Logo" style="height: 52px; width: auto; max-width: 95%; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.04));">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-chart-pie"></i> Dashboard
                </a>
            </li>
            <li class="{{ Request::is('admin/contacts*') ? 'active' : '' }}">
                <a href="{{ route('admin.contacts.index') }}">
                    <i class="fas fa-envelope-open-text"></i> Messages
                </a>
            </li>
            <li class="{{ Request::is('admin/gallery*') ? 'active' : '' }}">
                <a href="{{ route('admin.gallery.index') }}">
                    <i class="fas fa-images"></i> Gallery
                </a>
            </li>
            <li class="mt-4">
                <a href="/" target="_blank" style="border-left-color: var(--color-accent);">
                    <i class="fas fa-external-link-alt"></i> Visit Site
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Top Navbar -->
        <div class="top-navbar">
            <h5 class="m-0 text-dark font-weight-semibold">Control Center</h5>
            <div class="dropdown">
                <button class="btn btn-link text-dark p-0 border-0 d-flex align-items-center gap-2 text-decoration-none dropdown-toggle hide-toggle-arrow" type="button" id="adminProfileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="outline: none; box-shadow: none;">
                    <span class="text-sm font-weight-bold d-inline" style="color: #475569; font-size: 0.92rem; transition: color 0.2s ease; margin-right: 2px;">Admin</span>
                    <div class="d-flex align-items-center justify-content-center bg-light rounded-circle shadow-sm" style="width: 40px; height: 40px; border: 2px solid #e2e8f0; transition: all 0.2s ease;">
                        <i class="fas fa-user-shield text-success" style="font-size: 1.1rem;"></i>
                    </div>
                </button>
                <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg mt-2" aria-labelledby="adminProfileDropdown" style="border-radius: 12px; min-width: 200px;">
                    <li class="px-3 py-2 border-bottom mb-1 bg-light text-muted" style="font-size: 0.8rem; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                        <div class="fw-bold text-dark" style="font-size: 0.88rem;">{{ auth()->user()->name ?? 'Administrator' }}</div>
                        <div class="text-truncate" style="max-width: 160px; font-size: 0.78rem;">{{ auth()->user()->email ?? 'admin@meadowminds.com' }}</div>
                    </li>
                    <li>
                        <a class="dropdown-item py-2 d-flex align-items-center gap-2 text-secondary" style="font-size: 0.9rem;" href="{{ route('home') }}" target="_blank">
                            <i class="fas fa-globe text-muted" style="width: 16px;"></i> Visit Website
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form-dropdown" class="d-none">
                            @csrf
                        </form>
                        <a class="dropdown-item py-2 d-flex align-items-center gap-2 text-danger" style="font-size: 0.9rem;" href="#" onclick="event.preventDefault(); document.getElementById('logout-form-dropdown').submit();">
                            <i class="fas fa-sign-out-alt" style="width: 16px;"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content Container -->
        <div class="content-container">
            <!-- Flash Alerts -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert" style="border-left: 5px solid #198754 !important; border-radius: 8px;">
                    <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm" role="alert" style="border-left: 5px solid #dc3545 !important; border-radius: 8px;">
                    <i class="fas fa-exclamation-triangle me-2"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Premium Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
            <div class="modal-content border-0 shadow" style="border-radius: 16px;">
                <div class="modal-body text-center p-4">
                    <div class="mb-3 text-danger">
                        <i class="fas fa-exclamation-circle" style="font-size: 3.2rem;"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Are you sure?</h5>
                    <p class="text-muted mb-4" style="font-size: 0.92rem; line-height: 1.5;">Do you really want to delete this record? This action is permanent and cannot be undone.</p>
                    <div class="d-flex gap-2 justify-content-center">
                        <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal" style="border-radius: 8px; font-weight: 600; font-size: 0.9rem;">Cancel</button>
                        <button type="button" class="btn btn-danger px-4" id="deleteModalConfirmBtn" style="border-radius: 8px; font-weight: 600; font-size: 0.9rem;">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Global Modal Delete Confirmation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let activeDeleteForm = null;
            const confirmBtn = document.getElementById('deleteModalConfirmBtn');
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'), {
                backdrop: 'static',
                keyboard: false
            });

            // Universal click listener targeting all delete submit buttons globally
            document.addEventListener('click', function (e) {
                // Find if the clicked element (or any of its parents) is a submit button in a form
                const button = e.target.closest('form button[type="submit"], form input[type="submit"], form button:not([type]), form a.btn-outline-danger');
                if (!button) return;

                const form = button.closest('form');
                if (!form) return;

                // Determine if this is a DELETE action
                const isDeleteForm = form.querySelector('input[name="_method"][value="DELETE"]') || 
                                     form.action.includes('destroy') || 
                                     form.action.includes('delete') ||
                                     button.classList.contains('btn-outline-danger') ||
                                     button.title.toLowerCase().includes('delete') ||
                                     button.innerText.toLowerCase().includes('delete');
                
                if (isDeleteForm) {
                    e.preventDefault(); // Halt default form post execution
                    activeDeleteForm = form; // Store target form reference
                    deleteModal.show(); // Show modern Bootstrap confirmation modal
                }
            });

            // Handle the confirmation click in the modal
            if (confirmBtn) {
                confirmBtn.addEventListener('click', function () {
                    if (activeDeleteForm) {
                        activeDeleteForm.submit(); // Dispatch standard form submission securely
                    }
                });
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
