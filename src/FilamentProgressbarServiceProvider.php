<?php

namespace Njxqlus\FilamentProgressbar;

use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentProgressbarServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-progressbar';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }

    public function packageBooted(): void
    {
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );
    }

    protected function getAssetPackageName(): ?string
    {
        return 'njxqlus/filament-progressbar';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make('filament-progressbar-styles', __DIR__ . '/../resources/dist/filament-progressbar.css'),
            Js::make('filament-progressbar-scripts', __DIR__ . '/../resources/dist/filament-progressbar.js'),
        ];
    }
}
