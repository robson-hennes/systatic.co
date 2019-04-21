@extends('layouts.app')

@section('body')
@include('partials.hero', [
    'docs' => true
])
<section class="container mx-auto">
    {!! $content !!}
</section>
@endsection