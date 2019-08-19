---
title: Installation
documentation: true
order: 1
---

## System Requirements
Systatic needs at least PHP 7 and Composer on your machine.

### Suggested Dev Environments
#### Laravel Valet (Mac only)
[Laravel Valet](http://laravel.com/docs/valet) is our favourite dev environment for Mac. It's so much simpler than using a virtual environment, like Homestead.
It just maps all subdirectories in a folder you specify to `.test` domains.
Technically, Valet is Mac only, but there are Windows and Linux ports, which seem to work alright in our experience.

> If you're using Valet, you'll want to push our custom Valet driver which will make sure everything works smoothly. You'll be prompted to do this during install.

#### XAMPP (Windows)
XAMPP is a local web server package for Windows (There may also be a version for Mac too). It'll install Apache, PHP for you. Once installed, you'll still need to install Composer.

#### Laravel Homestead
If you like using a virtual machine for your development, that's also an option. It's basically a Vagrant box. Homestead comes with everything installed, Composer, PHP, Nginx/Apache (can't remember)

#### Command Line Server
If you don't want to install anything other than PHP and Composer on your machine, you can spin up a local PHP development server with one command.

```
php systatic serve
```

It will use PHP's native web server and will direct it to serve the files from the right place.

## Actual Install Steps
### 1. Create a new directory

```
mkdir dog-food-blog && cd dog-food-blog
```

### 2. Install Systatic

```
composer require damcclean/systatic
```

### 3. Initialise Systatic

```
php vendor/damcclean/systatic/init init
```

### 4. Build the site

```
php systatic build
```
