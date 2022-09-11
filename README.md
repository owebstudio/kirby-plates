# Kirby Plates

This package enable [Plates](https://github.com/thephpleague/plates) that Native PHP template engine/system for your own Kirby applications.

All the documentation about Plates template engine is in the [official documentation](https://platesphp.com/).

## Installation

### Installation with composer

### Manual

1. Download the latest release
2. Unzip downloaded file
3. Copy/paste unzipped folder in your `/site/plugins` folder

### With composer

```ssh
composer require kirbynext/kirby-plates
```

### Git submodule

```ssh
git submodule add https://github.com/kirbynext/kirby-plates.git site/plugins/kirby-plates
```

### Sample usage

#### /site/templates/home.php

```php
<?php $this->layout('default') ?>

<h1>User Profile</h1>
<p>Hello, <?=$this->e($name)?></p>


<?php $this->push('scripts') ?>
  <script src="example.js"></script>
<?php $this->end() ?>
```

#### /site/templates/layouts/default.php

```php
<html>
  <head>
    <title><?=$this->e($title)?></title>
  </head>
  <body>
    <?=$this->section('content')?>
    <?= $this->section('scripts') ?>
  </body>
</html>
```
