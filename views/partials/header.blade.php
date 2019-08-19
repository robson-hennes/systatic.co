<div class="border-4 md:border-2 border-blue-400"></div>

<header class="p-2 bg-gray-100">
    <div class="container mx-auto flex flex-col md:flex-row md:items-center md:justify-between">
        <a class="text-3xl md:text-2xl font-semibold text-center md:text-left hover:text-blue-700" href="/">
            {{ $name }}
        </a>

        <nav class="flex flex-col md:flex-row md:items-center mt-4 md:mt-0">
            @foreach($nav as $item)
                <a class="text-lg font-semibold mx-2 text-center hover:text-blue-700" href="{{ $item->target }}">
                    {{ $item->name }}
                </a>
            @endforeach
        </nav>

        <nav class="flex flex-row md:items-center justify-center mt-4 md:mt-0">
            @foreach($social as $link)
                <a class="mx-2" href="{{ $link->url }}">
                    <img src="{{ $link->icon }}" alt="{{ $link->name }}" width="25px">
                </a>
            @endforeach
        </nav>
    </div>
</header>