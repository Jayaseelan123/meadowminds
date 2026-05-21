@extends('layouts.app')

@section('title', $page->meta_title ?? 'Meadow Minds | Empowering Potential Through Science')
@section('meta_description', $page->meta_description ?? '')
@section('meta_keywords', $page->meta_keywords ?? '')

@section('content')
    <!-- Hero Section -->
    <section class="hero hero-index">
        <div class="container">
            <div class="hero-content">
                <h1>{{ $page->heading ?? 'Discover Your Child’s True Potential Today' }}</h1>
                <p>{{ $page->content ?? 'Unlock innate intelligence and personality through scientific assessment and personalized mentorship at Meadow Minds.' }}
                </p>
                <div class="hero-btns">
                    <a href="#programs" class="btn btn-hero-white">Explore Programs</a>
                    <a href="{{ route('contact') }}" class="btn btn-hero-outline">Book Free Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Meadow Minds (Short Intro) -->
    <section class="about-intro section-padding-sm">
        <div class="container">
            <div class="grid-2 items-center gap-80">
                <div>
                    <div class="section-title text-left">
                        <h2>Empowering Minds, Shaping Futures</h2>
                    </div>
                    <p class="intro-p">
                        Meadow Minds is a premier institution dedicated to unlocking human potential through scientific
                        intelligence mapping and holistic development. We combine the latest breakthroughs in genetics,
                        embryology, and neuroscience to provide a personalized roadmap for every student's success,
                        ensuring a future filled with clarity and confidence.
                    </p>
                    <a href="{{ route('about') }}" class="btn btn-primary">Read More </a>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80"
                        alt="About Meadow Minds" class="border-radius-30 shadow-hover">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Core Programs (Overview Cards) -->
    <section id="programs" class="bg-light section-padding-sm">
        <div class="container">
            <div class="section-title">
                <h2>Our Core Programs</h2>
                <p>Designed to nurture growth from childhood to professional excellence.</p>
            </div>
            <div class="card-grid">
                @foreach($services ?? [] as $srv)
                    <div class="card">
                        <img src="{{ $srv->image ? (Str::startsWith($srv->image, ['http://', 'https://']) ? $srv->image : asset('assets/' . $srv->image)) : asset('assets/images/default-program.jpg') }}"
                            alt="{{ $srv->title }}" class="card-img-top">
                        <h3>{{ $srv->title }}</h3>
                        <p>{{ $srv->description }}</p>
                        <a href="{{ route('service.detail', $srv->slug) }}" class="btn btn-outline btn-full">Learn More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose section-padding-sm">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Meadow Minds?</h2>
                <p>We combine science and empathy to create lasting impact.</p>
            </div>
            <div class="card-grid gap-30">
                <div class="card card-padding-large text-center">
                    <i class="fas fa-microscope icon-large"></i>
                    <h4 class="margin-bottom-15">Scientific Assessment</h4>
                    <p class="text-sm">Evidence-based tools and neuroscience for accurate
                        potential mapping. We rely on data, not guesses.</p>
                </div>
                <div class="card card-padding-large text-center">
                    <i class="fas fa-file-invoice icon-large"></i>
                    <h4 class="margin-bottom-15">Personalized Reports</h4>
                    <p class="text-sm">Detailed 70+ page blueprints specifically tailored to your
                        unique biological and psychological profile.</p>
                </div>
                <div class="card card-padding-large text-center">
                    <i class="fas fa-user-tie icon-large"></i>
                    <h4 class="margin-bottom-15">Experienced Mentors</h4>
                    <p class="text-sm">Guidance from certified counsellors and seasoned industry
                        professionals with years of expertise.</p>
                </div>
                <div class="card card-padding-large text-center">
                    <i class="fas fa-brain icon-large"></i>
                    <h4 class="margin-bottom-15">Practical Skill Development</h4>
                    <p class="text-sm">Focus on real-world application and hands-on experiential
                        learning that sticks for a lifetime.</p>
                </div>
                <div class="card card-padding-large text-center">
                    <i class="fas fa-route icon-large"></i>
                    <h4 class="margin-bottom-15">Career-Oriented Guidance</h4>
                    <p class="text-sm">Aligning your education and skills with the most suitable
                        and profitable career pathways.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How DMIT Works (Simple 4 Steps) -->
    <section class="bg-light section-padding-sm">
        <div class="container">
            <div class="section-title">
                <h2>How DMIT Works</h2>
                <p>A simple, non-invasive process to unlock your biological potential.</p>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <i class="fas fa-fingerprint timeline-icon"></i>
                    <h4>Fingerprint Collection</h4>
                    <p>Scanning of all 10 fingers using high-definition biometric sensors.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <i class="fas fa-laptop-medical timeline-icon"></i>
                    <h4>Scientific Analysis</h4>
                    <p>Proprietary software analysis based on Dermatoglyphics and Neuroscience.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <i class="fas fa-file-alt timeline-icon"></i>
                    <h4>Detailed Report</h4>
                    <p>Generation of a comprehensive 70+ page talent discovery report.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <i class="fas fa-comments timeline-icon"></i>
                    <h4>Counselling Session</h4>
                    <p>Interpretation of the report by expert counsellors for a final roadmap.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->


    <!-- Final CTA Section -->
    <section class="bg-light section-padding-sm">
        <div class="container">
            <div class="cta-box">
                <h2>Ready to Discover Your True Self?</h2>
                <p>Join thousands of families who have found clarity and direction with Meadow Minds.</p>
                <div class="flex-center gap-20 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-hero-white">Book Assessment Now</a>
                    <a href="{{ route('contact') }}" class="btn btn-hero-outline">Download Brochure</a>
                </div>
            </div>
        </div>
    </section>
@endsection