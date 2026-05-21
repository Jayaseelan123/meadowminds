@extends('layouts.app')

@section('title', $service->meta_title ?? 'Student Development Program | Meadow Minds')
@section('meta_description', $service->meta_description ?? '')

@section('content')
    <div class="page-header header-student">
        <div class="container">
            <h1>{{ $service->title }}</h1>
            <p>{{ $service->description }}</p>
        </div>
    </div>

    <section id="program-overview" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Program Overview</h2>
                <p>Nurturing the champions of tomorrow with a scientific and holistic development framework.</p>
            </div>
            <div class="grid-2">
                <div>
                    <p class="mb-20">The <strong>Student Development Program (SDP)</strong> at Meadow Minds
                        Academy is not just a course; it's a transformative journey. We move beyond textbooks to build
                        <strong>Core Intelligence</strong> and <strong>Life Skills</strong> that are essential for
                        success in the 21st century.
                    </p>
                    <p>Our program is built on the foundation of neuroscience and counselor psychology, ensuring that
                        every student unlocks their hidden potential and develops a growth mindset.</p>
                    <div class="mt-25 grid-2 gap-20">
                        <div class="stat-item bg-light p-15 border-radius-10 text-center">
                            <h4 class="text-primary text-2xl">5000+</h4>
                            <p class="text-xs">Students Trained</p>
                        </div>
                        <div class="stat-item bg-light p-15 border-radius-10 text-center">
                            <h4 class="text-secondary text-2xl">98%</h4>
                            <p class="text-xs">Success Rate</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/images/student.png') }}" alt="Student Growth" class="border-radius-20 shadow-hover" style="height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light border-radius-custom section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Key Focus Areas</h2>
                <p>We target the critical skills that schools often overlook.</p>
            </div>
            <div class="card-grid-4">
                <div class="card">
                    <i class="fas fa-brain text-primary"></i>
                    <h3>Cognitive Skills</h3>
                    <p>Enhancing memory, concentration, and logical reasoning through brain exercises.</p>
                </div>
                <div class="card">
                    <i class="fas fa-heart text-primary"></i>
                    <h3>Emotional EQ</h3>
                    <p>Managing academic stress, peer pressure, and building self-confidence.</p>
                </div>
                <div class="card">
                    <i class="fas fa-clock text-primary"></i>
                    <h3>Self-Management</h3>
                    <p>Scientific methods for time management, goal setting, and habit formation.</p>
                </div>
                <div class="card">
                    <i class="fas fa-comments text-primary"></i>
                    <h3>Communication</h3>
                    <p>Mastering public speaking, body language, and interpersonal skills.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="grid-2" style="align-items: center;">
                <div>
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80"
                        alt="Learning Methodology" class="border-radius-20 shadow-hover">
                </div>
                <div>
                    <h2 class="text-primary mb-20">Learning Methodology</h2>
                    <p class="mb-25">Our <strong>70-20-10 Experiential Learning Model</strong> ensures
                        deep-rooted skill acquisition.</p>
                    <div class="module-item bg-light mb-15">
                        <span class="text-2xl font-bold text-accent mr-15">70%</span>
                        <div>
                            <h4>Activity Based</h4>
                            <p>Learning through games, role-plays, and real-world simulations.</p>
                        </div>
                    </div>
                    <div class="module-item bg-light mb-15">
                        <span class="text-2xl font-bold text-accent mr-15">20%</span>
                        <div>
                            <h4>Peer & Mentor Learning</h4>
                            <p>Collaborative projects and personalized feedback from experts.</p>
                        </div>
                    </div>
                    <div class="module-item bg-light">
                        <span class="text-2xl font-bold text-accent mr-15">10%</span>
                        <div>
                            <h4>Frameworks & Tools</h4>
                            <p>Scientific concepts and specialized development tools.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="methodology bg-light section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Modules Covered</h2>
                <p>A multi-dimensional curriculum for total transformation.</p>
            </div>
            <div class="grid-2">
                <div class="highlight-box bg-white p-40 border-radius-20">
                    <h3 class="text-primary mb-20"><i class="fas fa-layer-group"></i> Foundation Modules</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Self-Awareness & DMIT Insights</li>
                        <li><i class="fas fa-check"></i> Memory Enhancement Techniques</li>
                        <li><i class="fas fa-check"></i> Logic & Critical Thinking</li>
                        <li><i class="fas fa-check"></i> Creative Problem Solving</li>
                    </ul>
                </div>
                <div class="highlight-box bg-white p-40 border-radius-20">
                    <h3 class="text-secondary mb-20"><i class="fas fa-star"></i> Advanced Modules</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Leadership & Team Building</li>
                        <li><i class="fas fa-check"></i> Public Speaking Mastery</li>
                        <li><i class="fas fa-check"></i> Emotional Intelligence (EQ)</li>
                        <li><i class="fas fa-check"></i> Career Goal Strategy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="grid-2" style="align-items: center;">
                <div>
                    <h2 class="text-primary">Duration & Format</h2>
                    <p class="my-20">We respect the academic schedule of students. Our format is designed to
                        be high-impact without being overwhelming.</p>
                    <div class="mv-card">
                        <div class="mb-20 flex items-center gap-15">
                            <i class="fas fa-hourglass-half text-2xl text-accent"></i>
                            <div>
                                <strong>Duration:</strong> 12 Weeks (3 Months)
                            </div>
                        </div>
                        <div class="mb-20 flex items-center gap-15">
                            <i class="fas fa-users text-2xl text-accent"></i>
                            <div>
                                <strong>Batch Size:</strong> Small Groups (Max 15)
                            </div>
                        </div>
                        <div class="flex items-center gap-15">
                            <i class="fas fa-calendar-check text-2xl text-accent"></i>
                            <div>
                                <strong>Schedule:</strong> Weekend / After-school Batches
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=800&q=80"
                        alt="Classroom Format" class="border-radius-20 shadow-hover">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Outcomes & Benefits</h2>
                <p>The measurable growth we promise to deliver.</p>
            </div>
            <div class="report-grid">
                <div class="report-card">
                    <i class="fas fa-rocket"></i>
                    <div>
                        <h4>Peak Performance</h4>
                        <p>30% average increase in academic focus.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-shield-alt"></i>
                    <div>
                        <h4>Unshakable Confidence</h4>
                        <p>Stage-fear free public speaking ability.</p>
                    </div>
                </div>
                <div class="report-card">
                    <i class="fas fa-compass"></i>
                    <div>
                        <h4>Clear Direction</h4>
                        <p>Data-backed career and stream selection.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Enrollment Process</h2>
                <p>Joining the elite circle of Powered learners.</p>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <h4>1. Profile Discovery</h4>
                    <p>DMIT scan to identify innate strengths and weaknesses.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <h4>2. Counselling Call</h4>
                    <p>Reviewing the scan with parents to set development goals.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <h4>3. Enrollment</h4>
                    <p>Completing registration and joining the upcoming batch.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-sm">
        <div class="container">
            <div class="cta-box">
                <h2 class="mb-20">Register Now - Secure Your Future</h2>
                <p class="text-lg opacity-90 mb-40">Limited seats available for the
                    upcoming seasonal batch. Give your child the edge.</p>
                <div class="flex-center gap-20 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-hero-white">Apply for Assessment</a>
                    <a href="{{ route('contact') }}" class="btn btn-hero-outline">Request a Callback</a>
                </div>
            </div>
        </div>
    </section>
@endsection