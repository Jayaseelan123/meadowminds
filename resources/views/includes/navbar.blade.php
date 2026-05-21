<!-- Header / Navbar -->
<header>
    <div class="container">
        <nav>
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/images/meadow-minds-logo.png') }}" alt="Meadow Minds Logo" style="height: 70px; width: auto;">
            </a>

            <ul class="nav-links" id="navLinks">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ route('service.detail', 'dmit') }}" class="{{ request()->routeIs('service.detail') && request()->route('slug') == 'dmit' ? 'active' : '' }}">DMIT</a></li>
                <li class="dropdown">
                    <a href="#" class="{{ request()->is('programs*') ? 'active' : '' }}">Programs <i class="fas fa-chevron-down dropdown-icon"></i></a>
                    <ul class="dropdown-menu">
                        @foreach($nav_services ?? [] as $nav_srv)
                            @if($nav_srv->slug !== 'dmit')
                                <li><a href="{{ route('service.detail', $nav_srv->slug) }}">{{ $nav_srv->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>

            <div class="nav-toggle" id="navToggle">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </div>
</header>
