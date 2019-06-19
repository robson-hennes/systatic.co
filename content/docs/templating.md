---
title: Templating
view: docs
documentation: true
---

Systatic allows developers to create their views, templates, partials using Laravel Blade, the popular templating language used in the Laravel PHP framework.

# Layouts
Layouts are often used when creating templates. A blade usually looks like this:

```
<html>
<head>
<title>Bakers</title
</head>
<body>
@yield('content')
</body>
</html>
```

## Extending the layout
In views, you may want to extend the layout you have created. You can use the `@extend` and `@section` directives to do this.

```
@extends('layouts.app')

@section('content')
<div class="bg-red">
<p>Awesome page!!</p>
</div>
@endsection
```

# Partials
Partials are parts of reusable code that can be included in different places across your site. A partial could have anything in it. To include a partial, just use the `@include` directive.

```
@include('partials.footer')
```

## Passing information into partials
Just like in Laravel apps, you can also pass information into your partials.
```
@include('partials.footer', ['email' => 'hi@example.com', 'copyright' => 'Copyright 2019'])
```
Within your partials, you can reference the information using variables.
```
<p>It's the year {{ $year }}, and you can email me at {{ $email }}.</p>
```
