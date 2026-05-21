@extends('layouts.app')

@section('title', $service->meta_title ?? 'Parental Counselling | Meadow Minds')
@section('meta_description', $service->meta_description ?? '')

@section('content')
    <div class="page-header header-parental">
        <div class="container">
            <h1>{{ $service->title }}</h1>
            <p>{{ $service->description }}</p>
        </div>
    </div>

    <!-- 1. Why Parental Guidance Matters -->
    <section class="section-padding">
        <div class="container">
            <div class="grid-2" style="align-items: center; gap: 60px;">
                <div>
                    <h2 class="text-primary mb-25">Why Parental Guidance Matters</h2>
                    <p class="mb-20" style="line-height: 1.8;">In an era dominated by digital distractions and
                        intense academic competition, traditional parenting often falls short. Parental guidance matters
                        because it bridges the gap between a child's natural abilities and the external world's
                        expectations.</p>
                    <div class="highlight-box" style="border-left: 5px solid var(--color-secondary); padding-left: 15px; background: #f8f9fa;">
                        <p class="italic" style="color: var(--color-dark);">"Studies show that a child's success is 70% dependent on the
                            support and understanding they receive from their parents during their formative years."</p>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?auto=format&fit=crop&w=800&q=80"
                        alt="Parental Guidance" class="border-radius-20 shadow-hover" style="height: 350px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Understanding Genetic Intelligence -->
    <section class="section-padding bg-light" style="border-radius: 0 100px 0 100px;">
        <div class="container">
            <div class="grid-2" style="align-items: center; gap: 60px;">
                <div>
                    <img src="{{ asset('assets/images/future_vision_right_2.png') }}" alt="Genetic Intelligence"
                        class="border-radius-20 shadow-hover" style="height: 350px; object-fit: cover; width: 100%;">
                </div>
                <div>
                    <h2 class="text-primary mb-25">Understanding Genetic Intelligence</h2>
                    <p class="mb-20">Every child is born with a unique biological blueprint. At Meadow Minds
                        Academy, we help parents decode their child's <strong>Innate Intelligence</strong> through
                        scientific mapping. When you understand how your child's brain is naturally wired, you stop
                        comparing them to others and start nurturing their true self.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-fingerprint"></i> Identifying Learning Styles (V-A-K)</li>
                        <li><i class="fas fa-dna"></i> Understanding Behavioral Temperaments</li>
                        <li><i class="fas fa-brain"></i> Mapping 8 Multiple Intelligences</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Parenting for Modern Education -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Parenting for Modern Education</h2>
                <p>Navigating the complex world of NEP 2020, AI, and Career Choices.</p>
            </div>
            <div class="card-grid-3">
                <div class="card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Education Roadmap</h3>
                    <p>Aligning school choices and academic subjects with the child's natural cognitive strengths.</p>
                </div>
                <div class="card">
                    <i class="fas fa-laptop"></i>
                    <h3>Digital Balance</h3>
                    <p>Techniques to manage screen time while leveraging technology for intellectual growth.</p>
                </div>
                <div class="card">
                    <i class="fas fa-route"></i>
                    <h3>Future Readiness</h3>
                    <p>Preparing children for careers that haven't been invented yet by focusing on critical thinking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Emotional & Behavioural Guidance -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="grid-2" style="align-items: center;">
                <div>
                    <h2 class="text-primary mb-25">Emotional & Behavioural Guidance</h2>
                    <p class="mb-20">Behavioural issues are often just "unmet needs" or "misunderstood
                        signals." Our counselling sessions provide practical tools to handle:</p>
                    <div class="approach-card">
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle" style="color: var(--color-secondary);"></i> Managing Academic Stress & Anxiety</li>
                            <li><i class="fas fa-check-circle" style="color: var(--color-secondary);"></i> Handling Stubbornness & Screen Addiction</li>
                            <li><i class="fas fa-check-circle" style="color: var(--color-secondary);"></i> Building Unshakable Confidence in Introverted Children</li>
                            <li><i class="fas fa-check-circle" style="color: var(--color-secondary);"></i> Effective Communication for Teenagers</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80"
                        alt="Emotional Bond" class="border-radius-20 shadow-hover" style="height: 350px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Counselling Format -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Counselling Format</h2>
                <p>Personalized sessions designed for maximum impact and comfort.</p>
            </div>
            <div class="card-grid-3">
                <div class="report-card">
                    <i class="fas fa-user-friends"></i>
                    <div>
                        <h4>One-on-One Sessions</h4>
                        <p>Deep-dive sessions with both parents to discuss the child's report and roadmap.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-video"></i>
                    <div>
                        <h4>Online/Offline Support</h4>
                        <p>Flexible scheduling for busy parents via Zoom or in-person at our academy.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-calendar-check"></i>
                    <div>
                        <h4>Follow-up Strategy</h4>
                        <p>3-month handholding support to ensure the strategies are working on the ground.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Book a Session CTA -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="cta-box">
                <h2>Become a Scientific Parent Today</h2>
                <p class="text-lg opacity-90 mb-40">Stop guessing. Start knowing. Book your personalized parental counselling session today.</p>
                <div class="flex-center gap-20 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-hero-white">Book Your Session Now</a>
                    <a href="{{ route('contact') }}" class="btn btn-hero-outline">Request a Callback</a>
                </div>
            </div>
        </div>
    </section>
@endsection