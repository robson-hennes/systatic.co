---
title: Importer
description: Grab everything from your previous system and load it into Markdown, ready for Systatic to build.
---

Systatic has a few importer to make it easy to import your content from other static site generators or CMS's.

## WordPress
To use the WordPress importer, run this command:

```
php systatic import:wordpress
``` 

It'll prompt for your WordPress site URL and it'll bring in your posts and pages using the REST API.

However, please note:
* We can't bring in custom post types right now using the importer because it's a bit complicated.
* Some security plugins lock down the WordPress REST API to require authentication, in those cases the importer would not work.

## Jekyll
Before using the Jekyll importer, copy your entire Jekyll directory into a folder in your Systatic install. Then run:

```
php systatic import:jekyll
```

It'll prompt you for the name of the directory where you put your Jekyll site. Just enter that.

Our importer will find all the posts and any other content on your site and will set it up for you in Systatic.

## Ghost
There are a few steps to do before you can import from your Ghost site.

The first thing is that you'll need to login to your Ghost site, go to your Integrations page. You'll want to create a custom integration. 

Once created, it will give you a Content API key, keep that for now. Then run:

```
php systatic import:ghost
```

You'll be prompted for the URL of your Ghost site and you'll need to provide the Content API key.

Then Systatic will import your settings, posts and pages from Ghost.

## Custom Importers
If you want to create your own importer, you can do so either using a custom script or you can build one as a Plugin by registering a command.