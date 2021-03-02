<?php

return [
    'site-name' => [
        'description' => 'core::settings.site-name',
        'view' => 'text',
        'translatable' => true,
    ],
    'site-name-mini' => [
        'description' => 'core::settings.site-name-mini',
        'view' => 'text',
        'translatable' => true,
    ],
    'site-description' => [
        'description' => 'core::settings.site-description',
        'view' => 'textarea',
        'translatable' => true,
    ],
    'template' => [
        'description' => 'core::settings.template',
        'view' => 'core::fields.select-theme',
    ],
    'analytics-script' => [
        'description' => 'core::settings.analytics-script',
        'view' => 'textarea',
        'translatable' => false,
    ],
    'locales' => [
        'description' => 'core::settings.locales',
        'view' => 'core::fields.select-locales',
        'translatable' => false,
    ],

    'id-facebook' => [
        'description' => 'core::settings.Id facebook',
        'view' => 'text',
        'translatable' => false,
    ],
    'twitter' => [
        'description' => 'core::settings.twitter Account',
        'view' => 'text',
        'translatable' => false,
    ],
    'address' => [
        'description' => 'core::settings.Address',
        'view' => 'text',
        'translatable' => true,
    ],
    'email' => [
        'description' => 'core::settings.mail',
        'view' => 'text',
        'translatable' => false,
    ],
    'phone' => [
        'description' => 'core::settings.phone',
        'view' => 'text',
        'translatable' => false,
    ],
    'facebook' => [
        'description' => 'core::settings.facebook',
        'view' => 'text',
        'translatable' => false,
    ],
    'instagram' => [
        'description' => 'core::settings.phone',
        'view' => 'text',
        'translatable' => false,
    ],
    'linkedin' => [
        'description' => 'core::settings.linkedin',
        'view' => 'text',
        'translatable' => false,
    ],
    'youtube' => [
        'description' => 'core::settings.Youtube',
        'view' => 'text',
        'translatable' => false,
    ]
];
