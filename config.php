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
			'target' => '/docs'
		],
		[
			'name' => 'Changelog',
			'target' => '/changelog'
		],
		[
			'name' => 'Github',
			'target' => 'https://github.com/damcclean/systatic'
		],
	],

	'docs' => [
		[
			'name' => 'Getting Started',
			'target' => '/getting-started'
		],
		[
			'name' => 'Building',
			'target' => '/building'
		],
		[
			'name' => 'Deploying',
			'target' => '/deploying'
		],
		[
			'name' => 'Configuration',
			'target' => '/configuration'
		],
		[
			'name' => 'Content',
			'target' => '/content'
		],
		[
			'name' => 'Templating',
			'target' => '/templating'
		],
	],

	'redirects' => [
		'docs' => '/getting-started'
	]
];