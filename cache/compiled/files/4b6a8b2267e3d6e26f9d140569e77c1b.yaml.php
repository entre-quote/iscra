<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/themes/starter/blueprints/item.yaml',
    'modified' => 1528101371,
    'data' => [
        'title' => 'Item',
        '@extends' => [
            'type' => 'blog',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.subTitle' => [
                                    'ordering@' => 1,
                                    'type' => 'text',
                                    'label' => 'Sous titre',
                                    'validate' => [
                                        'type' => 'text'
                                    ],
                                    'placeholder' => 'Ex. : Par … / Le …'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
