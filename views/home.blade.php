@extends('layouts.app')

@section('body')
@include('partials.hero')

<section class="p-4 md:p-12">
    <div class="md:w-2/5 md:mx-auto text-center">
        <h2 class="text-primary text-3xl font-semibold">Get Started</h2>
        <p>We made Systatic as simple as possible to get started! No <span>sample content</span>, no <span>frontend frameworks</span>. We leave it up to <span>you</span>!</p>

        <div class="bg-black rounded-lg mt-6">
            <div class="p-2 bg-gray-600">
                <div class="p-2 rounded-sm bg-gray-900 mx-1 text-left">
                    <p class="p-2 text-white text-lg"><span>$</span> mkdir jims-travel-blog && cd jims-travel-blog</p>

                    <p class="p-2 text-white text-lg"><span>$</span> composer require damcclean/systatic</p>

                    <p class="p-2 text-white text-lg"><span>$</span> cp -a vendor/damcclean/systatic/stubs/site/* .</p>

                    <p class="p-2 text-white text-lg"><span>$</span> php systatic build</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-100 p-4 md:p-12">
    <div class="container mx-auto flex flex-col md:flex-row md:items-center">
        <div class="md:w-3/4 p-2">
            <h2 class="text-3xl text-primary font-semibold">So what does a Systatic site look like?</h2>
            <p>That's a valid question and we're glad you asked!</p>
            <p>This is an example of what a normal Systatic site looks like. Although, if you don't like one of the folder names, your free to change it in your configuration.</p>
            <p>If you'd like to see an entire Systatic repo, you can <a href="https://github.com/damcclean/systatic.netlify.com">see this site</a>.</p>
        </div>
        <div class="md:w-1/4">
            <div class="bg-black rounded-lg">
                <div class="p-1 bg-gray-600">
                    <div class="p-2 rounded-sm bg-gray-900 mx-1 text-left">
                        <p class="p-1 text-white text-lg">- <span>content</span></p>
                        <p class="p-1 text-white text-lg">- <span>dist</span></p>
                        <p class="p-1 text-white text-lg">- <span>storage</span></p>
                        <p class="p-1 text-white text-lg">- <span>views</span></p>
                        <p class="p-1 text-white text-lg">- .env</p>
                        <p class="p-1 text-white text-lg">- composer.json</p>
                        <p class="p-1 text-white text-lg">- config.php</p>
                        <p class="p-1 text-white text-lg">- systatic</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection