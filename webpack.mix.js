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
    darkLight: [
        '',
        'dark-'
    ]
};

const entries = [
    'mdc',
    'theme/base-with-colour',
    'theme/base-without-colour',
    'theme/baseline-dark',
    'theme/baseline-default'
];

designPoints.primaries.forEach(primary => {
    designPoints.secondaries.forEach(secondary => {
        designPoints.darkLight.forEach(darkLight => {
            mix.sass('resources/sass/theme/'+darkLight+primary+'-'+secondary+'.scss', 'public/css', mdcOptions);
        });
    });
});

entries.forEach(entry => {
    mix.sass('resources/sass/'+entry+'.scss', 'public/css', mdcOptions);
});

mix.js('resources/js/mdc.js', 'public/js').sourceMaps();
