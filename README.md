# Laravel Invitations

[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kodekeep/laravel-invitations/run-tests?label=tests)](https://github.com/kodekeep/laravel-invitations/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Code Coverage](https://badgen.now.sh/codecov/c/github/kodekeep/laravel-invitations)](https://codecov.io/gh/kodekeep/laravel-invitations)
[![Minimum PHP Version](https://badgen.net/packagist/php/kodekeep/laravel-invitations)](https://packagist.org/packages/kodekeep/laravel-invitations)
[![Latest Version](https://badgen.net/packagist/v/kodekeep/laravel-invitations)](https://packagist.org/packages/kodekeep/laravel-invitations)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/laravel-invitations)](https://packagist.org/packages/kodekeep/laravel-invitations)
[![License](https://badgen.net/packagist/license/kodekeep/laravel-invitations)](https://packagist.org/packages/kodekeep/laravel-invitations)

> Invitations for Laravel Eloquent.

## Installation

```bash
composer require kodekeep/laravel-invitations
```

## Usage

``` php
use KodeKeep\Invitations\Concerns\HasInvitations;

class User extends Models
{
    use HasInvitations;
}
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 (MPL-2.0). Please see [License File](LICENSE.md) for more information.
