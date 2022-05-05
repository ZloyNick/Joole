<?php

/*
 * Configuration file for Joole class.
 */
return [
    'components' => [
        [
            'name' => 'router',
            'class' => \joole\components\routing\RoutingComponent::class,
            'options' => [
                'routes' => __DIR__.'/../routes/',
            ],
        ],

        [
            'name' => 'containers',
            'class' => \joole\components\container\ContainersComponent::class,
            'options' => [
                'main' => [
                    ['class' => \joole\reflector\Reflector::class],
                ]
            ],
        ],

        [
            'name' => 'renderer',
            'class' => \joole\components\renderer\RendererComponent::class,
            'options' => [
                'views' => __DIR__.'/../views/',
            ],
        ],
    ],
];