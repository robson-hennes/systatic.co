---
title: Collections
documentation: true
order: 7
---

# Collections
Collections is the new system to deal with content in Systatic.

Previously in v1, everything was a page. This didn't work out well for sites that had different types of content. Like sites that wanted to have normal pages, a blog, events and documentation.

Now with Collections, each of those things would be in their own Collection.

You can configure Collections inside your `config.php` file, like you can read about below.

## Configuration
When you install Systatic, your configuration file will automatically have a pages collection.

To add a new collection to your site, just add an item to the `collections` array.

The item should look like this:

```php
'Pages' => [
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
This is still to be written about..... If you want to write docs for it, **just do it**!