const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const mdcOptions = {
    // Prefer Dart Sass
    implementation: require('sass'),

    // See https://github.com/webpack-contrib/sass-loader/issues/804
    webpackImporter: false,

    sassOptions: {
        includePaths: ['./node_modules']
    }
};

const designPoints = {
    primaries: [
        'amethyst',
        'emerald',
        'ruby',
        'saphire'
    ],
    secondaries: [
        'azurite',
        'crocoite'
    ],
    modes: [
        'light',
        'dark'
    ]
};

entires = {
    sass: [
        'mdc',
        'theme/base-with-colour',
        'theme/base-without-colour',
        'theme/baseline-dark',
        'theme/baseline-default'
    ],
    js: [
        'mdc'
    ]
};

designPoints.primaries.forEach(primary => {
    designPoints.secondaries.forEach(secondary => {
        designPoints.modes.forEach(mode => {
            mix.sass('resources/sass/theme/' + mode + '-' + primary + '-' + secondary + '.scss', 'public/css', mdcOptions);
        });
    });
});

entires.sass.forEach(entry => {
    mix.sass('resources/sass/' + entry + '.scss', 'public/css', mdcOptions);
})

entires.js.forEach(entry => {
    mix.js('resources/js/' + entry + '.js', 'public/css', mdcOptions);
})
