---
title: Plugins
documentation: true
order: 9
---

Plugins in Systatic are special Composer packages which add extra functionality to your Systatic site.

## Installing a plugin
Once you've found a Systatic plugin/package you want to use, you'll need to install it via [Composer](https://getcomposer.org/).

```bash
$ composer require damcclean/systatic-table-of-contents
```

After you install via Composer, you'll also need to add the namespace of it's provider to your configuration file.

```php
...
'plugins' => [
	Damcclean\SystaticTableOfContents\TableOfContentsProvider::class
]
```

That's it installed! Some plugins may have additional install steps, so you'll also need to follow those.

## Building a plugin

Because a plugin is essensially just a Composer package, the structure and setup is the really just the same as any other normal Composer package.

Systatic uses 'Providers' to register and bootstrap things your plugin needs. A provider is also the class that you give to your users for them to put in their `config.php` file. A standard Provider looks like this:

```php
<?php

namespace Damcclean\Bacon;

use Damcclean\Systatic\Plugins\BaseProvider;

class SystaticCmsProvider extends BaseProvider
{
	public function boot()
	{
		//
	}
}

```

Currently, there are only a few things that plugins can extend upon, those things are:
* Console
* Compiler
* Views

### Console

To register console commands, you'll need to create a new class within your plugin which looks like this:

```php
<?php

namespace Damcclean\Bacon\Commands;

class Commands
{
    public function __invoke()
    {
        return [
        	//
        ];
    }
}
```

You'll also need to create classes for each of the commands you want. The commands uses the same stuff that powers [Laravel's Artisan](https://laravel.com/docs/5.8/artisan) commands which means your command classes look like this:

```php
<?php

namespace Damcclean\Bacon\Commands;

use Illuminate\Console\Command;

class BaconCommand extends Command
{
    protected $signature = 'cms:start';
    protected $description = 'Starts Systatic CMS';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Bacon!!!');
    }
}
```

Now all your left to do, is actually register the commands which can be done in your provider.

```php
use Damcclean\Bacon\Console\Commands;
...
public function boot()
{
	$this->registerConsole(Commands::class);
}
```

### Compiler

If you want to use a templating language that we don't provide out-of-the-box (so anything other than Blade), you can create your own custom compiler.

First things first, create a new class for your compiler, like `TwigCompiler.php`. Inside the compiler class, add some like this:

```php
...

public $extensions = [
	'.twig',
];

public function compile(array $data)
{
	return true;
}
```

The `$extensions` variable is an array of the file endings/extensions that should use this templating language. Remember to put `.` at the start of the extensions.

The `compile` function is the method we automaticlly call when we want to compile using your compiler. Remember to pull in the `$data` array, it will be passed in when we call the compiler.

Once you've got the Compiler class sorted, just register it in your Provider.

```php
use Damcclean\SystaticTwig\TwigCompiler;
...
public function boot()
{
	$this->registerCompiler(TwigCompiler::class);
}
```

Now any views with the file endings you specified will be compiled using your compiler, otherwise they will go to the default Blade compiler.

### Views

If your plugin needs to push out some custom views you can do that at built time, just by adding an array of the files you want to copy to your provider.

```php
...
public function boot()
{
	$this->publishViews([
		'./source.blade.php' => 'target.blade.php
	]);
}
```
