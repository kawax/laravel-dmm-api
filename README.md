# DMM API for Laravel

Laravel 用のシンプルなラッパー。  
https://github.com/dmmlabo/dmm-php-sdk

## Requirements
- PHP >= 7.2
- Laravel >= 6.0

## Installation

### Composer
```
composer require revolution/laravel-dmm-api
```

### config/services.php
```php
    'dmm' => [
        'affiliate_id' => env('DMM_AFFILIATE_ID', ''),
        'api_id'       => env('DMM_APP_ID', ''),
    ],
```

### .env
```bash
DMM_AFFILIATE_ID=
DMM_APP_ID=
```

## Usage

`Dmm::dmm()` が `\Dmm\Dmm` のインスタンスと同じ。後は元のライブラリと同じ使い方。

```php
<?php
use Revolution\Dmm\Facades\Dmm;

$response = Dmm::dmm()->api('')->find('');

$result = $response->getDecodedBody();

dd($result);
```

## Macroable

マクロで好きなように拡張できる。便利なショートカットメソッドなどは用意してないので必要に応じて各自で作る想定。

### AppServiceProvider などで登録

```php
    public function boot()
    {
        \Dmm::macro('search', function ($keyword) {
            $response = $this->dmm()->api('product')->findGeneral[
                'keyword' => $keyword,
            ]);

            return $response->getDecodedBody();
        });
    }
```

### 使う時
```php
$response = \Dmm::search('test');
```

## LICENSE
MIT  
Copyright kawax
