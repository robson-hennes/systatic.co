<?php

return [
	'siteName' => 'Systatic',
	'siteUrl' => '/',
	'outputDir' => './dist',
	'contentDir' => './content',
	'viewsDir' => './views',
	'storageDir' => './storage',

	'nav' => [
		[
			'name' => 'Documentation',
			'target' => '/docs.html'
		],
		[
			'name' => 'Changelog',
			'target' => '/changelog.html'
		]
	],

	'social' => [
		[
			'name' => 'Github',
			'icon' => '/images/github.svg',
			'link' => 'https://github.com/damcclean/systatic'
		],
		[
			'name' => 'Discord',
			'icon' => '/images/discord.svg',
			'link' => 'https://discord.gg/sxkrycQ'
		],
	],

	'docs' => [
		[
			'name' => 'Getting Started',
			'target' => '/getting-started.html'
		],
		[
			'name' => 'Customizing',
			'target' => '/customizing.html'
		],
		[
			'name' => 'Building',
			'target' => '/building.html'
		],
		[
			'name' => 'Deploying',
			'target' => '/deploying.html'
		],
		[
			'name' => 'Configuration',
			'target' => '/configuration.html'
		],
		[
			'name' => 'Content',
			'target' => '/content.html'
		],
		[
			'name' => 'Templating',
			'target' => '/templating.html'
		],
	],

	'redirects' => [
		'docs' => '/getting-started.html'
	]
];