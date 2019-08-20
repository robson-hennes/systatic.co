---
title: Collections
description: Collections are the source of truth for Systatic, knowing how they work will help you along the way.
---

Collections is the new system to deal with content in Systatic.

Previously in v1, everything was a page. This didn't work out well for sites that had different types of content. Like sites that wanted to have normal pages, a blog, events and documentation.

Now with Collections, each of those things would be in their own Collection.

You can configure Collections inside your `config.php` file, like you can read about below.

## Configuration
When you install Systatic, your configuration file will automatically have a pages collection.

To add a new collection to your site, just add an item to the `collections` array.

The item should look like this:

```php
'pages' => [
		'name' => 'Pages',
		'permalink' => '/',
		'location' => './content/pages'
],
```

Let's go through what each of the things mean,
* `name` - The name of the array, it's not really used much
* `permalink` - The link structure that is used. For example, if you had a blog, you could use `/blog/`.
* `location` - The path to where your Markdown content files live.

You can also add the `view` property to that array to specify a default view that should be used, like `post` or `event`.

### Don't build pages for collection

Say you have a Collection for Events but you don't want to actually build HTML files for the entries in the collection, you just need them for an 'Events' page. Then you can disable them from building by specifying the `build` attribute on a collection.

```php
...

'collections' => [
    'events' => [
        'name' => 'Events',
        'permalink' => '/',
        'location' => './content/events',
        'build' => false
    ]
],
...
```

> Even though it's not being built, you still need to provide a `permalink` attribute for the collection. You could just leave it empty, but it needs to exist.

## Search
Systatic has search functionality, but it comes with a bit of a downside, you have to use [Algolia](https://www.algolia.com/). 

Algolia is a super-fast search-as-a-service business. They have a free community plan that can be used on small non-commercial sites and as long as you display their logo.

To configure Algolia search, just add this to your `config.php` file.

```php
'algolia' => [
		'app_id' => '*******',
		'api_key' => '*********',
		'index' => 'prod_whatever'
],
```

You'll also want to add the `searchable` property to any collection you want to have indexed by Algolia.

```php
'blog' => [
		'name' => 'Blog',
		'permalink' => '/blog/',
		'location' => './content/blog',
		'searchable' => true
],
```

Now, every time you build your site, Algolia will index your collections.

## Remote Collections
Remote Collections are like normal collections but instead of the content being inside Markdown files they are somewhere else, like in a Headless CMS.

We've built Remote Collections in a way that's flexible to give you the ultimate control of how you fetch your data and return that (literally) to Systatic.

Instead of specifying a `location` attribute on your collection config, you can specify a `remote` attribute with a function inside. Like so:

```php
<?php

return [
    ...
    
    'collections' => [
        'blog' => [
            'name' => 'Blog',
            'permalink' => '/blog/',
            'remote' => function() {
                $posts = json_decode(file_get_contents('https://api.cms.blog/api/posts'), true);
                
                return collect($posts)->map(function ($post) {
		return [
                    'title' => $post['title'],
                    'slug' => $post['slug'],
                    'content' => $post['content']
		];
                });
            }
        ]
    ]
    ...
]
```

We really don't care how you fetch the content, just as long as you return at least an array with a `title`, `slug` and `content` each, then we're good!

> We're using the `file_get_contents` function in our example, but you could pull in something like Guzzle or Zttp to do it instead - you would need to do that if your API is behind authentication.

Then you'll be able to reference the collection like all other collections inside your views.
