<section class="bg-primary @if(!array_key_exists('documentation', $matter)) p-8 md:p-32 @else p-2 @endif mb-6">
    <div class="container mx-auto text-center text-white font-bold">
        <h1 class="text-6xl">{{ $title }}</h1>

        @if(array_key_exists('subheading', $matter))
            <p>{{ $matter['subheading'] }}</p>
        @endif
    </div>
</section>