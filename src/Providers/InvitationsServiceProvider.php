<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Invitations.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Invitations\Providers;

use Illuminate\Support\ServiceProvider;

class InvitationsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/invitations.php', 'invitations');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

            $this->publishes([
                __DIR__.'/../../config/invitations.php' => $this->app->configPath('invitations.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../../database/migrations/' => $this->app->databasePath('migrations'),
            ], 'migrations');
        }
    }
}
