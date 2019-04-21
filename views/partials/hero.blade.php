<section class="bg-jupiter p-12 text-center mb-8">
    <h1 class="text-70px">{{ $title }}</h1>
    @if(isset($docs))
        <select class="bg-white p-2" name="documentation" onchange="window.document.location.href=this.options[this.selectedIndex].value;">
            @foreach($config['docs'] as $doc)
                <option value="{{ $doc['target'] }}">{{ $doc['name'] }}</option>
            @endforeach
        </select>
    @endif
</section>