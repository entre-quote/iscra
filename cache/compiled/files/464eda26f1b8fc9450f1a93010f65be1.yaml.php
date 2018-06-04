<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/config/site.yaml',
    'modified' => 1528101165,
    'data' => [
        'title' => 'I.S.C.R.A.',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Iscra',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'Actualites',
            1 => 'Themes',
            2 => 'Interventions',
            3 => 'Medias'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 250,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'myfield' => 'plop'
    ]
];
