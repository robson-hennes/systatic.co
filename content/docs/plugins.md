---
title: Plugins
documentation: true
order: 9
---

# Plugins
## How to install a plugin
Once you've found a Systatic plugin you want to use, install it via composer.

```
$ composer require developer/plugin-name
```

Then you'll want to register the plugin in your config file. Usually plugins will give you the class to register

```php
'plugins' => [
		'\Developer\PluginName\PluginName'
]
```

Then that'll be you done! You'll have the plugin installed and all the capabilities that it comes with.

## How to create a plugin
Plugins are just Composer packages that are specifically for Systatic.

We recommend using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com/) for the base of your package. Just create a PHP project with it.

Next, create a `boot` method with a return array, just like this, in the main class of your package.

```php
public function boot()
{
    return [
        	//
    ];
}
```

Next, you can add things to your plugin - like Commands, Templating Languages and Views.

## Commands
Plugins can register their own commands.

To do this, create a new PHP file called something like `Commands.php`. The file should look like this:

```php
<?php

namespace Damcclean\HelloWorld;

class Commands
{
    public function console()
    {
        return [
	        //        
		    ];
    }
}
```

And add this line to the array in your `boot` method in your packages's main class.

```php
public function boot()
{
	return [
    'commands' => '\Developer\PackageName\Commands'
	];
}
```

Now that you've done that, it's time to create the actual command. 

Systatic's command line is built on top of [Laravel's artisan command line](https://laravel.com/docs/5.8/artisan). So everything that works over there will work on Systatic.

Create a new PHP file for your command, like `HelloWorldCommand.php`. Then your command file should look like this:

```php
<?php

namespace Damcclean\HelloWorld;

use Illuminate\Console\Command;

class HelloWorldCommand extends Command
{
    protected $signature = 'hello:world';
    protected $description = 'Displays a hello world message to the user';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Hello World!');
    }
}
```

All you need to do now is add the namespace of the `HelloWorldCommand` to the array in your `Commands.php` file.

```php
return [
        '\Damcclean\HelloWorld\HelloWorldCommand'
];
```

## Available APIs
Plugins have access to all the same APIs as Systatic does. This means you can do things like reading from collections or getting configuration values.

We'll document some of the APIs we have available here, but for the rest you'll need to source dive.

### Config (Damcclean\Systatic\Config\Config)
#### Get config value

```php
$config = new \Damcclean\Systatic\Config\Config();
return $config->get('name'); // returns string
```

#### Get config as array

```php
$config = new \Damcclean\Systatic\Config\Config();
return $config->getArray(); // returns array
```

#### Get env value

```php
$config = new \Damcclean\Systatic\Config\Config();
return $config->env('APP_ENV'); // returns string
```

### Collections (Damcclean\Systatic\Collections\Collections)
#### Do everything 

```php
$collections = new \Damcclean\Systatic\Collections\Collections();
return $collections->collect(); // Returns boolean
```

#### Save the store

```php
$collections = new \Damcclean\Systatic\Collections\Collections();
$store = []; // needs to be a valid array, formatted in the right way
return $collections->save($store); // Returns boolean
```

#### Fetch the store (as an array)

```php
$collections = new \Damcclean\Systatic\Collections\Collections();
return $collections->fetch(); // Returns array
```

#### Fetch the store (as JSON)

```php
$collections = new \Damcclean\Systatic\Collections\Collections();
return $collections->fetchAsJson(); // Returns json
```

### Filesystem (Damcclean\Systatic\Filesystem\Filesystem)
We have a nice layer on top of Symfony's Filesystem package.

#### Create a file
```php
$filesystem = new \Damcclean\Systatic\Filesystem\Filesystem();
return $filesystem->createFile('filename.txt'); 
```

#### Create a directory

```php
$filesystem = new \Damcclean\Systatic\Filesystem\Filesystem();
return $filesystem->createDirectory('directory-name'); 
```

#### Copy a file

```php
$filesystem = new \Damcclean\Systatic\Filesystem\Filesystem();
return $filesystem->copy('./source', './destination'); 
```

#### Copy a directory

```php
$filesystem = new \Damcclean\Systatic\Filesystem\Filesystem();
return $filesystem->copyDirectory('./source', './destination'); 
```

#### Append to the end of a file

```php
$filesystem = new \Damcclean\Systatic\Filesystem\Filesystem();
return $filesystem->append('filename.txt', 'Text'); 
```

#### Dump to a file

```php
$filesystem = new \Damcclean\Systatic\Filesystem\Filesystem();
return $filesystem->dump('filename.txt', 'Text'); 
```

#### Rename a file or directory

```php
$filesystem = new \Damcclean\Systatic\Filesystem\Filesystem();
return $filesystem->rename('old.txt', 'new.txt'); 
```

#### Delete a file or directory

```php
$filesystem = new \Damcclean\Systatic\Filesystem\Filesystem();
return $filesystem->delete('filename.txt'); 
```

## Publishing your plugin
[This guide](https://github.com/CurrencyCloud/currencycloud-php/wiki/Publishing-package-to-Packagist) talks you through publishing your plugin/package to Packages, the Composer registry.