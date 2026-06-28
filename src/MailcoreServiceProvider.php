<?php

declare(strict_types=1);

namespace Inboxcom\Mailcore\Laravel;

use Inboxcom\Mailcore\MailcoreClient;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

final class MailcoreServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/mailcore.php', 'mailcore');

        $this->app->singleton(MailcoreClient::class, static function (Application $app): MailcoreClient {
            /** @var array{api_key: string, base_uri: string} $config */
            $config = $app['config']['mailcore'];

            return new MailcoreClient($config['api_key'], $config['base_uri']);
        });

        $this->app->alias(MailcoreClient::class, 'mailcore');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [__DIR__ . '/../config/mailcore.php' => $this->app->configPath('mailcore.php')],
                'mailcore-config',
            );
        }
    }

    /** @return array<int, string> */
    public function provides(): array
    {
        return [MailcoreClient::class, 'mailcore'];
    }
}
