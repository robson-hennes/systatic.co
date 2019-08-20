---
title: Templating
description: Sharpen your blade skills to be ready for Systatic.
---

## Available variables
In your views, you can use variables to output data from Systatic.

Here are the variables that we have available for you to use:

### `url`
Outputs the full url of the current page, including your site url.

### `filename`
Outputs the original filename of the page.

### `output_filename`
Outputs the filename of the compiled page (the HTML file)

### `permalink`
Outputs the collection permalink and the slug of the page.

### `title`
Outputs the page title

### `slug`
Outputs the page slug

### `view`
Outputs the page view

### `content`
Outputs the HTML content of the page

When using Blade, make sure to include your content like this.

```php
{!! $content !!}}
```

You need to do it like this because it's raw HTML.

### `last_updated`
Outputs the time and date of when the original content file was last updated.

We recommend converting the format of this date using our Carbon helper.

```php
{{ carbon(...) }}
```

### `meta`
Access front matter variables

```php
{{ $meta->author }}
```

### `config`
You can use this to reference configuration values

```php
{{ $config->name }}
```

### `collection`
Returns information about the collection the entry belongs to.

```php
{{ $collection->location }}
```

## Collections
For each of your collections, there will be a variable you can use.

For example, if you have a collection with the key of `pages`, this is how you'd `foreach` that in Blade.

```php
@foreach($pages as $page)
	<h1>{{ $page->title }}</h1>
@endforeach
```

These variables are instances of Laravel's collect helper which means you can do sorting and tones of other things.

```php
@foreach($pages->sortBy('title')->limit(4) as $page)
	<h1>{{ $page->title }}</h1>
@endforeach
```