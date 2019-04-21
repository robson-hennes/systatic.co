@extends('layouts.app')

@section('body')
@include('partials.hero')
<section class="container mx-auto">
    {!! $content !!}
</section>
@endsection