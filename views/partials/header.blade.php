<header class="bg-white p-2 flex flex-col md:flex-row items-center md:justify-between">
    <a class="font-semibold no-underline text-primary font-bold text-xl" href="/">
        Systatic
    </a>
    <nav class="flex flex-col md:flex-row items-center">
        @foreach($config['nav'] as $item)
            <a class="font-semibold no-underline text-primary mx-2" href="{{ $item['target'] }}">
                {{ $item['name'] }}
            </a>
        @endforeach
    </nav>
</header>