@extends('layouts.app')

@section('title', $service->meta_title ?? 'Soft Skills & Communication | Meadow Minds')
@section('meta_description', $service->meta_description ?? '')

@section('content')
    <div class="page-header header-soft-skills">
        <div class="container">
            <h1>{{ $service->title }}</h1>
            <p>{{ $service->description }}</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Our Natural Learning Approach</h2>
                <p>Learn English the same way you learned your mother tongue—naturally and effortlessly.</p>
            </div>
            <div class="grid-2">
                <div>
                    <p class="mb-20">At Meadow Minds, we believe that language is a skill to be acquired,
                        not just a subject to be studied. Our <strong>Natural Learning Approach</strong> bypasses the
                        tedious memorization of rules and focuses on subconscious acquisition through immersion.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-brain"></i> <strong>Subconscious Acquisition:</strong> Absorbing language
                            patterns naturally.</li>
                        <li><i class="fas fa-comments"></i> <strong>Communication First:</strong> Expression takes
                            priority over perfect grammar.</li>
                        <li><i class="fas fa-sync"></i> <strong>Continuous Feedback:</strong> Real-time correction in a
                            supportive environment.</li>
                    </ul>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80"
                        alt="Learning Atmosphere" class="border-radius-20 shadow-hover" style="height: 350px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light border-radius-custom section-padding">
        <div class="container">
            <div class="grid-2">
                <div>
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80"
                        alt="Traditional Education Failings" class="border-radius-20 shadow-hover" style="height: 350px; object-fit: cover; width: 100%;">
                </div>
                <div>
                    <h2 class="text-primary">Why Traditional English Learning Fails?</h2>
                    <p class="my-20">Most students study English for years in school but still struggle to
                        speak fluently. Here is why:</p>
                    <div class="approach-card">
                        <ul class="feature-list">
                            <li><i class="fas fa-times-circle text-danger"></i> <strong>Grammar Trap:</strong> Focusing too much on rules creates hesitation.</li>
                            <li><i class="fas fa-times-circle text-danger"></i> <strong>Translation Method:</strong> Thinking in your native language slows you down.</li>
                            <li><i class="fas fa-times-circle text-danger"></i> <strong>Lack of Context:</strong> Learning isolated words without real-world application.</li>
                            <li><i class="fas fa-times-circle text-danger"></i> <strong>Fear of Mistakes:</strong> Rigid classrooms kill the confidence required to speak.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Our 80/20 Speaking Method</h2>
                <p>The Pareto Principle applied to language fluency.</p>
            </div>
            <div class="cta-box">
                <div class="grid-2 items-center">
                    <div class="text-5xl font-bold">80%</div>
                    <div class="text-left">
                        <h3>Active Speaking & Practice</h3>
                        <p>Simulated real-life situations, role-plays, debates, and interactive sessions to build muscle
                            memory.</p>
                    </div>
                </div>
                <hr class="my-30 opacity-30">
                <div class="grid-2 items-center">
                    <div class="text-5xl font-bold opacity-70">20%</div>
                    <div class="text-left">
                        <h3>Core Fundamentals</h3>
                        <p>Essential vocabulary, structural patterns, and pronunciation basics that support the speaking
                            practice.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="methodology section-padding" id="highlights">
        <div class="container">
            <div class="section-title">
                <h2>Course Highlights</h2>
            </div>
            <div class="card-grid-4">
                <div class="card">
                    <i class="fas fa-user-tie"></i>
                    <h3>Professional Etiquette</h3>
                    <p>Learn the nuances of corporate behavior and professional communication.</p>
                </div>
                <div class="card">
                    <i class="fas fa-microphone"></i>
                    <h3>Public Speaking</h3>
                    <p>Master the stage and influence audiences with powerful presentation skills.</p>
                </div>
                <div class="card">
                    <i class="fas fa-id-card"></i>
                    <h3>Interview Mastery</h3>
                    <p>Scientific techniques to crack the most competitive job interviews.</p>
                </div>
                <div class="card">
                    <i class="fas fa-smile-beam"></i>
                    <h3>Emotional Intelligence</h3>
                    <p>Build self-awareness and better relationships through EQ building.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background: var(--light-bg);">
        <div class="container">
            <div class="grid-2">
                <div>
                    <h2 class="text-primary">Who Can Join?</h2>
                    <p class="my-20">Our programs are designed for anyone looking to unlock professional growth.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-graduation-cap"></i> <strong>Students:</strong> Prepare for a successful career.</li>
                        <li><i class="fas fa-briefcase"></i> <strong>Job Seekers:</strong> Enhance employability skills.</li>
                        <li><i class="fas fa-user-tie"></i> <strong>Working Professionals:</strong> For leadership and promotions.</li>
                        <li><i class="fas fa-laptop"></i> <strong>Entrepreneurs:</strong> For better pitching and networking.</li>
                    </ul>
                </div>
                <div class="mv-card">
                    <h3 class="text-secondary mb-20"><i class="fas fa-calendar-alt"></i> Batch Timings</h3>
                    <div class="mb-15 border-bottom p-bottom-10">
                        <strong><i class="fas fa-sun"></i> Morning Batch:</strong> 10:00 AM - 12:00 PM
                    </div>
                    <div class="mb-15 border-bottom p-bottom-10">
                        <strong><i class="fas fa-cloud-sun"></i> Afternoon Batch:</strong> 02:00 PM - 04:00 PM
                    </div>
                    <div class="mb-15 border-bottom p-bottom-10">
                        <strong><i class="fas fa-moon"></i> Evening Batch:</strong> 05:00 PM - 07:00 PM
                    </div>
                    <p class="text-sm text-gray mt-10"><i class="fas fa-info-circle"></i> Weekend batches available for working professionals.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Results & Outcomes</h2>
                <p>What you achieve after completing the program.</p>
            </div>
            <div class="report-grid">
                <div class="report-card">
                    <i class="fas fa-rocket"></i>
                    <div>
                        <h4>0-to-Hero Confidence</h4>
                        <p>Eliminate stage fear completely.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-bolt"></i>
                    <div>
                        <h4>Instant Response</h4>
                        <p>Start thinking in English instantly.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-award"></i>
                    <div>
                        <h4>Global Eligibility</h4>
                        <p>Ready for international environments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-sm">
        <div class="container">
            <div class="cta-box">
                <h2 class="mb-20">Ready to Transform Your Future?</h2>
                <p class="text-lg opacity-90 mb-40">Join the next batch and experience the power of Natural Learning.</p>
                <a href="{{ route('contact') }}" class="btn btn-hero-white text-lg">Enroll Now - Reserve Your Seat</a>
            </div>
        </div>
    </section>
@endsection