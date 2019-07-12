<section class="bg-primary @if(!isset($meta->documentation)) p-8 md:p-32 @else p-2 @endif mb-6">
    <div class="container mx-auto text-center text-white font-bold">
        <h1 class="text-6xl">{{ $title }}</h1>

        @if(isset($meta->subheading))
            <p>{{ $meta->subheading }}</p>
        @endif
    </div>
</section>