<?php

return [
    'admin' => [
        'type' => 1,
        'children' => [
            'post-index',
            'post-create',
            'post-update',
            'post-delete',
        ],
    ],
    'supervisor' => [
        'type' => 1,
        'children' => [
            'post-index',
            'post-create',
            'post-update',
        ],
    ],
    'operador' => [
        'type' => 1,
        'children' => [
            'post-index',
        ],
    ],
    'post-index' => [
        'type' => 2,
    ],
    'post-create' => [
        'type' => 2,
    ],
    'post-update' => [
        'type' => 2,
    ],
    'post-delete' => [
        'type' => 2,
    ],
];
