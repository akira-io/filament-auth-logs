<?php

namespace Akira\FilamentAuthLogs;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentAuthLogsPlugin implements Plugin
{
    protected ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected ?string $activeNavigationIcon = 'heroicon-s-clipboard-document-list';

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

    public function navigationIcon(string $navigationIcon): self
    {
        $this->navigationIcon = $navigationIcon;

        return $this;
    }

    public function getNavigationIcon(): ?string
    {
        return $this->navigationIcon;
    }

    public function activeNavigationIcon(string $activeNavigationIcon): self
    {
        $this->activeNavigationIcon = $activeNavigationIcon;

        return $this;
    }

    public function getActiveNavigationIcon(): ?string
    {
        return $this->activeNavigationIcon;
    }
}
