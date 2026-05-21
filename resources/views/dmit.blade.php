@extends('layouts.app')

@section('title', $service->meta_title ?? 'DMIT - Science of Potential | Meadow Minds')
@section('meta_description', $service->meta_description ?? '')

@section('content')
    <div class="page-header">
        <div class="container">
            <h1>{{ $service->title }}</h1>
            <p>{{ $service->description }}</p>
        </div>
    </div>

    <section id="what-is-dmit" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>DMIT</h2>
                <p>Decoding the unique biological blueprint of your brain through the science of fingerprints.</p>
            </div>
            <div class="grid-2">
                <div>
                    <p class="mb-20"><strong>DMIT (Dermatoglyphics Multiple Intelligence Test)</strong>
                        technique has been powered by scientists and research experts from world-renowned
                        universities and it is based on knowledge from Genetics, Embryology, Dermatoglyphics, Psychology,
                        and Neuroscience. Dermatoglyphics (from ancient Greek derma = skin, glyph = carving) is the
                        scientific study of fingerprints. The term was coined by Dr. Harold Cummins, the father of
                        American fingerprint analysis.</p>
                    <p>The process of fingerprint identification has been used for several hundred years now.
                        Scientists researched skin ridge patterns and established that the fingerprint patterns actually
                        develop in the womb and are fully formed by the fourth month of pregnancy.
                    </p>
                    <div class="mt-20 bg-light p-20 border-radius-15 border-left-primary">
                        <p class="italic text-primary" style="font-weight: 500;">"Fingerprints are the external representation of the internal brain."</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/images/DMIT.png') }}" alt="DMIT Technology" class="border-radius-20 shadow-hover" style="height: 400px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section id="science-behind-dmit" class="bg-light border-radius-custom-alt section-padding">
        <div class="container">
            <div class="section-title">
                <h2>The Science Behind DMIT</h2>
                <p>A multi-disciplinary approach combining biology, psychology, and technology.</p>
            </div>
            <div class="card-grid-4">
                <div class="card">
                    <i class="fas fa-dna"></i>
                    <h3>Genetics</h3>
                    <p>Fingerprints are formed by highly concentrated DNA coding and remain unchanged throughout a
                        person's life.</p>
                </div>
                <div class="card">
                    <i class="fas fa-baby"></i>
                    <h3>Embryology</h3>
                    <p>Brain and fingerprints develop simultaneously in the womb between the 13th and 19th week of
                        pregnancy.</p>
                </div>
                <div class="card">
                    <i class="fas fa-brain"></i>
                    <h3>Neuroscience</h3>
                    <p>Each finger corresponds to a specific brain lobe (Frontal, Parietal, Temporal, Occipital) and its
                        neural pathways.</p>
                </div>
                <div class="card">
                    <i class="fas fa-fingerprint"></i>
                    <h3>Dermatoglyphics</h3>
                    <p>The statistical study of dermal patterns which has been used for over 200 years in medical and
                        psychological research.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="multiple-intelligences" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>The 8 Multiple Intelligences</h2>
                <p>Based on Dr. Howard Gardner's theory, we map your unique intelligence profile.</p>
            </div>
            <div class="card-grid-4">
                <div class="card shadow-hover">
                    <i class="fas fa-book"></i>
                    <h3>Linguistic</h3>
                    <p>Word smart: Ability to use language effectively for expression and communication.</p>
                </div>
                <div class="card shadow-hover">
                    <i class="fas fa-calculator"></i>
                    <h3>Logical</h3>
                    <p>Number smart: Proficiency in logical reasoning, problem-solving, and analysis.</p>
                </div>
                <div class="card shadow-hover">
                    <i class="fas fa-mountain-sun"></i>
                    <h3>Spatial</h3>
                    <p>Picture smart: Capacity to visualize objects in 3D and understand spatial relationships.</p>
                </div>
                <div class="card shadow-hover">
                    <i class="fas fa-running"></i>
                    <h3>Kinesthetic</h3>
                    <p>Body smart: Coordination and control over physical movements and dexterity.</p>
                </div>
                <div class="card shadow-hover">
                    <i class="fas fa-music"></i>
                    <h3>Musical</h3>
                    <p>Music smart: Sensitivity to rhythm, pitch, melody, and musical patterns.</p>
                </div>
                <div class="card shadow-hover">
                    <i class="fas fa-users-viewfinder"></i>
                    <h3>Interpersonal</h3>
                    <p>People smart: Ability to understand and interact effectively with others.</p>
                </div>
                <div class="card shadow-hover">
                    <i class="fas fa-heart-pulse"></i>
                    <h3>Intrapersonal</h3>
                    <p>Self smart: Deep self-awareness and understanding of one's own emotions.</p>
                </div>
                <div class="card shadow-hover">
                    <i class="fas fa-leaf"></i>
                    <h3>Naturalistic</h3>
                    <p>Nature smart: Sensitivity to the natural world and environmental patterns.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="quotients" class="bg-light border-radius-custom section-padding">
        <div class="container">
            <div class="section-title">
                <h2>The 4 Key Quotients</h2>
                <p>Beyond traditional IQ, we measure the factors that define overall success.</p>
            </div>
            <div class="card-grid-4">
                <div class="card bg-white shadow-hover">
                    <div class="text-primary fs-30 mb-15"><i class="fas fa-lightbulb"></i></div>
                    <h3>IQ</h3>
                    <p><strong>Intelligence Quotient:</strong> Measures cognitive capacity, logical reasoning, and
                        analytical power.</p>
                </div>
                <div class="card bg-white shadow-hover">
                    <div class="text-secondary fs-30 mb-15"><i class="fas fa-heart-pulse"></i></div>
                    <h3>EQ</h3>
                    <p><strong>Emotional Quotient:</strong> Measures the ability to understand and manage emotions and
                        build empathy.</p>
                </div>
                <div class="card bg-white shadow-hover">
                    <div class="text-accent fs-30 mb-15"><i class="fas fa-shield-virus"></i></div>
                    <h3>AQ</h3>
                    <p><strong>Adversity Quotient:</strong> Measures resilience and the ability to handle challenges and
                        stress.</p>
                </div>
                <div class="card bg-white shadow-hover">
                    <div class="text-purple-dark fs-30 mb-15"><i class="fas fa-wand-magic-sparkles"></i></div>
                    <h3>CQ</h3>
                    <p><strong>Creativity Quotient:</strong> Measures the capacity for innovation, imagination, and
                        divergent thinking.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sample-report" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Sample Report Features</h2>
                <p>A deep-dive into your biological configuration within a 70+ page report.</p>
            </div>
            <div class="report-grid">
                <div class="report-card">
                    <i class="fas fa-chart-pie"></i>
                    <div>
                        <h4>Intelligence Distribution</h4>
                        <p>A percentage-based breakdown of your 8 multiple intelligences.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-user-gear"></i>
                    <div>
                        <h4>Behavioral Profile</h4>
                        <p>Identifying DISC profiles (Dominance, Influence, Steadiness, Conscientiousness).</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-graduation-cap"></i>
                    <div>
                        <h4>Career Roadmap</h4>
                        <p>Top 10 professional recommendations based on your inborn talent.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-shield-halved"></i>
                    <div>
                        <h4>Remedial Actions</h4>
                        <p>Practical suggestions to overcome weaknesses and capitalize on strengths.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="bg-light section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Benefits of DMIT</h2>
                <p>Personalized insights for every phase of growth.</p>
            </div>
            <div class="grid-2">
                <div class="highlight-box shadow-hover border-radius-20 p-30 mb-30 bg-white">
                    <h4 class="text-primary"><i class="fas fa-user-graduate"></i> For Students</h4>
                    <p class="text-sm mt-10">End the confusion of career choices. Discover your
                        natural learning style to study smarter, not harder, and reduce academic pressure.</p>
                </div>
                <div class="highlight-box shadow-hover border-radius-20 p-30 mb-30 bg-white">
                    <h4 class="text-secondary"><i class="fas fa-users"></i> For Parents</h4>
                    <p class="text-sm mt-10">Replace generic parenting with "Scientific
                        Parenting". Understand your child's temperament to build a stronger emotional bond.</p>
                </div>
                <div class="highlight-box shadow-hover border-radius-20 p-30 bg-white">
                    <h4 class="text-accent"><i class="fas fa-chalkboard-teacher"></i> For Teachers</h4>
                    <p class="text-sm mt-10">Design customized teaching strategies that resonate
                        with each student's unique learning profile for 100% classroom success.</p>
                </div>
                <div class="highlight-box shadow-hover border-radius-20 p-30 bg-white">
                    <h4 class="text-purple-dark"><i class="fas fa-briefcase"></i> For Career Seekers</h4>
                    <p class="text-sm mt-10">Achieve professional fulfillment by aligning your
                        career with your DNA. Improve leadership skills and emotional intelligence.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>DMIT Process (Step-by-Step)</h2>
                <p>A simple, non-invasive 4-step journey to self-discovery.</p>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <h4>1. Biometric Scanning</h4>
                    <p>Capturing high-resolution images of all 10 fingerprints using advanced digital scanners (5-10
                        mins).</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <h4>2. Expert Analysis</h4>
                    <p>Patterns are coded and analyzed by our certified dermatoglyphics analysts using proprietary
                        software.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <h4>3. Report Completion</h4>
                    <p>Generation of a comprehensive 70+ page report detailing 100+ intelligence parameters.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <h4>4. Professional Counselling</h4>
                    <p>A detailed session with our senior counsellor to interpret the findings and build your future
                        roadmap.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="bg-light border-radius-custom-alt section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Everything you need to know about DMIT.</p>
            </div>
            <div class="grid-2">
                <div class="card shadow-hover bg-white p-30 border-radius-20">
                    <h4 class="mb-15 text-primary">Are fingerprints unique?</h4>
                    <p>Yes, the probability of two people having the same fingerprints is 1 in 64 billion. Even
                        identical twins have different fingerprints.</p>
                </div>
                <div class="card shadow-hover bg-white p-30 border-radius-20">
                    <h4 class="mb-15 text-primary">Do fingerprints change?</h4>
                    <p>No, fingerprint ridge patterns are set by the 19th week of pregnancy and remain unchanged
                        throughout life, except for scarring.</p>
                </div>
                <div class="card shadow-hover bg-white p-30 border-radius-20">
                    <h4 class="mb-15 text-primary">Is the test invasive?</h4>
                    <p>Not at all. It involves simple biometric scanning of all ten fingers, taking less than 15 minutes
                        of your time.</p>
                </div>
                <div class="card shadow-hover bg-white p-30 border-radius-20">
                    <h4 class="mb-15 text-primary">Is DMIT scientifically valid?</h4>
                    <p>DMIT is based on medical research in genetics, embryology, and neuroscience. It has been used for
                        decades for psychological profiling.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-sm">
        <div class="container">
            <div class="cta-box">
                <h2 class="mb-20">Book Your Appointment Today</h2>
                <p class="text-lg opacity-90 mb-40">Stop guessing and start knowing. Join
                    10,000+ individuals who have unlocked their potential.</p>
                <div class="flex-center gap-20 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-hero-white">Book DMIT Appointment</a>
                    <a href="{{ route('contact') }}" class="btn btn-hero-outline">View Sample Report</a>
                </div>
            </div>
        </div>
    </section>
@endsection