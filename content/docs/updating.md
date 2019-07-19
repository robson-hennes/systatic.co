---
title: Updating
documentation: true
order: 2
---

# Updating
Since Systatic is updated on a regular basis, you likely want to stay on the latest version. 

## Automated
If you'd like automated pull requests when new versions of packages you use are available (including Systatic), Github have recently acquired an app which will do that for you, called [Dependabot](https://dependabot.com/). 

## Manual
Because Systatic is a Composer package, you can just use the `composer update` command which will update Systatic, along with any other composer packages you have pulled in.

## Upgrading from v1
If you were with us from v1, you'll know the way Systatic works now is very different to how it did in v1.

A lot of the changes we made in v2 were considered as a v1 update but they ended up being so much to update under the hood that we just started building v2.

### Update composer dependency
First things first, nuke your `vendor` directory, update the systatic version in your `composer.json` file to v2.

```json
{
	"require": {
		"damcclean/systatic": "^2.0.*"
	}
}
```

Then reinstall all your composer dependencies using `composer install`.

### Update your Systatic console file
You'll need to update your `systatic` file to the latest one. You can do that with this command:

```
cp -rf ./vendor/damcclean/systatic/stubs/site/systatic .
```

### Remove `@env` Blade Directive from Views
If you are using the `@env` blade directive, remove it from your code. You can now access env variables with a helper, like this:

```php
{{ env('special_key') }}
```

### Replace `matter` with `meta` in views
In your views, replace the `matter` variables with `meta`. You also need to reference it like an object instead of like an array. 

```php
Before:
{{ $matter['author'] }}

After:
{{ $meta->author }}
```

### Updated the configuration format
We've updated the format of your `config.php` file. Update your config file to look like this:

```php
<?php

return [
	'name' => 'Awesome Travel Blog',
	'url' => 'https://travel.blog',
	
	'locations' => [
		'output' => './dist',
		'views' => './views',
		'storage' => './storage'
	],
	
	'collections' => [
		...
	]
];
```

### Collections
You'll need to configure at least one collection. You can create new collections in your `config.php` file, like so:

```php
<?php

return [
	...
	
	'collections' => [
		'pages' => [
			'name' => 'Pages',
	    'permalink' => '/',
	    'location' => './content/pages'
		]
	]
];
```

You'll also want to move your content into subdirectories in the `content` directory (or wherever you decide to locate the collections).

### Redirects
Redirects are now formatted like this in your configuration:

```php
<?php

return [
	'redirects' => [
		[
			'slug' => 'bing',
			'target' => 'https://bing.com'
		]
	]
];
```
