<!-- Primary Meta Tags -->
@if(isset($meta->special_title))
    <title>{{ $meta->special_title }}</title>
@else
    <title>{{ $meta->title }} | Systatic</title>
@endif

<meta name="title" content="Systatic - Simple, Modern Static Site Generator built in PHP">
<meta name="description" content="Systatic is a Simple and Modern Static Site Generator built in PHP. Put Markdown files in, get HTML files out.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://systatic.netlify.com/">
<meta property="og:title" content="Systatic - Simple, Modern Static Site Generator built in PHP">
<meta property="og:description" content="Systatic is a Simple and Modern Static Site Generator built in PHP. Put Markdown files in, get HTML files out.">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://systatic.netlify.com/">
<meta property="twitter:title" content="Systatic - Simple, Modern Static Site Generator built in PHP">
<meta property="twitter:description" content="Systatic is a Simple and Modern Static Site Generator built in PHP. Put Markdown files in, get HTML files out.">