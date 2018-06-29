#l5-getresponse
<p align="center">
<a href="https://travis-ci.org/roanvanbao/l5-getresponse"><img src="https://travis-ci.org/roanvanbao/l5-getresponse" alt="Build Status"></a>
<a href="https://packagist.org/packages/secomapp/l5-getresponse"><img src="https://poser.pugx.org/secomapp/l5-getresponse/license.svg" alt="License"></a>
</p>

GetResponse API Integration for Laravel 5.*

## Installation

You can install package "secomapp/l5-getresponse" by command

```bash
composer require "secomapp/l5-getresponse":"dev-master"
```

Or other way, add the package to require lists in composer.json and run composer update to install the package.

```yaml
...
    "require": {
        ...
        "secomapp/l5-getresponse":"dev-master"
        ...
    }
...
```

After installing the package, if you use Laravel 5.5 or higher, you can skip this step.
Add service provider and facade to configuration file **config/app.php**

```php
return [
    ...
    'providers' => [
        ...
        '\Secomapp\GetResponse\GetResponseServiceProvider'
        ...
    ],
    'alias' => [
        ...
        '\Secomapp\GetResponse\Facades\GetResponse'
        ...
    ]
    ...
];
```

## Configuration

You can publish config file from the package to your configuration path by command

```php
./artisan vendor:publish --provider="Secomapp\\GetResponse\\GetResponseServiceProvider"
```

Some configuration you can set up from .env
```dotenv
GETRESPONSE_APIURL=https://api.getresponse.com/v3 #Optional
GETRESPONSE_APIKEY=
```

## Usage

In everywhere, you can use to work with GetResponse
```php
\GetResponse::accounts();
\GetResponse::getCampaigns();
\GetResponse::getCampaign($campaign_id);
```

## Helpers

Another way to work with GetResponse

```php
getresponse_accounts();
getresponse_get_campaigns();
getresponse_get_campaign();
```

## Contributing

If you have any idea or update for library, please create [new pull request](https://github.com/roanvanbao/l5-getresponse/pulls)

## Issues

When you meet any issue, please create [new issue](https://github.com/roanvanbao/l5-getresponse/issues)

## Todo

* Add test