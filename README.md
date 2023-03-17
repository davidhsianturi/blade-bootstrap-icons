# Blade Bootstrap Icons

<a href="https://github.com/davidhsianturi/blade-bootstrap-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/davidhsianturi/blade-bootstrap-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/davidhsianturi/blade-bootstrap-icons">
    <img src="https://poser.pugx.org/davidhsianturi/blade-bootstrap-icons/v/stable.svg" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/davidhsianturi/blade-bootstrap-icons">
    <img src="https://poser.pugx.org/davidhsianturi/blade-bootstrap-icons/d/total.svg" alt="Total Downloads">
</a>

A package to easily make use of [Bootstrap Icons](https://github.com/twbs/icons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [icons.getbootstrap.com](https://icons.getbootstrap.com/).

## Requirements

-   PHP 8.0 or higher
-   Laravel 9.0 or higher

## Installation

```bash
composer require davidhsianturi/blade-bootstrap-icons
```

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:

```blade
<x-bi-bell-fill/>
```

You can also pass classes to your icon components:

```blade
<x-bi-bell-fill class="text-primary"/>
```

And even use inline styles:

```blade
<x-bi-bell-fill style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-bootstrap-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-bootstrap-icons/bell-fill.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Bootstrap Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Bootstrap Icons is developed and maintained by [David H. Sianturi](https://davidhsianturi.com).

Blade Icons is developed and maintained by [Dries Vints](https://driesvints.com).

## License

Blade Bootstrap Icons is open-sourced software licensed under [the MIT license](LICENSE.md).
