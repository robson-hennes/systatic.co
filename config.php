<?php

return [
    'name' => 'Systatic',
    'url' => 'https://systatic.co',

    'locations' => [
        'output' => './dist',
        'views' => './views',
        'storage' => './storage'
    ],

    'collections' => [
        'pages' => [
            'name' => 'Pages',
            'permalink' => '/',
            'location' => './content/pages'
        ],

        'docs' => [
            'name' => 'Documentation',
            'permalink' => '/docs/',
            'location' => './content/docs',
            'view' => 'docs',
        ],

        'releases' => [
            'name' => 'Releases',
            'permalink' => '/releases/',
            'build' => false,

            'remote' => function() {
                $response = \Zttp\Zttp::get('https://api.github.com/repos/damcclean/systatic/releases');
                $releases = convert_to_object($response->json());

                $parsedown = new \Damcclean\Markdown\MetaParsedown();

                return collect($releases)->map(function ($release) use (&$parsedown) {
                    return [
                        'title' => $release->name,
                        'slug' => $release->id,
                        'date' => \Carbon\Carbon::parse($release->published_at)->format('jS F Y'),
                        'github' => $release->url,
                        'content' => $parsedown->text($release->body)
                    ];
                });
            }
        ]
    ],

    'nav' => [
        [
            'name' => 'Documentation',
            'target' => '/docs/installation'
        ],
        [
            'name' => 'Changelog',
            'target' => '/changelog'
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
            'link' => 'https://discord.gg/zSg3MHv'
        ],
    ],

    'redirects' => [
        [
            'slug' => 'docs',
            'target' => '/docs/installation'
        ]
    ]
];