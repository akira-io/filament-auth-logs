<?php

namespace Akira\FilamentAuthLogs;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentAuthLogsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-auth-logs';
    }

    public function register(Panel $panel): void
    {
        $panel->discoverResources(in: __DIR__ . '/Resources', for: 'Akira\\FilamentAuthLogs\\Resources');
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
