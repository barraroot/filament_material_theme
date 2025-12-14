# Instrução de instalação thema material disgner para filament

<p>Para instalação no arquivo App\Providers\Filament\AdminPanelProvider colocar as seguinte linha no retorno do painel</p>
<code>
->colors([
    'primary' => Color::hex('#3f51b5'),
    'danger' => Color::hex('#f44336'),
    'warning' => Color::hex('#ff9800'),
    'success' => Color::hex('#4caf50'),
    'info' => Color::hex('#2196f3'),
])
->viteTheme('resources/css/filament/material/theme.css')
</code>

## Executa os comandos npm
<code>
npm install
npm run build
</code>
## ou execute yarn
<code>
yarn
yarn build
</code>