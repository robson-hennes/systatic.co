<div class="border-4 md:border-2 border-primary"></div>

<header class="p-4">
    <div class="px-12 flex flex-col md:flex-row md:items-center md:justify-between">
        <a class="text-3xl md:text-2xl font-semibold text-center md:text-left" href="/">
            {{ $config->name }}
        </a>

        <nav class="flex flex-col md:flex-row md:items-center mt-4 md:mt-0">
            @foreach($config->nav as $item)
                <a class="text-lg font-semibold mx-2 text-center" href="{{ $item['target'] }}">
                    {{ $item['name'] }}
                </a>
            @endforeach
        </nav>

        <nav class="flex flex-row md:items-center justify-center mt-4 md:mt-0">
            @foreach($config->social as $item)
                <a class="mx-2" href="{{ $item['link'] }}">
                    <img src="{{ $item['icon'] }}" alt="{{ $item['name'] }}" width="25px">
                </a>
            @endforeach
        </nav>
    </div>
</header>