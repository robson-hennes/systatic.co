<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="/css/app.css">

    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('partials.scripts')
    @include('partials.meta')
    @include('partials.favicons')
</head>
<body class="text-gray-900 leading-normal font-sans bg-gray-100">
    <div id="app">
        <header id="header">
            <div class="container mx-auto flex flex-row items-center justify-between border-b-2 border-gray-200 p-4 mb-6">
                <a href="/" class="block font-bold text-gray-700 hover:text-gray-700 text-xl">
                    Systatic
                </a>

                <div class="md:w-1/2">
                    <input class="w-full p-2 border-2 rounded-lg bg-white shadow-md text-gray-700 font-normal focus:outline-none focus:font-semibold" id="search" placeholder="Search the docs">
                </div>

                <div class="flex flex-row items-center">
                    <a class="w-5 mr-4" href="https://discord.gg/zSg3MHv">
                        <img src="/images/discord.svg" alt="Discord">
                    </a>

                    <a class="w-5" href="https://github.com/damcclean/systatic">
                        <img src="/images/github.svg" alt="Github">
                    </a>
                </div>
            </div>
        </header>

        <main class="container mx-auto flex flex-col md:flex-row">
            <div class="w-full md:w-1/3">
                <div class="px-2">
                    <button class="w-full bg-gray-200 p-2 rounded-lg mb-2 text-center text-gray-800 font-semibold uppercase md:hidden" onclick="toggleNav()">
                        Toggle Navigation
                    </button>
                </div>

                <div id="hamburger-menu" class="flex flex-col hidden md:block">
                    @foreach($navigation as $name => $links)
                        <div id="{{ str_replace(' ', '-', strtolower($name)) }}" class="flex flex-col mb-6 p-2">
                            <h3 class="font-bold uppercase text-sm text-gray-600 mb-1">{{ $name }}</h3>

                            <ul class="flex flex-col m-0 list-none">
                                @foreach($links as $name => $url)
                                    <li id="{{ str_replace(' ', '-', strtolower($name)) }}" class="hover:ml-2 mt-1 mb-1">
                                        <a class="hover:font-semibold active:font-semibold text-gray-900 hover:text-gray-900 text-md" href="{{ $url }}">
                                            {{ $name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="md:w-2/3 p-2 md:p-0">
                <article id="{{ $slug }}" class="md:w-2/3">
                    <h2 class="text-2xl font-semibold">{{ $title }}</h2>
                    <p class="mt-1 text-gray-600">{{ $description }}</p>

                    <div class="border-b-2 border-gray-200 my-6"></div>

                    @if($slug === 'changelog')
                        @foreach($releases as $release)
                            <div class="@if(! $loop->first) mt-4 @endif border-b-2 border-gray-200">
                                <div id="{{ $release->slug }}" class="flex flex-row items-center justify-between mb-2">
                                    <h3 class="text-2xl">
                                        <a class="mb-2 no-underline text-gray-700 active:text-primary" href="#{{ $release->slug }}">
                                            {{ $release->title }}
                                        </a>
                                    </h3>
                                    <h4 class="text-base text-gray-500">
                                        {{ $release->meta->date }}
                                    </h4>
                                </div>
                                <div  id="markdown">
                                    {!! $release->content !!}
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div id="markdown">
                            {!! $content !!}
                        </div>
                    @endif
                </article>
            </div>
        </main>
    </div>

    <script src="/js/app.js"></script>
    <script>
        function toggleNav() {
            var menu = document.getElementById('hamburger-menu');

            console.log(menu.classList.contains('hidden'));

            if(menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
