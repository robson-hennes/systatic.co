@extends('layouts.app')

@section('body')
@include('partials.hero')

<div class="md:w-2/3 md:mx-auto flex flex-col md:flex-row">
    <div class="md:w-1/4">
        <div class="flex flex-col">
            @foreach($docs->sortBy('order')->all() as $doc)
                <a class="text-primary p-2" href="{{ $doc->permalink }}">
                    {{ $doc->title }}
                </a>
            @endforeach
        </div>
    </div>
    <div class="md:w-3/4 px-4 md:px-0">
        {!! $content !!}
    </div>
</div>

@endsection