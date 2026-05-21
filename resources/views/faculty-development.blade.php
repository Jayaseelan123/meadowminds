@extends('layouts.app')

@section('title', $service->meta_title ?? 'Faculty Development Program | Meadow Minds')
@section('meta_description', $service->meta_description ?? '')

@section('content')
    <div class="page-header header-faculty">
        <div class="container">
            <h1>{{ $service->title }}</h1>
            <p>{{ $service->description }}</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Program Introduction</h2>
                <p>Empowering the mentors who shape the future of our nation.</p>
            </div>
            <div class="grid-2">
                <div>
                    <p class="mb-20">The <strong>Faculty Development Program (FDP)</strong> at Meadow Minds
                        Academy is a flagship initiative designed to empower educators with modern pedagogical tools,
                        digital literacy, and psychological insights. We bridge the gap between traditional teaching and
                        the demands of 21st-century learners.</p>
                    <p>Our program focuses on professional growth, research excellence, and institutional leadership,
                        ensuring that faculty members remain at the forefront of educational innovation and
                        institutional excellence.</p>
                    <ul class="feature-list mt-20">
                        <li><i class="fas fa-check-circle"></i> Skill-based Pedagogical Training</li>
                        <li><i class="fas fa-check-circle"></i> Digital Transformation Integration</li>
                        <li><i class="fas fa-check-circle"></i> Research & Publication Guidance</li>
                    </ul>
                </div>
                <div>
                    <img src="{{ asset('assets/images/faculty.png') }}" alt="Faculty Seminar" class="border-radius-20 shadow-hover" style="height: 400px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section class="border-radius-custom-alt bg-light section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Why FDP is Important Today</h2>
                <p>The role of an educator is shifting from a 'Sage on the Stage' to a 'Guide on the Side'.</p>
            </div>
            <div class="grid-2">
                <div>
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80"
                        alt="Modern Classroom" class="border-radius-20 shadow-hover">
                </div>
                <div>
                    <p class="mb-20">In an era of rapid digital transformation and evolving policy
                        frameworks like <strong>NEP 2020</strong>, teachers must adapt to new realities:</p>
                    <div class="approach-card">
                        <ul class="feature-list">
                            <li><i class="fas fa-robot"></i> <strong>AI & Technology:</strong> Staying relevant in a
                                world of ChatGPT and AI-driven learning.</li>
                            <li><i class="fas fa-brain"></i> <strong>Student Psychology:</strong> Understanding the
                                mental wellbeing and attention spans of Gen-Z.</li>
                            <li><i class="fas fa-award"></i> <strong>Global Benchmarking:</strong> Matching the
                                standards of international accredited universities.</li>
                            <li><i class="fas fa-file-invoice"></i> <strong>Compliance:</strong> Meeting the rigorous
                                documentation needs for NAAC, NBA, and NIRF.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="methodology section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Modules Covered</h2>
                <p>A comprehensive curriculum tailored for institutional excellence.</p>
            </div>
            <div class="card-grid">
                <div class="card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Innovative Teaching</h3>
                    <p>Project-based learning, flipped classrooms, and gamified teaching techniques.</p>
                </div>
                <div class="card">
                    <i class="fas fa-microchip"></i>
                    <h3>AI Tools</h3>
                    <p>Leveraging AI for automated grading, content creation, and personalized learning paths.</p>
                </div>
                <div class="card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>LMS</h3>
                    <p>Mastering Moodle, Canvas, and Google Classroom for seamless digital education.</p>
                </div>
                <div class="card">
                    <i class="fas fa-book-reader"></i>
                    <h3>Research & Publication</h3>
                    <p>Writing high-impact papers, understanding Scopus/Web of Science, and securing grants.</p>
                </div>
                <div class="card">
                    <i class="fas fa-scroll"></i>
                    <h3>NAAC/NBA/NEP 2020</h3>
                    <p>Strategic alignment with national educational policies and accreditation standards.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="grid-2">
                <div>
                    <h2 class="text-primary">Training Format</h2>
                    <p class="my-20">Flexible delivery models to suit the institutional ecosystem.</p>
                    <div class="module-item bg-light mb-20">
                        <i class="fas fa-school text-primary"></i>
                        <div>
                            <h4>Physical FDP</h4>
                            <p>Intensive on-campus training with hands-on practice sessions.</p>
                        </div>
                    </div>
                    <div class="module-item bg-light mb-20">
                        <i class="fas fa-video text-primary"></i>
                        <div>
                            <h4>Virtual FDP</h4>
                            <p>Synchronized live sessions with digital certificates and LMS access.</p>
                        </div>
                    </div>
                    <div class="module-item bg-light">
                        <i class="fas fa-layer-group text-primary"></i>
                        <div>
                            <h4>Hybrid Mentorship</h4>
                            <p>Continuous support through both online modules and in-person reviews.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80"
                        alt="Training Session" class="border-radius-20 shadow-hover">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Benefits to Institutions</h2>
                <p>Transforming individual growth into institutional success.</p>
            </div>
            <div class="report-grid">
                <div class="report-card">
                    <i class="fas fa-chart-line"></i>
                    <div>
                        <h4>Improved NIRF/NAAC</h4>
                        <p>Better documentation and quality scores.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-users"></i>
                    <div>
                        <h4>Faculty Retention</h4>
                        <p>Invested and motivated staff members.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-graduation-cap"></i>
                    <div>
                        <h4>Student Satisfaction</h4>
                        <p>Enhanced results and better placement records.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-sm">
        <div class="container">
            <div class="cta-box">
                <h2 class="text-2xl mb-20">Contact for Institutional Training</h2>
                <p class="text-lg mb-40 opacity-90">We offer customized roadmaps for
                    Universities, Colleges, and Schools.</p>
                <a href="{{ route('contact') }}" class="btn btn-hero-white">Book Institutional Consultation</a>
            </div>
        </div>
    </section>
@endsection