<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Triumphant Christian Center Pokuase Branch">
    <meta property="og:description" content="A church where lives are being changed, the move of God is at work.">
    <meta property="og:image" content="{{ asset('images/tcc-title-logo.png') }}">
    <meta property="og:url" content="http://digipunk.netii.net">
    <link rel="icon" href="{{ asset('images/tcc-title-logo.png') }}" type="image/x-icon">
    {{--  <link rel="stylesheet" href="{{ asset('components/base/base.css') }}">  --}}

    @vite(['public/components/base/base.css'])

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div class="page">
        <!-- Intro slider-->
        @include('layouts.index-hero')



        <main>
            {{ $slot }}
        </main>



        <!-- Footer contact-->
        @include('layouts.footer')

    </div>
    <!-- Preloader-->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
        </div>
    </div>
    {{--  <script src="{{ asset('components/base/core.min.js') }}"></script>
    <script src="{{ asset('components/base/script.js') }}"></script>  --}}
    @vite(['public/components/base/core.min.js', 'public/components/base/script.js'])
</body>

</html>
