<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-info">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/meadow-minds-logo.png') }}" alt="Meadow Minds Logo" style="height: 70px; width: auto;">
                </div>
                <p>{{ $site_settings['footer_text'] ?? 'Leading the way in scientific intelligence mapping and holistic student development.' }}</p>
                <div class="flex gap-20 mt-20">
                    <a href="{{ $site_settings['facebook_url'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $site_settings['twitter_url'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $site_settings['instagram_url'] ?? '#' }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $site_settings['linkedin_url'] ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('service.detail', 'dmit') }}">DMIT</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Programs</h4>
                <ul>
                    @foreach($nav_services ?? [] as $nav_srv)
                        @if($nav_srv->slug !== 'dmit')
                            <li><a href="{{ route('service.detail', $nav_srv->slug) }}">{{ $nav_srv->title }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="footer-links">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fas fa-phone"></i> {{ $site_settings['contact_phone'] ?? '+91 733 877 4604' }}</li>
                    <li><i class="fas fa-envelope"></i> {{ $site_settings['contact_email'] ?? 'meadowsminds@gmail.com' }}</li>
                    <li><i class="fas fa-location-dot"></i> {{ $site_settings['address_krishnagiri'] ?? 'Krishnagiri Branch' }}</li>
                    <li><i class="fas fa-location-dot"></i> {{ $site_settings['address_coimbatore'] ?? 'Coimbatore Branch' }}</li>
                    <li><i class="fas fa-location-dot"></i> {{ $site_settings['address_pollachi'] ?? 'Pollachi Branch' }}</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; {{ date('Y') }} {{ $site_settings['site_name'] ?? 'Meadow Minds' }}. All Rights Reserved.</p>
            <div class="developer-logo">
                Powered by
                <a href="https://aspirentech.com" target="_blank">
                    <img src="https://aspirentech.com/assets/aspirentech-logo-new-B7I5o4Z6.png" alt="AspirenTech" height="20">
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield('scripts')
