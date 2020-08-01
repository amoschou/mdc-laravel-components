<?php

use App\Helpers\Theme;
use Illuminate\Support\Facades\Route;

Route::get('/{urlString}', function ($urlString) {
    $theme = Theme::generateRandomTheme();

    $themeWrapperClass = Theme::wrapperClass($theme);

    $context = [
        'theme' => $theme,
        'themeWrapperClass' => $themeWrapperClass
    ];

    return view($urlString, $context);
});

Route::get('/demo/{demo}', function ($demo) {
    $theme = Theme::generateRandomTheme();

    $themeWrapperClass = Theme::wrapperClass($theme);

    $context = [
        'component' => $demo !== 'all' ? $demo : [
            'button',
            'checkbox',
            'typography'
        ],
        'theme' => $theme,
        'themeWrapperClass' => $themeWrapperClass
    ];

    return view($demo !== 'all' ? 'demos.index' : 'demos.all', $context);
});

Route::get('/css/components/combo/{id}/style.css', function($id = null, Illuminate\Http\Request $request) {
    $context = [
        'id' => $id,
        'type' => $request->input('type', false),
        'subType' => $request->input('subType', false)
    ];

    $component = explode("::", $id)[0];
    
    return response()->view("components.combo.{$component}-css", $context)->header('Content-Type', 'text/css');
})->name('css.frame');
