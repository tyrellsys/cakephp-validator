# CakePHP4 Messages Validator plugin

CakePHP4 Validator that set the validation message

## Requirements

The master branch has the following requirements:

* CakePHP >4.0.0
* PHP 7.2 or greater

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require tyrellsys/cakephp-validator
```

no need plugin load

## Config

no configuration

## Model validation

```php
namespace App\Model\Table;

...

class PostsTable extends Table
{
    protected $_validatorClass = \Tyrellsys\CakePHPValidator\Validation\Validator::class;
}
```
