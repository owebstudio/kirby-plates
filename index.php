<?php

use Kirby\Cms\App as Kirby;
use Oweb\Template;

@include_once __DIR__ . "/vendor/autoload.php";

Kirby::plugin('owebstudio/kirby-plates', [
    'components' => [
        'template' => function (Kirby $kirby, string $name, string $type = 'html', string $defaultType = 'html') {
            return new Template($name, $type, $defaultType);
        },
    ]
]);
