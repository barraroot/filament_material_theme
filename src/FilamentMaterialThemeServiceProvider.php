<?php

namespace Barraroot\FilamentMaterialTheme;

use Barraroot\FilamentMaterialTheme\Console\FilamentMaterialThemeInstall;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentMaterialThemeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-material-theme')
            ->hasCommand(FilamentMaterialThemeInstall::class);
    }
}