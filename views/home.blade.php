@extends('layouts.app')

@section('body')
<section class="hero p-20 text-center">
    <div class="md:w-2/3 mx-auto">
        <h1 class="text-gray-800 font-bold text-6xl">{{ $title }}</h1>
        <p class="text-gray-800 font-semibold text-2xl">{{ $meta->subheading }}</p>

        <div class="flex justify-center">
            <a href="/docs/installation" class="btn btn-large">Get Started</a>
        </div>
    </div>
</section>

<section class="features bg-gray-200 p-12">
    <div class="container mx-auto flex flex-col md:flex-row md:items-stretch">
        @foreach($meta->features as $feature)
            <a class="flex-1 mx-4 p-2 text-center no-underline border-4 border-primary rounded text-gray-800 hover:text-gray-800 hover:bg-gray-300" href="{{ $feature->docs }}">
                <h3>{{ $feature->name }}</h3>
                <p class="text-sm">{{ $feature->description }}</p>
            </a>
        @endforeach
    </div>
</section>

<section class="bg-white p-12">
    <h1 class="text-center text-6xl">Join the community!</h1>
    <p class="text-center">Have a few questions about Systatic before you make a commitment, hag</p>

    <div class="flex flex-col md:flex-row justify-center items-center mt-4">
        @foreach($config->social as $social)
            <a href="{{ $social->link }}" class="btn mx-2">{{ $social->name }}</a>
        @endforeach
    </div>
</section>
@endsection
