<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', $seo_settings['meta_description'] ?? 'Meadow Minds - Discover Your Child’s True Potential Today. Scientific assessments, DMIT, and personalized development programs.')">
    <meta name="keywords" content="@yield('meta_keywords', $seo_settings['meta_keywords'] ?? 'DMIT, Student Development, Faculty Development, Soft Skills, Parental Counselling, Outbound Training')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', $seo_settings['meta_title'] ?? 'Meadow Minds | Empowering Potential Through Science')</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meadow-minds-v1.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    @yield('styles')
</head>
