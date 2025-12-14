<?php

namespace Barraroot\FilamentMaterialTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;

class FilamentMaterialThemePlugin implements Plugin
{
    public static function make(): static
    {
        return new static;
    }

    public function getId(): string
    {
        return 'filament-material-theme';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->colors([
                'primary' => Color::hex('#3f51b5'),
                'danger' => Color::hex('#f44336'),
                'warning' => Color::hex('#ff9800'),
                'success' => Color::hex('#4caf50'),
                'info' => Color::hex('#2196f3'),
            ])
            ->viteTheme('vendor/barraroot/filament-material-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}