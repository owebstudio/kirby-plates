<?php

use Kirby\Cms\App as Kirby;
use ClickToNext\Template;

@include_once __DIR__ . "/vendor/autoload.php";

Kirby::plugin('clicktonext/kirby-plates', [
    'components' => [
        'template' => function (Kirby $kirby, string $name, string $type = 'html', string $defaultType = 'html') {
            return new Template($name, $type, $defaultType);
        },
    ]
]);
