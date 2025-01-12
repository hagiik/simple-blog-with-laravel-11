<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="@yield('meta_title', 'Default Title')">
    <meta name="author" content="@yield('meta_author', 'Author')">
    <meta name="keywords" content="@yield('meta_keywords', 'tag')">
    {{-- <meta name="keywords" content="{{ implode(', ', is_array($post->tags) ? $post->tags : []) }}"> --}}
    <meta name="description" content="@yield('meta_description', 'Default description')">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Default OG Title')">
    <meta property="og:description" content="@yield('og_description', 'Default OG Description')">
    <meta property="og:image" content="@yield('og_image', asset('path/to/default-thumbnail.jpg'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="bg-white">
    @include('layouts.navbar')

    <main class="container mx-auto py-6">
        @yield('content')
    </main>

    @include('layouts.footer')
    @livewireScripts

</body>
</html>
