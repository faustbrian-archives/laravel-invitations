# Laravel Invitations

[![Latest Version](https://badgen.net/packagist/v/kodekeep/laravel-invitations)](https://packagist.org/packages/kodekeep/laravel-invitations)
[![Software License](https://badgen.net/packagist/license/kodekeep/laravel-invitations)](https://packagist.org/packages/kodekeep/laravel-invitations)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/laravel-invitations/run-tests?label=tests)](https://github.com/kodekeep/laravel-invitations/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/laravel-invitations)](https://codeclimate.com/github/kodekeep/laravel-invitations)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/laravel-invitations)](https://codeclimate.com/github/kodekeep/laravel-invitations)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/laravel-invitations)](https://packagist.org/packages/kodekeep/laravel-invitations)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides invitation associations for Laravel Eloquent.

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

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Laravel Invitations is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
