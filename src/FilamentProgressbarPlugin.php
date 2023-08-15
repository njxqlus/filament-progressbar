<?php

namespace Njxqlus\FilamentProgressbar;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;

class FilamentProgressbarPlugin implements Plugin
{
    protected string $color = '#29b';

    protected string $renderHook = 'panels::head.end';

    public function getId(): string
    {
        return 'filament-progressbar';
    }

    public function renderHook(string $renderHook): static
    {
        $this->renderHook = $renderHook;

        return $this;
    }

    public function color(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getRenderHook(): string
    {
        return $this->renderHook;
    }

    public function register(Panel $panel): void
    {
        FilamentView::registerRenderHook(
            $this->getRenderHook(),
            fn (): string => Blade::render("<style>:root {--filament-progressbar-color: {$this->getColor()}}</style>")
        );
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
