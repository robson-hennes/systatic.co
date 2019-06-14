@extends('layouts.app')

@section('body')
@include('partials.hero')

<section class="px-4 md:px-0 container mx-auto">
    {!! $content !!}
</section>
@endsection