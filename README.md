# mb_ucfirst()
Provides missing multi-byte function

## Installation
With Composer
```bash
composer require dimns/mb_ucfirst
```

## Usage
```php
$str = 'пример текста';

// Пример текста
echo mb_ucfirst($str, 'UTF-8');
```