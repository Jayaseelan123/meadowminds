@extends('layouts.app')

@section('title', $service->meta_title ?? 'Outbound Training | Meadow Minds')
@section('meta_description', $service->meta_description ?? '')

@section('content')
    <div class="page-header header-outbound">
        <div class="container">
            <h1>{{ $service->title }}</h1>
            <p>{{ $service->description }}</p>
        </div>
    </div>

    <!-- 1. Importance of Experiential Learning -->
    <section class="section-padding">
        <div class="container">
            <div class="grid-2" style="align-items: center; gap: 80px;">
                <div>
                    <h2 class="text-primary mb-25">Outbound Activity Learning</h2>
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 25px;">
                        The Outbound Training is a technique used to enhance the efficiency of students through
                        Experiential Learning. In other words, taking the group of employees away from the actual work
                        environment into the outdoors and are assigned some challenging task or activity that needs to
                        be completed by them within a given time frame.
                    </p>
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8;">
                        By facing real-world challenges in a controlled outdoor environment, students learn to manage
                        fear, collaborate with peers, and discover their true leadership potential.
                    </p>
                </div>
                <div class="reveal">
                    <img src="{{ asset('assets/images/onbound.png') }}" alt="Experiential Learning"
                        class="border-radius-30 shadow-hover" style="height: 350px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- 2 & 3. Team Building & Cognitive Games -->
    <section class="section-padding bg-light" style="padding: 100px 0;">
        <div class="container">
            <div class="section-title">
                <h2>Experiential Modules</h2>
                <p>Designed to challenge both the body and the mind.</p>
            </div>
            <div class="grid-2" style="gap: 40px;">
                <div class="activity-card" style="display: flex; flex-direction: column; background: white; padding: 40px; border-radius: 25px; box-shadow: var(--shadow-soft);">
                    <div style="background: #e8f5e9; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center; border-radius: 20px; margin-bottom: 30px;">
                        <i class="fas fa-people-group" style="font-size: 2rem; color: var(--color-primary);"></i>
                    </div>
                    <h3 class="text-primary mb-20">Team Building Activities</h3>
                    <p style="margin-bottom: 25px;">Engage in Trust Falls, Rope Challenges, and Collaborative
                        Problem-Solving missions. These activities break down barriers and teach students the importance
                        of synergy and supportive communication.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Trust & Reliability Exercises</li>
                        <li><i class="fas fa-check-circle"></i> Leadership Identification Tasks</li>
                        <li><i class="fas fa-check-circle"></i> Conflict Resolution Drills</li>
                    </ul>
                </div>
                <div class="activity-card" style="display: flex; flex-direction: column; background: white; padding: 40px; border-radius: 25px; box-shadow: var(--shadow-soft);">
                    <div style="background: #f5f5f5; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center; border-radius: 20px; margin-bottom: 30px;">
                        <i class="fas fa-puzzle-piece" style="font-size: 2rem; color: var(--color-secondary);"></i>
                    </div>
                    <h3 class="text-primary mb-20">Memory & Cognitive Games</h3>
                    <p style="margin-bottom: 25px;">Strategy-based outdoor games that require intense focus and mental
                        agility. These games are designed to improve memory retention, strategic thinking, and pattern
                        recognition under pressure.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Giant Strategy Boards</li>
                        <li><i class="fas fa-check-circle"></i> Navigation Challenges</li>
                        <li><i class="fas fa-check-circle"></i> Logic-Based Outdoor Quests</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Add-On Courses (Archery / Shooting) -->
    <section class="section-padding">
        <div class="container">
            <div class="grid-2" style="align-items: center; gap: 80px;">
                <div class="reveal">
                    <img src="{{ asset('assets/images/specializedskills.avif') }}" alt="Special Skills"
                        class="border-radius-30 shadow-hover" style="height: 350px; object-fit: cover; width: 100%;">
                </div>
                <div class="reveal">
                    <h2 class="text-primary mb-25">Activities For Build Concentration Power (BCP)</h2>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Dart Board</li>
                        <li><i class="fas fa-check-circle"></i> Ring Toss</li>
                        <li><i class="fas fa-check-circle"></i> Archery</li>
                        <li><i class="fas fa-check-circle"></i> Shooting</li>
                        <li><i class="fas fa-check-circle"></i> Rope Climbing</li>
                        <li><i class="fas fa-check-circle"></i> Treasure Hunt</li>
                        <li><i class="fas fa-check-circle"></i> Jenga</li>
                        <li><i class="fas fa-check-circle"></i> Foosball</li>
                        <li><i class="fas fa-check-circle"></i> Rope Puzzle Game</li>
                        <li><i class="fas fa-check-circle"></i> Tug of War</li>
                        <li><i class="fas fa-check-circle"></i> Catch the Stick</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Benefits of Outdoor Learning -->
    <section class="section-padding" style="background: var(--gradient-primary); color: white; border-radius: 100px 100px 0 0; padding: 100px 0; margin-top: 50px;">
        <div class="container">
            <div class="section-title">
                <h2 style="color: white;">Benefits of Outdoor Learning</h2>
                <p style="color: rgba(255,255,255,0.8);">Beyond the fun, there is deep transformation.</p>
            </div>
            <div class="grid-4" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 40px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-shield-alt" style="font-size: 3rem; margin-bottom: 20px; color: #fff;"></i>
                    <h4 style="color: #fff;">Resilience</h4>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #fff;">Learning to bounce back from failure and physical strain.</p>
                </div>
                <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 40px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-users" style="font-size: 3rem; margin-bottom: 20px; color: #fff;"></i>
                    <h4 style="color: #fff;">Leadership</h4>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #fff;">Stepping up and guiding others in unpredictable situations.</p>
                </div>
                <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 40px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-puzzle-piece" style="font-size: 3rem; margin-bottom: 20px; color: #fff;"></i>
                    <h4 style="color: #fff;">Problem Solving</h4>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #fff;">Applying logic and creativity to overcome obstacles.</p>
                </div>
                <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 40px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-heart" style="font-size: 3rem; margin-bottom: 20px; color: #fff;"></i>
                    <h4 style="color: #fff;">Emotional EQ</h4>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #fff;">Understanding group dynamics and building empathy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Photo Gallery Section -->
    <section id="gallery" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Moments of Transformation</h2>
                <p>A glimpse into our training expeditions and successful camps.</p>
            </div>
            <style>
                .gallery-grid {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr) !important;
                    gap: 20px;
                }
                @media (max-width: 991px) {
                    .gallery-grid {
                        grid-template-columns: repeat(2, 1fr) !important;
                    }
                }
                @media (max-width: 576px) {
                    .gallery-grid {
                        grid-template-columns: 1fr !important;
                    }
                }
            </style>
            <div class="gallery-grid">
                <div class="gallery-item-small" style="height: 250px; border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('assets/images/erded.png') }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="gallery-item-small" style="height: 250px; border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('assets/images/rope.png') }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="gallery-item-small" style="height: 250px; border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('assets/images/rimg.png') }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="gallery-item-small" style="height: 250px; border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('assets/images/archery.png') }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="gallery-item-small" style="height: 250px; border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('assets/images/shoot.png') }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="gallery-item-small" style="height: 250px; border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('assets/images/roped.png') }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Enquiry CTA -->
    <section class="section-padding" style="padding: 60px 0;">
        <div class="container">
            <div style="background: #fdfcff; border-radius: 30px; padding: 60px 40px; text-align: center; border: 2px dashed #6f42c1; box-shadow: 0 4px 20px rgba(111, 66, 193, 0.03);">
                <h2 style="color: #6f42c1; font-weight: 700; font-size: 2.1rem; margin-bottom: 18px; font-family: inherit;">Ready for the Ultimate Learning Expedition?</h2>
                <p style="margin-bottom: 35px; font-size: 1.05rem; color: #555; font-weight: 400; line-height: 1.6;">Contact us to organize customized outbound trips for schools, colleges, or corporate teams.</p>
                <a href="{{ route('contact') }}" class="btn" style="background: #ffffff; color: #6f42c1; font-weight: 700; font-size: 0.95rem; letter-spacing: 0.8px; padding: 16px 45px; border-radius: 50px; text-transform: uppercase; text-decoration: none; border: none; box-shadow: 0 8px 24px rgba(111, 66, 193, 0.12); display: inline-flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                    Send Program Enquiry
                </a>
            </div>
        </div>
    </section>
@endsection