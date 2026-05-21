<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Blog;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@meadowminds.com'],
            [
                'name' => 'Meadow Minds Admin',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Site Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'Meadow Minds', 'group' => 'general', 'type' => 'text'],
            ['key' => 'contact_email', 'value' => 'meadowsminds@gmail.com', 'group' => 'contact', 'type' => 'text'],
            ['key' => 'contact_phone', 'value' => '+91 733 877 4604', 'group' => 'contact', 'type' => 'text'],
            ['key' => 'address_krishnagiri', 'value' => 'Krishnagiri Branch', 'group' => 'contact', 'type' => 'text'],
            ['key' => 'address_coimbatore', 'value' => 'Coimbatore Branch', 'group' => 'contact', 'type' => 'text'],
            ['key' => 'address_pollachi', 'value' => 'Pollachi Branch', 'group' => 'contact', 'type' => 'text'],
            ['key' => 'facebook_url', 'value' => 'https://facebook.com/meadowminds', 'group' => 'social', 'type' => 'text'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com/meadowminds', 'group' => 'social', 'type' => 'text'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com/company/meadowminds', 'group' => 'social', 'type' => 'text'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/meadowminds', 'group' => 'social', 'type' => 'text'],
            ['key' => 'meta_title', 'value' => 'Meadow Minds | Discover Your Child’s True Potential Today', 'group' => 'seo', 'type' => 'text'],
            ['key' => 'meta_description', 'value' => 'Unlock innate intelligence and personality through scientific assessment and personalized mentorship at Meadow Minds.', 'group' => 'seo', 'type' => 'textarea'],
            ['key' => 'meta_keywords', 'value' => 'DMIT, Student Development, Faculty Development, Soft Skills, Parental Counselling, Outbound Training', 'group' => 'seo', 'type' => 'text'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }

        // 3. Pages Content and SEO
        $pages = [
            [
                'slug' => 'home',
                'title' => 'Home',
                'heading' => 'Discover Your Child’s True Potential Today',
                'content' => 'Unlock innate intelligence and personality through scientific assessment and personalized mentorship at Meadow Minds.',
                'meta_title' => 'Meadow Minds | Discover Your Child’s True Potential Today',
                'meta_description' => 'Scientific assessments, DMIT, and personalized development programs.',
                'meta_keywords' => 'DMIT, Student Development, Cognitive assessment, Meadow Minds'
            ],
            [
                'slug' => 'about',
                'title' => 'About Us',
                'heading' => 'About Meadow Minds',
                'content' => 'Meadow Minds is a premier institution dedicated to unlocking human potential through scientific intelligence mapping and holistic development.',
                'meta_title' => 'About Us | Meadow Minds',
                'meta_description' => 'Learn more about Meadow Minds, our vision, mission, and how we empower minds.',
                'meta_keywords' => 'About Meadow Minds, scientific intelligence mapping'
            ],
            [
                'slug' => 'dmit',
                'title' => 'DMIT',
                'heading' => 'Dermatoglyphics Multiple Intelligence Test (DMIT)',
                'content' => 'Unlock your biological potential with scientific fingerprint analysis.',
                'meta_title' => 'DMIT - Dermatoglyphics Multiple Intelligence Test | Meadow Minds',
                'meta_description' => 'Discover inborn talents and learning styles through biometric fingerprint analysis.',
                'meta_keywords' => 'DMIT, Dermatoglyphics, Multiple Intelligence Test'
            ],
            [
                'slug' => 'gallery',
                'title' => 'Gallery',
                'heading' => 'Our Gallery',
                'content' => 'Glimpses of our various programs, workshops, and outbound training sessions.',
                'meta_title' => 'Gallery | Meadow Minds',
                'meta_description' => 'View photos and memories from our various development and training programs.',
                'meta_keywords' => 'Meadow Minds Gallery, photos, events'
            ],
            [
                'slug' => 'contact',
                'title' => 'Contact Us',
                'heading' => 'Get in Touch',
                'content' => 'Have questions or want to book an assessment? Connect with us today!',
                'meta_title' => 'Contact Us | Meadow Minds',
                'meta_description' => 'Contact Meadow Minds today to book a free consultation or DMIT assessment.',
                'meta_keywords' => 'Contact, phone, email, book consultation'
            ]
        ];

        foreach ($pages as $p) {
            Page::updateOrCreate(['slug' => $p['slug']], $p);
        }

        // 4. Services (Programs)
        $services = [
            [
                'slug' => 'dmit',
                'title' => 'DMIT',
                'description' => 'Scientific fingerprint analysis to discover your inborn talents and personality traits.',
                'content' => 'Dermatoglyphics Multiple Intelligence Test (DMIT) is a scientific study of fingerprint patterns. It helps in understanding an individual\'s potential, personality, learning style, and strengths.',
                'icon' => 'fas fa-fingerprint',
                'image' => 'images/DMIT.png',
                'order' => 1,
                'status' => true
            ],
            [
                'slug' => 'student-development',
                'title' => 'Student Development Program',
                'description' => 'Holistic programs focusing on memory, concentration, and soft skill enhancement.',
                'content' => 'Our Student Development Program focuses on building cognitive capacities, enhancing memory techniques, active recall, personal grooming, time management, and emotional intelligence for school and college students.',
                'icon' => 'fas fa-graduation-cap',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=400&q=80',
                'order' => 2,
                'status' => true
            ],
            [
                'slug' => 'faculty-development',
                'title' => 'Faculty Development Program',
                'description' => 'Empowering educators with modern pedagogical tools and AI-driven teaching methodologies.',
                'content' => 'FDP empowers teachers and educators with effective classroom management strategies, design thinking, integration of AI tools in teaching, understanding child psychology, and progressive pedagogical models.',
                'icon' => 'fas fa-chalkboard-teacher',
                'image' => 'https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=400&q=80',
                'order' => 3,
                'status' => true
            ],
            [
                'slug' => 'soft-skills',
                'title' => 'Soft Skills Training',
                'description' => 'Excellence in communication, public speaking, and professional etiquette mastery.',
                'content' => 'Comprehensive modules on communication skills, public speaking, body language, interview preparation, presentation skills, and business etiquette designed for students and working professionals.',
                'icon' => 'fas fa-comments',
                'image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=400&q=80',
                'order' => 4,
                'status' => true
            ],
            [
                'slug' => 'parental-counselling',
                'title' => 'Parental Counselling',
                'description' => 'Scientific parenting guidance to bridge generational gaps and foster emotional bonding.',
                'content' => 'Parenting is a beautiful journey, but it comes with unique challenges. We provide customized, science-backed counselling sessions to help parents understand child behavior, learning models, and build healthier dynamics.',
                'icon' => 'fas fa-users',
                'image' => 'images/partenal.avif',
                'order' => 5,
                'status' => true
            ],
            [
                'slug' => 'outbound-training',
                'title' => 'Outbound Training',
                'description' => 'Team building and leadership development through immersive outdoor experiences.',
                'content' => 'Experiential learning programs utilizing outdoor activities, team-building challenges, survival games, and reflective debriefing sessions to build leadership, trust, risk-taking abilities, and collaboration.',
                'icon' => 'fas fa-campground',
                'image' => 'https://images.unsplash.com/photo-1510074377623-8cf13fb86c08?auto=format&fit=crop&w=400&q=80',
                'order' => 6,
                'status' => true
            ],
            [
                'slug' => 'mock-interview',
                'title' => 'Mock Interview',
                'description' => 'Simulated interview experiences with expert feedback to boost job readiness.',
                'content' => 'Boost confidence and ace placement drives or professional interviews. Includes simulated rounds, technical assessment feedback, CV refining, body language correction, and constructive evaluation from industry HR heads.',
                'icon' => 'fas fa-user-tie',
                'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=400&q=80',
                'order' => 7,
                'status' => true
            ]
        ];

        foreach ($services as $srv) {
            Service::updateOrCreate(['slug' => $srv['slug']], $srv);
        }

        // 5. Testimonials
        $testimonials = [
            [
                'client_name' => 'Mrs. Priya R.',
                'client_title' => 'Parent of 10-year-old',
                'review' => 'The DMIT assessment at Meadow Minds was an eye-opener. It helped us understand our daughter\'s unique learning style. Now, studying is no longer a chore, but an enjoyable experience!',
                'rating' => 5,
                'status' => true,
                'order' => 1
            ],
            [
                'client_name' => 'Mr. Karthik S.',
                'client_title' => 'College Student',
                'review' => 'The Soft Skills and Mock Interview training completely transformed my approach to placements. I was able to communicate confidently and secured a job in my dream company!',
                'rating' => 5,
                'status' => true,
                'order' => 2
            ],
            [
                'client_name' => 'Dr. Ananya P.',
                'client_title' => 'School Principal',
                'review' => 'Meadow Minds conducted a Faculty Development Program at our school. The teachers found the modern pedagogical tools and child-psychology tips highly valuable. Highly recommended!',
                'rating' => 5,
                'status' => true,
                'order' => 3
            ]
        ];

        foreach ($testimonials as $tst) {
            Testimonial::updateOrCreate(['client_name' => $tst['client_name']], $tst);
        }

        // 6. Seed some dummy blogs
        $blogs = [
            [
                'title' => 'Understanding Child Learning Styles Through DMIT',
                'slug' => 'understanding-child-learning-styles-dmit',
                'excerpt' => 'Every child learns differently. Some are visual learners, others are auditory or kinesthetic. Let\'s explore how DMIT can help pinpoint your child\'s exact style.',
                'content' => '<p>Have you ever wondered why some kids can memorize a song instantly while others need to read a text multiple times? It all boils down to learning styles.</p><p>Dermatoglyphics Multiple Intelligence Test (DMIT) is a biological map of an individual\'s brain functions. By examining fingerprint patterns, scientists can discover the dominant parts of the brain and thus identify visual, auditory, and kinesthetic learning methods. Implementing these insights makes education much more efficient.</p>',
                'image' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&w=800&q=80',
                'author' => 'Dr. Rajesh Sharma',
                'status' => true
            ],
            [
                'title' => 'Top 5 Soft Skills Employers Look for in 2026',
                'slug' => 'top-5-soft-skills-employers-2026',
                'excerpt' => 'In an era dominated by AI and technology, human skills are more valuable than ever. Here are the top 5 soft skills you need to master today.',
                'content' => '<p>Technical expertise is just one half of the equation. Soft skills are what define great leaders and collaborative teammates.</p><p>As we enter 2026, the demand for skills like emotional intelligence, complex problem solving, adaptive communication, collaboration, and design thinking is skyrocketing. Refinement in these areas ensures high career mobility.</p>',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80',
                'author' => 'Coach Karthik',
                'status' => true
            ]
        ];

        foreach ($blogs as $blg) {
            Blog::updateOrCreate(['slug' => $blg['slug']], $blg);
        }
    }
}
