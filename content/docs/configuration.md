---
title: Configuration
description: Systatic has configuration nailed! (at least we think so)
---

## Config file
Every site has a `config.php` file. It's the main place for configuration in Systatic.

A plain `config.php` file looks a bit like this:

```php
<?php

return [
	'name' => 'Systatic',
	'env' => 'local',
	'url' => 'http://localhost:8080',
	
	'locations' => [
		'output' => './dist',
		'views' => './views',
		'storage' => './storage'
	],
	
	'collections' => [
		'pages' => [
			'name' => 'Pages',
	    'permalink' => '/',
	    'location' => './content/pages'
		]
	]
];
```

Most of the file is pretty self explanatory.

The `location` array has the directory paths for your output, views and your storage.

The `collections` array sets down the collections you want to use within your Systatic site. You can read more about collections configuration [here](#).

### Changing the name of the config file
If you don't like the name of the config file, you can change that.

Open up your `systatic` file and change the value of the `$config` variable.

```php
<?php

/*
    Path to Config
    - A relative path to where your config file is located.
*/

$config = './new-config-filename.php';

....
```

## Environment settings
Sometimes you need to keep things like API keys and stuff out of Git or things that are different between environments. That's why we use `.env` files.

All you need to do is create a `.env` file and you can put in it whatever values you want.

```
STRIPE_SECRET=......
```

You can reference it in your templates, like any other configuration value:

```php
{{ $config->STRIPE_SECRET }}
```

### Env fallbacks

If a value does not exist in the `config.php` file, it will fallback to an environment file. For example, if the `name` config value does not exist in the config file, it will fallback to the `NAME` value.