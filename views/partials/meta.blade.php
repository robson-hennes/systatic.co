<!-- Primary Meta Tags -->
<title>{{ $title }} | Systatic</title>
<meta name="title" content="{{ $title }} | Systatic">
<meta name="description" content="@if(isset($description)) {{ $description }} @else Last updated on {{ \Carbon\Carbon::parse($last_updated)->toFormattedDateString() }}. @endif">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://systatic.co/{{ $permalink }}">
<meta property="og:title" content="{{ $title }} | Systatic">
<meta property="og:description" content="@if(isset($description)) {{ $description }} @else Last updated on {{ \Carbon\Carbon::parse($last_updated)->toFormattedDateString() }}. @endif">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://systatic.co/{{ $permalink }}">
<meta property="twitter:title" content="{{ $title }} | Systatic">
<meta property="twitter:description" content="@if(isset($description)) {{ $description }} @else Last updated on {{ \Carbon\Carbon::parse($last_updated)->toFormattedDateString() }}. @endif">