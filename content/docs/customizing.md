---
title: Customizing
view: docs
documentation: true
---

Sometimes you may want to rename some folder or even the config file, we've made Systatic in a way that's flexible to make this easy.

## Renaming the config file

In Version 1, you couldn't change the location or the name of the config file, so we've changed that with v2.

The only thing you'll need to change, apart from renaming the `config.php`, is in the `systatic` console file.

At the top of the config file, change the value of the `$config` variable to the relative path of the your config file.

```php
<?php

/*
    Path to Config
    - A relative path to where your config file is located.
*/

$config = './config.php';
```

## Changing the directory names

Directory names are also easy to change. Just go into your `config.php` file (or whatever your config file is called). In the `location` array, you'll see the directories that you can change the directory of.

```php
'locations' => [
	'output' => './dist',
	'content' => './content',
	'views' => './views',
	'storage' => './storage'
]
```

## Changing the name of the console file

We wouldn't usually recommend doing this, but it's your choice!

It's actually just as simple as renaming the `systatic` file to whatever you want.