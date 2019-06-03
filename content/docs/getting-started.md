---
title: Getting Started
view: docs
---

# System Requirements
To use Systatic, you'll need PHP (minimum version 7.2) and Composer installed.

# Installation
1. Create a new directory for your site and change into that directory.

```
mkdir awesome-site
cd awesome-site
```

2. Install through Composer

```
composer require damcclean/systatic
```

3. Copy files across

```
cp -a vendor/damcclean/systatic/stubs/site/* .
```

4. Build your site

```
php systatic build
```

# Directory Structure
Your site folder will now consist of a few different files and folders

* `content` - Where your markdown files go
* `dist` - Where your outputed HTML files go
* `storage` - Where Systatic keeps its cache and any other temporary files
* `vendor` - Composer dependency files
* `views` - Where your Laravel Blade views live
* `.example.env` - Sample enviromment file
* `composer.json` & `composer.lock` - Files for dependency manager (Composer)
* `config.php` - Systatic Config file
* `systatic` - Systatic console file
