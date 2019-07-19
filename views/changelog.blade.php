@extends('layouts.app')

@section('body')
@include('partials.hero')

<section class="px-4 md:px-0 container mx-auto">
    @foreach($releases as $release)
        <article id="{{ $release->slug }}" class="pb-4 mb-2 border-b-2 border-gray-200">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <h1>
                    <a class="text-4xl mb-2 no-underline text-primary" href="#{{ $release->slug }}">
                        {{ $release->title }}
                    </a>
                </h1>
                <h4 class="text-lg">
                    {{ $release->meta->date }}
                </h4>
            </div>
            <div>
                {!! $release->content !!}
            </div>
        </article>
    @endforeach
</section>
@endsection