---
title: Building
view: docs
---

When you have made changes to your content or views then you'll need to rebuild your site.

To rebuild your site run the following command from the root of your Systatic project.

```
php systatic build
```

Systatic will generate static HTML files and place them in your output directory, wherever that might be. By default, that directory is `dist`.

# Laravel Valet
If you are developing locally with Laravel Valet, visiting `yoursite.test` will show a 404 file saying that the site does not exists. This is shown because Laravel Valet does not know where to look for the outputted HTML files. But we can tell it where to go!

All you need to do is run this command:

```
cp -a vendor/damcclean/systatic/stubs/valet/* .
```

It will publish a `LocalValetDriver.php` file to the root directory of your project. Now if you visit your site again in the browser it will display your site.
