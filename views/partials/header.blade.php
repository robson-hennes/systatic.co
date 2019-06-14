<div class="border-2 border-primary"></div>

<header class="p-4">
    <div class="px-12 flex flex-col md:flex-row md:items-center md:justify-between">
        <a class="text-2xl font-semibold" href="/">
            {{ $config['siteName'] }}
        </a>

        <nav class="flex flex-col md:flex-row md:items-center">
            @foreach($config['nav'] as $item)
                <a class="text-lg font-semibold mx-2" href="{{ $item['target'] }}">
                    {{ $item['name'] }}
                </a>
            @endforeach
        </nav>

        <nav class="flex flex-col md:flex-row md:items-center">
            @foreach($config['social'] as $item)
                <a class="mx-2" href="{{ $item['link'] }}">
                    <img src="{{ $item['icon'] }}" alt="{{ $item['name'] }}" width="25px">
                </a>
            @endforeach
        </nav>
    </div>
</header>