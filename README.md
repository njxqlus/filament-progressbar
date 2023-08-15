# Filament Progress Bar Plugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/njxqlus/filament-progressbar.svg?style=flat-square)](https://packagist.org/packages/njxqlus/filament-progressbar)
[![Total Downloads](https://img.shields.io/packagist/dt/njxqlus/filament-progressbar.svg?style=flat-square)](https://packagist.org/packages/njxqlus/filament-progressbar)



This Filament component shows a progress bar at the top of the page when we navigate from one page to another

## Installation

You can install the package via composer:

```bash
composer require njxqlus/filament-progressbar
```

## Usage

Just add a `->plugin(FilamentProgressbarPlugin::make())` to a PanelProvider:

```php
namespace App\Providers\Filament;

use Njxqlus\FilamentProgressbar\FilamentProgressbarPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel           
            ->plugin(FilamentProgressbarPlugin::make()->color('#29b'));
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Mikael Ahabalyants](https://github.com/njxqlus)
- Arthur Minasyan

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
