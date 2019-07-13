@extends('layouts.app')

@section('body')
<section class="p-24 text-center">
    <div class="md:w-2/3 mx-auto">
        <h1 class="text-primary font-bold text-6xl">{{ $title }}</h1>
        <p class="text-primary font-semibold text-2xl">{{ $meta->subheading }}</p>

        <div class="flex justify-center">
            <a href="/docs/installation" class="btn">Get Started</a>
        </div>
    </div>
</section>

@foreach($meta->things as $thing)
    <section class="bg-gray-200 p-12">
        <div class="container mx-auto flex flex-row items-center">
            <div class="flex-1 px-6">
                <h1 class="text-primary text-4xl font-semibold">{{ $thing['title'] }}</h1>
            </div>
            <div class="flex-2">
                <p>{!! $thing['description'] !!}</p>
            </div>
        </div>
    </section>
@endforeach

<section class="bg-white p-12">
    <h1 class="text-center text-5xl">Join the community!</h1>

    <div class="flex justify-center items-center mt-4">
        @foreach($config->social as $social)
            <a href="{{ $social['link'] }}" class="btn mx-2">{{ $social['name'] }}</a>
        @endforeach
    </div>
</section>
@endsection