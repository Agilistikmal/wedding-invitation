<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>
    <link rel="icon" href="{{ asset('imgs/logo.jpg') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>

    <meta property="og:title" content="Wedding Invitation @yield('title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://wedding.safatanc.com" />
    <meta property="og:description" content="Undangan pernikahan online @yield('pengantin')" />
    <meta name="theme-color" content="#e29578">
</head>

<body class="min-h-[100vh] bg-[--secondary] font-serif">
    <div id="navbar">@include("components.navbar")</div>
    <div id="main">
        @yield("content")
    </div>
    <div id="footer">@include("components.footer")</div>
</body>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</html>
