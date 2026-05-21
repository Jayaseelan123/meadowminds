@extends('layouts.app')

@section('title', $page->meta_title ?? 'About Us | Meadow Minds')
@section('meta_description', $page->meta_description ?? '')
@section('meta_keywords', $page->meta_keywords ?? '')

@section('content')
    <div class="page-header">
        <div class="container">
            <h1>{{ $page->heading ?? 'About Meadow Minds' }}</h1>
            <p>{{ $page->content ?? 'Empowering minds through scientific mapping and holistic guidance.' }}</p>
        </div>
    </div>

    <!-- 1. Our Introduction -->
    <section id="introduction" class="section-padding">
        <div class="container">
            <div class="grid-2 items-center gap-80">
                <div class="reveal">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80"
                        alt="About Meadow Minds" class="border-radius-30 shadow-hover">
                </div>
                <div>
                    <div class="section-title text-left">
                        <h2>Our Introduction</h2>
                    </div>
                    <p class="intro-p">
                        India comprised of 15,16,865 school, 8 million inspired learners’ with one lakh plus classrooms.
                        Among that unfortunately we can see at least one student in a class who cannot adapt his
                        Education. This situation has been there for years and years even though the concept teaching
                        has changed for better. Many times we heard from parents and even teachers complaining that
                        their ward is not taking interest on their studies. The main reason for this is that students
                        are different in their learning styles while some understand things better.
                    </p>
                    <p class="intro-p">
                        It is explained to them, another may learn more by seeing and a third by doing on experience. But
                        for long time our formal education has depended on the teacher lecturing information by note.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Message from Founder -->
    <section id="founder-message" class="text-white section-padding bg-primary">
        <div class="container">
            <div class="founder-box">
                <div class="relative">
                    <img src="{{ asset('assets/images/sun1.png') }}" alt="Director" class="border-radius-20 shadow-large" width="300px"
                        height="350px" style="background-color:rgb(185, 184, 184); object-fit: cover;">
                    <div class="director-badge" style="color: aliceblue;">Sunitha Anand
                        <div class="font-bold text-md">Founder</div>
                    </div>
                </div>
                <div>
                    <h2 class="text-white margin-bottom-10">Message from the Founder</h2>
                    <p class="philosophy-text-alt intro-p italic opacity-90 margin-bottom-30 text-lg">
                        "My mission has always been to ensure that no talent remains hidden under the debris of
                        traditional expectations. At Meadow Minds, we aren't just selling assessments; we are providing
                        'Life Maps'. We want to see a world where every child walks into their classroom and every
                        professional walks into their office knowing exactly what they are built for."
                    </p>
                    <div class="font-bold text-md">—</div>
                    <div class="opacity-70">Founder & Managing Director, Meadow Minds</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership/Directors -->
    <section id="leadership" class="section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Directors</h2>
            </div>

            <div class="leadership-grid">
                <!-- Chairman Card -->
                <div class="leader-card reveal">
                    <div class="leader-card-accent"></div>
                    <div class="leader-image-container">
                        <img src="{{ asset('assets/images/redwer.jpg') }}" alt="Chairman" class="leader-image" style="object-fit: cover;">
                    </div>
                    <div class="leader-info">
                        <h3 class="leader-role">Sridhar M J</h3>
                        <h4 class="leader-name">Director</h4>
                    </div>
                </div>

                <!-- Secretary Card -->
                <div class="leader-card reveal">
                    <div class="leader-card-accent"></div>
                    <div class="leader-image-container">
                        <img src="{{ asset('assets/images/director2.jpeg') }}" alt="Secretary General" class="leader-image" style="object-fit: cover;">
                    </div>
                    <div class="leader-info">
                        <h3 class="leader-role">Anjesh kumar P</h3>
                        <h4 class="leader-name">Director</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Our Philosophy -->
    <section id="philosophy" class="bg-light section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Our Philosophy</h2>
                <p>Decoding the genius through science and empathy.</p>
            </div>
            <div class="max-w-900 text-center">
                <div class="philosophy-card">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="philosophy-text">
                        "Every individual is a one-of-a-kind masterpiece. Our philosophy is to replace the
                        'One-Size-Fits-All' education model with a personalized, data-driven approach that respects
                        biological uniqueness."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 & 4. Mission & Vision -->
    <section id="mission-vision" class="section-padding">
        <div class="container">
            <div class="grid-2 gap-50">
                <div class="mission-card">
                    <i class="fas fa-bullseye icon-large text-accent" style="color: azure; font-size: 3rem;"></i>
                    <h2 class="text-white margin-bottom-20">Our Mission</h2>
                    <p class="text-md opacity-90">To nurture students’ holistic development by identifying their innate
                        and genetic intelligence through meaningful learning and MI tools.
                        To equip practical skills to become confident leaders and create a positive impact on their
                        careers.</p>
                </div>
                <div class="vision-card">
                    <i class="fas fa-eye icon-large text-primary" style="font-size: 3rem;"></i>
                    <h2 class="text-primary margin-bottom-20">Our Vision</h2>
                    <p class="text-md text-gray">To build a culture that discovers and develops each individual’s
                        natural intelligence and true potential.
                        To empower people to grow as capable, responsible, and future-ready global citizens.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Our Approach (Scientific + Holistic) -->
    <section id="approach" class="bg-light section-padding border-radius-custom">
        <div class="container">
            <div class="section-title">
                <h2>Our Approach</h2>
                <p>The perfect blend of Hard Science and Human Development.</p>
            </div>
            <div class="grid-2 gap-40">
                <div class="approach-card-alt">
                    <div class="flex items-center gap-20 mb-25">
                        <span class="icon-box science"><i class="fas fa-microscope"></i></span>
                        <h3 class="margin-0 text-primary">Scientific Focus</h3>
                    </div>
                    <p class="text-gray line-height-1-7">We utilize <strong>Dermatoglyphics Multiple Intelligence
                            Test (DMIT)</strong> and <strong>Psychometric Analysis</strong> to extract raw data about
                        brain dominance and neural concentrations. This eliminates guesswork and provides a factual
                        foundation for all our recommendations.</p>
                </div>
                <div class="approach-card-alt">
                    <div class="flex items-center gap-20 mb-25">
                        <span class="icon-box holistic"><i class="fas fa-heart"></i></span>
                        <h3 class="margin-0 text-primary">Holistic Focus</h3>
                    </div>
                    <p class="text-gray line-height-1-7">Our intervention doesn't end with a report. We provide
                        <strong>Experiential Training</strong> and <strong>Mentorship</strong> to develop Emotional EQ,
                        Soft Skills, and Resilience, ensuring that the individual is not just smart, but life-ready.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Why Intelligence Mapping Matters Today -->
    <section id="importance" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Why Intelligence Mapping Matters Today</h2>
                <p>Navigating the complex world with biological certainty.</p>
            </div>
            <div class="grid-2 items-center">
                <div>
                    <img src="{{ asset('assets/images/gall01.png') }}" alt="Future Readiness" class="border-radius-30 shadow-hover">
                </div>
                <div class="feature-list-container">
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> <strong>Avoid Career Mismatch:</strong> 80% of
                            individuals are in the wrong job by age 30. We prevent this from day one.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Academic Efficiency:</strong> Study according to
                            your natural learning style (Visual, Auditory, or Kinesthetic).</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Stress Reduction:</strong> Eliminating peer
                            pressure by focusing on "Self-Actualization" rather than "Social Comparison."</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Relationship Harmony:</strong> Understanding
                            innate temperaments leads to better parent-child and interpersonal bonding.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Certifications / Affiliations -->
    <section id="certifications" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Our Certifications & Affiliations</h2>
                <p>Recognized globally for quality and scientific accuracy.</p>
            </div>
            <div class="cert-grid flex justify-around flex-wrap gap-30 opacity-60">
                <div class="cert-item text-center">
                    <i class="fas fa-award icon-large text-primary margin-bottom-15"></i>
                    <h4 class="margin-0">ISO 9001:2015</h4>
                </div>
                <div class="cert-item text-center">
                    <i class="fas fa-university icon-large text-primary margin-bottom-15"></i>
                    <h4 class="margin-0">IAO Accredited</h4>
                </div>
                <div class="cert-item text-center">
                    <i class="fas fa-shield-halved icon-large text-primary margin-bottom-15"></i>
                    <h4 class="margin-0">Certified DMIT Practitioners</h4>
                </div>
                <div class="cert-item text-center">
                    <i class="fas fa-certificate icon-large text-primary margin-bottom-15"></i>
                    <h4 class="margin-0">NCVT Affiliated</h4>
                </div>
            </div>
        </div>
    </section>
@endsection