# PHP-FantasyData

PHP-FantasyData is a PHP library for the [FantasyData API version 3](http://fantasydata.com/).
This library currently only contains wrappers for the NFL section of the API. Other sections are planned to be added in the future.

The API currently returns your data in two formats; JSON and XML.

## Requirements
This library requires the use of Composer.
```
composer require konradbaron/fantasydata
```

You must first register an account to receive an API key from [FantasyData Portal](http://fantasydata.com/). There is a free trial option, which limits the amount of API calls to 1K per month.

##Example Usage

```php
    use KonradBaron\FantasyData\FantasyDataNFLPlayByPlay;
    $fd = new FantasyDataNFLPlayByPlay('YOUR_API_KEY');
    echo $fd->playByPlay('json', '2016REG', 8, 'WAS');
```