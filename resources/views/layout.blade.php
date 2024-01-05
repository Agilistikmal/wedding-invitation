<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>
    <link rel="icon" href="{{ asset('imgs/logo.jpg') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
</head>

<body class="min-h-[100vh] bg-[--secondary] font-serif">
    <div id="navbar">@include("components.navbar")</div>
    <div id="main">
        @yield("content")
    </div>
    <div id="footer">@include("components.footer")</div>
</body>

</html>
