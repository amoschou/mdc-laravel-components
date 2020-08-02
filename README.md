# MDC Laravel components

## Introduction

[Mataterial Components for the web](https://github.com/material-components/material-components-web) is one of Google’s solutions to implementing [Material Design](https://www.material.io/) for the web.

This project implements Material Components for the web using [Laravel](https://laravel.com)’s [Blade templates](https://laravel.com/docs/7.x/blade).

It also presents a rudimentary theming solution, including dark theme.

## Installation

Copy these files into a Laravel installation and change the following files:

* Add the element `App\Providers\ComponentServiceProvider::class` to the `providers` array in `config/app.php`.
* Add the line `include base_path('routes/web-routes.php');` to `routes/web.php`.
