<section class="bg-primary p-8 md:p-32 mb-6">
    <div class="container mx-auto text-center text-white font-bold">
        <h1 class="text-6xl">{{ $title }}</h1>

        @if(array_key_exists('subheading', $matter))
            <p>{{ $matter['subheading'] }}</p>
        @endif
    </div>
</section>