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
//            'searchable' => true
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