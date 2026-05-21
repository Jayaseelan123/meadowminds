@extends('layouts.app')

@section('title', $page->meta_title ?? 'Contact Us | Meadow Minds')
@section('meta_description', $page->meta_description ?? '')
@section('meta_keywords', $page->meta_keywords ?? '')

@section('content')
    <div class="page-header header-contact">
        <div class="container">
            <h1>{{ $page->heading ?? 'Contact Us' }}</h1>
            <p>{{ $page->content ?? 'Get in touch with our experts to start your developmental journey.' }}</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Info -->
                <div class="contact-info-card">
                    <h3 class="mb-30 text-primary">Contact Details</h3>
                    <div class="info-item">
                        <i class="fas fa-location-dot"></i>
                        <div>
                            <h4>Coimbatore Branch (HO)</h4>
                            <p>Lawly Road, R.S. Puram<br>Coimbatore - 641002</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-location-dot"></i>
                        <div>
                            <h4>Krishnagiri Branch</h4>
                            <p>D/NO: 1/H20/1, Near State Bank of India,<br>
                                TNHB PHASE 2,
                                Kattiganapalli, Krishnagiri
                                <br>Krishnagiri - 635002
                            </p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-location-dot"></i>
                        <div>
                            <h4>Pollachi Branch</h4>
                            <p>Kochin Road, Ambarampalayam<br>Pollachi - 642004</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Phone</h4>
                            <p>{{ $site_settings['contact_phone'] ?? '+91 733 877 4604' }}</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>{{ $site_settings['contact_email'] ?? 'meadowsminds@gmail.com' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-card">
                    <h3 class="mb-30 text-primary">Send us a Message</h3>

                    @if(session('success'))
                        <div style="background-color: rgba(40, 167, 69, 0.15); border-left: 5px solid #28a745; padding: 15px; border-radius: 5px; margin-bottom: 20px; color: #155724;">
                            <i class="fas fa-check-circle" style="margin-right: 8px;"></i> {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div style="background-color: rgba(220, 53, 69, 0.15); border-left: 5px solid #dc3545; padding: 15px; border-radius: 5px; margin-bottom: 20px; color: #721c24;">
                            <ul style="margin: 0; padding-left: 20px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" placeholder="Enter your full name" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-row grid-2 gap-20">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="Your mobile number" value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" placeholder="Your email address" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Interested Program / Subject *</label>
                            <input type="text" id="subject" name="subject" placeholder="e.g. DMIT, Student Development, General Inquiry" value="{{ old('subject') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message *</label>
                            <textarea id="message" name="message" rows="5" placeholder="How can we help you?" required>{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full p-15" style="border: none; cursor: pointer; font-weight: 600;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection