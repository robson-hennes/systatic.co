@extends('layouts.app')

@section('body')
@include('partials.hero')

<div class="md:w-2/3 md:mx-auto flex flex-col md:flex-row">
    <div class="md:w-1/4">
        <div class="flex flex-col">
            @foreach($docs->sortBy(function($value) {
                return $value->meta->order;
            })->all() as $doc)
                <a class="text-primary p-2" href="{{ $doc->permalink }}">
                    {{ $doc->title }}
                </a>
            @endforeach
        </div>
    </div>
    <div class="md:w-3/4 px-4 md:px-0">
        {!! $content !!}

        <div class="mt-12 flex flex-col md:flex-row md:items-center md:justify-between p-2">
            <p class="text-sm">Last updated on {{ \Carbon\Carbon::parse($last_updated)->format('jS F Y') }}</p>

            <div>
                <a href="https://github.com/damcclean/systatic.co/edit/master/{{ $filename }}">Edit on Github</a>
            </div>
        </div>
    </div>
</div>

@endsection