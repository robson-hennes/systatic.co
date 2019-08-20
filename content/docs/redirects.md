---
title: Redirects
description: Need a redirect? We've got you covered?
---

Sometimes you'll want to setup redirects for pages. These are easy to setup. You just need to add an item to the `redirects` array in your config file.

```php
<?php

return [
	'redirects' => [
		[
			'slug' => 'bing',
			'target' => ''https://bing.com'
		]
	]
];
```