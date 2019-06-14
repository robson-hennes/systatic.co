<section class="mt-4 container mx-auto">
    <div class="flex flex-col md:flex-row items-center justify-center">
        @foreach($matter['links'] as $link)
            <a class="md:w-1/4 text-center md:bg-gray-200 rounded p-2 mx-6 no-underline text-primary hover:bg-primary hover:text-white" href="{{ $link['target'] }}">
                <h2>{{ $link['name'] }}</h2>
            </a>
        @endforeach
    </div>
</section>