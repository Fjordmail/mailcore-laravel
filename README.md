# inboxcom/mailcore-laravel

[![Latest Version](https://img.shields.io/packagist/v/inboxcom/mailcore-laravel.svg)](https://packagist.org/packages/inboxcom/mailcore-laravel)
[![License](https://img.shields.io/packagist/l/inboxcom/mailcore-laravel.svg)](LICENSE)

Laravel bridge for the **Mailcore** mail-server control API — a service provider, config, and facade around the [`inboxcom/mailcore-php`](https://packagist.org/packages/inboxcom/mailcore-php) core client.

> **Unofficial.** Third-party package; not published by Mailcore.

> **AI-assisted.** Code, tests, and docs were written largely by AI (Claude Code) under human direction and review.

## Install

```bash
composer require inboxcom/mailcore-laravel
```

Requires PHP >= 8.4. The service provider is auto-discovered.

## Configuration

Set your key in `.env`:

```dotenv
MAILCORE_API_KEY=your-api-key
# MAILCORE_BASE_URI=https://api.example.com   # optional
# MAILCORE_TIMEOUT=30          # optional, request timeout in seconds (0 disables)
# MAILCORE_CONNECT_TIMEOUT=10  # optional, connect timeout in seconds (0 disables)
```

To customise more, publish the config:

```bash
php artisan vendor:publish --tag=mailcore-config
```

## Usage

Via the facade:

```php
use Inboxcom\Mailcore\Laravel\Facades\Mailcore;

$users = Mailcore::users()->list(filter: '*');
$user  = Mailcore::users()->get('holger@example.com');
```

…or resolve the client from the container (constructor injection, `app()`, etc.):

```php
use Inboxcom\Mailcore\MailcoreClient;

public function __construct(private MailcoreClient $mailcore) {}
```

See the [core package](https://packagist.org/packages/inboxcom/mailcore-php) for the full client surface and error handling. Every non-2xx response throws a subclass of `Inboxcom\Mailcore\Exception\ApiException`; the API key is never included in any exception message.

## Development & full docs

This package is developed in the [`Fjordmail/mailcore-sdk`](https://github.com/Fjordmail/mailcore-sdk) monorepo (this repository is a read-only subtree split). Issues and contributions belong there.

## License

MIT — see [LICENSE](LICENSE).
