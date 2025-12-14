
## Installation

```bash
composer require barraroot/filament-material-theme:"^1.0"
```

To install the theme's required JS libraries (install TailwindCSS plugins: forms, typography, and also postcss, and autoprefixer. Create postcss.config.js if it not exists yet), run:

```bash
php artisan filament-material-theme:install
```

Add a new item to the `input` array of your `vite.config.js` file:

```js
'vendor/barraroot/filament-material-theme/resources/css/theme.css'
```

Run:

```bash
npm run build
```

Register the plugin on your panel (e.g. `/app/Providers/Filament/AdminPanelProvider.php`):

```php
use Barraroot\FilamentMaterialTheme\FilamentMaterialThemePlugin;

$panel
  ->plugin(FilamentMaterialThemePlugin::make())
```
