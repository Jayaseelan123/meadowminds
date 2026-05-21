@extends('layouts.app')

@section('title', $service->meta_title ?? 'Mock Interview Mastery | Meadow Minds')
@section('meta_description', $service->meta_description ?? '')

@section('content')
    <div class="page-header">
        <div class="container">
            <h1>{{ $service->title }}</h1>
            <p>{{ $service->description }}</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Why Mock Interviews Matter?</h2>
                <p>Preparation is the key to confidence. Don't let your first interview be the real one.</p>
            </div>
            <div class="grid-2 gap-80 items-center">
                <div>
                    <p class="mb-20">Mock interviews are simulated sessions that mimic the actual interview environment,
                        helping you identify your strengths and work on your weaknesses. At Meadow Minds, we provide a
                        safe space to fail, learn, and excel.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> <strong>Overcome Anxiety:</strong> Get used to the pressure of an interview setting.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Refine Body Language:</strong> Learn how to project confidence through non-verbal cues.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Perfect Your Answers:</strong> Receive expert feedback on your responses and delivery.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Industry Insights:</strong> Understand what recruiters are actually looking for.</li>
                    </ul>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=800&q=80"
                        alt="Interview Practice" class="border-radius-20 shadow-hover" style="height: 350px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light border-radius-custom section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Our Simulated Interview Process</h2>
                <p>A comprehensive 360-degree approach to interview readiness.</p>
            </div>
            <div class="card-grid">
                <div class="card p-30 text-center">
                    <i class="fas fa-users-viewfinder icon-large mb-20" style="font-size: 2.5rem; color: var(--color-primary);"></i>
                    <h3>HR Interview</h3>
                    <p>Focuses on personality, culture fit, and behavioral questions using STAR methodology.</p>
                </div>
                <div class="card p-30 text-center">
                    <i class="fas fa-laptop-code icon-large mb-20" style="font-size: 2.5rem; color: var(--color-primary);"></i>
                    <h3>Technical Drill</h3>
                    <p>Rigorous assessment of domain knowledge and problem-solving abilities.</p>
                </div>
                <div class="card p-30 text-center">
                    <i class="fas fa-comments icon-large mb-20" style="font-size: 2.5rem; color: var(--color-primary);"></i>
                    <h3>Group Discussion</h3>
                    <p>Simulating peer discussions to evaluate leadership and communication within a team.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background: #ffffff; padding: 80px 0;">
        <div class="container">
            <div class="section-title text-center mb-5" style="margin-bottom: 50px;">
                <h2 style="color: #6f42c1; font-weight: 700; font-size: 2.3rem; margin-bottom: 15px; font-family: inherit;">Detailed Feedback Report</h2>
                <p style="color: #666; font-size: 1.05rem; font-weight: 400; line-height: 1.6; max-width: 800px; margin: 0 auto;">Every session is followed by a granular analysis of your performance to ensure continuous improvement.</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <!-- Performance Scorecard -->
                <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); padding: 40px 30px; border: 1px solid #f1f5f9; display: flex; flex-direction: column; gap: 30px; transition: transform 0.2s ease;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div style="width: 44px; height: 44px; border-radius: 50%; background: #6f42c1; display: flex; align-items: center; justify-content: center; color: #ffffff; flex-shrink: 0; font-size: 1.1rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 style="font-size: 1.18rem; font-weight: 700; color: #212529; margin: 0; font-family: inherit;">Performance Scorecard</h4>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px;">
                        <li style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                <i class="fas fa-check" style="font-size: 0.72rem; color: #009688;"></i>
                            </div>
                            <span style="font-size: 0.96rem; color: #4a5568; line-height: 1.5; font-weight: 500;">Communication Skills<br>Evaluation</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                <i class="fas fa-check" style="font-size: 0.72rem; color: #009688;"></i>
                            </div>
                            <span style="font-size: 0.96rem; color: #4a5568; line-height: 1.5; font-weight: 500;">Domain Knowledge<br>Assessment</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                <i class="fas fa-check" style="font-size: 0.72rem; color: #009688;"></i>
                            </div>
                            <span style="font-size: 0.96rem; color: #4a5568; line-height: 1.5; font-weight: 500;">Behavioral & Logic<br>Rating</span>
                        </li>
                    </ul>
                </div>

                <!-- Video Recording -->
                <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); padding: 40px 30px; border: 1px solid #f1f5f9; display: flex; flex-direction: column; gap: 30px; transition: transform 0.2s ease;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div style="width: 44px; height: 44px; border-radius: 50%; background: #0097a7; display: flex; align-items: center; justify-content: center; color: #ffffff; flex-shrink: 0; font-size: 1.1rem;">
                            <i class="fas fa-video"></i>
                        </div>
                        <h4 style="font-size: 1.18rem; font-weight: 700; color: #212529; margin: 0; font-family: inherit;">Video Recording</h4>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px;">
                        <li style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                <i class="fas fa-check" style="font-size: 0.72rem; color: #009688;"></i>
                            </div>
                            <span style="font-size: 0.96rem; color: #4a5568; line-height: 1.5; font-weight: 500;">High-Definition Session<br>Record</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                <i class="fas fa-check" style="font-size: 0.72rem; color: #009688;"></i>
                            </div>
                            <span style="font-size: 0.96rem; color: #4a5568; line-height: 1.5; font-weight: 500;">Body Language<br>Playback</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                <i class="fas fa-check" style="font-size: 0.72rem; color: #009688;"></i>
                            </div>
                            <span style="font-size: 0.96rem; color: #4a5568; line-height: 1.5; font-weight: 500;">Pitch & Tone Analysis</span>
                        </li>
                    </ul>
                </div>

                <!-- Actionable Roadmap -->
                <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); padding: 40px 30px; border: 1px solid #f1f5f9; display: flex; flex-direction: column; gap: 30px; transition: transform 0.2s ease;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div style="width: 44px; height: 44px; border-radius: 50%; background: #00bcd4; display: flex; align-items: center; justify-content: center; color: #ffffff; flex-shrink: 0; font-size: 1.1rem;">
                            <i class="fas fa-list-check"></i>
                        </div>
                        <h4 style="font-size: 1.18rem; font-weight: 700; color: #212529; margin: 0; font-family: inherit;">Actionable Roadmap</h4>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px;">
                        <li style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                <i class="fas fa-check" style="font-size: 0.72rem; color: #009688;"></i>
                            </div>
                            <span style="font-size: 0.96rem; color: #4a5568; line-height: 1.5; font-weight: 500;">Gap Identification &<br>Bridging</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                <i class="fas fa-check" style="font-size: 0.72rem; color: #009688;"></i>
                            </div>
                            <span style="font-size: 0.96rem; color: #4a5568; line-height: 1.5; font-weight: 500;">Resource<br>Recommendations</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                <i class="fas fa-check" style="font-size: 0.72rem; color: #009688;"></i>
                            </div>
                            <span style="font-size: 0.96rem; color: #4a5568; line-height: 1.5; font-weight: 500;">Follow-up Strategy Plan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-sm" style="padding: 40px 0;">
        <div class="container">
            <div style="background: #00a2b1; border-radius: 30px; padding: 60px 40px; text-align: center; box-shadow: 0 10px 30px rgba(0, 162, 177, 0.15);">
                <h2 style="color: #ffffff; font-weight: 700; font-size: 2.3rem; margin-bottom: 18px; font-family: inherit;">Don't Leave Your Career to Chance</h2>
                <p style="margin-bottom: 35px; font-size: 1.1rem; color: rgba(255, 255, 255, 0.9); font-weight: 400; line-height: 1.6;">Book your mock interview session today and face recruiters with absolute confidence.</p>
                <a href="{{ route('contact') }}" class="btn" style="background: #ffffff; color: #6f42c1; font-weight: 700; font-size: 0.95rem; letter-spacing: 0.8px; padding: 16px 45px; border-radius: 50px; text-transform: uppercase; text-decoration: none; border: none; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08); display: inline-flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                    Schedule Your Mock Interview
                </a>
            </div>
        </div>
    </section>
@endsection