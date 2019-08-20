<?php

use Zttp\Zttp;

return [
    'name' => 'Systatic',
    'url' => 'https://systatic.co',

    'locations' => [
        'output' => './dist',
        'views' => './views',
        'storage' => './storage',
    ],

    'collections' => [
        'pages' => [
            'name' => 'Pages',
            'permalink' => '/',
            'location' => './content/pages',
        ],

        'docs' => [
            'name' => 'Documentation',
            'permalink' => '/docs/',
            'location' => './content/docs',
        ],

        'releases' => [
            'name' => 'Releases',
            'permalink' => '/releases/',
            'build' => false,

            'remote' => function () {
                $response = Zttp::get('https://api.github.com/repos/damcclean/systatic/releases');
                $releases = convert_to_object($response->json());

                $markdown = new \Damcclean\Systatic\Parsers\ParsedownExtra();

                return collect($releases)->map(function ($release) use (&$markdown) {
                    return [
                        'title' => $release->name,
                        'slug' => $release->id,
                        'date' => \Carbon\Carbon::parse($release->published_at)->format('jS F Y'),
                        'github' => $release->url,
                        'content' => $markdown->parse('---\n \n---'.$release->body),
                    ];
                });
            },
        ],
    ],

    'redirects' => [
        [
            'slug' => 'docs',
            'target' => '/docs/installation',
        ],
    ],

    'navigation' => [
        'Getting Started' => [
            'Installation' => '/docs/installation',
            'Updating' => '/docs/updating',
            'Configuration' => '/docs/configuration',
            'Building' => '/docs/building',
            'Content' => '/docs/content',
            'Deployment' => '/docs/deployment',
        ],
        'Features' => [
            'Collections' => '/docs/collections',
            'Templating' => '/docs/templating',
            'Importer' => '/docs/importer',
            'Redirects' => '/docs/redirects',
        ],
        'Plugins' => [
            'Installation' => '/docs/plugins#install',
            'Development' => '/docs/plugins#building',
        ],
        'Miscellaneous' => [
            'Changelog' => '/changelog',
            'Common Issues' => '/docs/common-issues',
        ]
    ]
];
