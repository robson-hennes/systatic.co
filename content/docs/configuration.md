---
title: Configuration
view: docs
documentation: true
---

Configuration is simple! Every Systatic site has a `config.php` file which has settings required to build your site.

Your `config.php` will look like this:
```
<?php

return [
	'siteName' => 'Awesome Website',
	'siteUrl' => '/',
	'outputDir' => './tests/site/dist',
	'contentDir' => './tests/site/content',
	'viewsDir' => './tests/site/views',
	'storageDir' => './tests/site/storage'
];
```
## Settings
* `siteName` - **Required** Site name
* `siteUrl` - **Required** Base URL of your site. You can leave it as `/` or provide a full URL like `https://example.com/`. Make sure to include the ending slash.
* `outputDir` - **Required** Where you want your HTML files to go. You should have your web server serve files from here.
* `contentDir` - **Required** Where your Markdown files live
* `viewsDir` - **Required** Where your Laravel Blade views live
* `storageDir` - **Required** Where you want all of the Systatic storage files to live.
* `redirects` - An array of redirects, [read more](https://github.com/damcclean/Systatic/wiki/Redirects).

# Env Variables
If you have things like API keys or variables you would like to keep out of version control of different on each env then you can use `.env` files. 