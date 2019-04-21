<!doctype html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="text-base font-normal font-sans bg-white text-black leading-loose">
    <div id="app">
        @include('partials.header')
        @yield('body')
    </div>
    <script src="/js/app.js"></script>
</body>
</html>