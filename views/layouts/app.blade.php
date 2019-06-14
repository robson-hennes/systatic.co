<!doctype html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/app.css">
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.extras.scripts')
</head>
<body class="text-gray-700 bg-white leading-loose font-normal text-base">
    <div id="app">
        @include('partials.header')
        @yield('body')
        @include('partials.footer')
    </div>
    <script src="/js/app.js"></script>
    <script defer src="https://intravert.co/serve/334a34aec6.78.js"></script>
</body>
</html>
