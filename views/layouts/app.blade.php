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
        @include('partials.footer')
    </div>
    <script src="/js/app.js"></script>
    <script defer src="https://intravert.co/serve/334a34aec6.78.js"></script>
</body>
</html>