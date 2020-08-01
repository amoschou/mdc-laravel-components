<?php

namespace App\Helpers;

class Theme
{
    /**
     * The theme design points in the theme space.
     *
     * @var array
     */
    protected static $designPoints = [
        'primaries' => [
            'amethyst',
            'emerald',
            'ruby',
            'saphire'
        ],
        'secondaries' => [
            'azurite',
            'crocoite'
        ],
        'darkLight' => [
            '',
            'dark-'
        ]
    ];

    /**
     * Returns self::$designPoints
     *
     * @return array
     */
    public static function getDesignPoints() {
        return self::$designPoints;
    }

    /**
     * An object with primary and secondary attributes
     *
     * @return object
     */
    public static function generateRandomTheme() {
        $primary = self::getDesignPoints()['primaries'][-1 + random_int(1,count(self::getDesignPoints()['primaries']))];

        $secondary = self::getDesignPoints()['secondaries'][-1 + random_int(1,count(self::getDesignPoints()['secondaries']))];

        return (object) compact('primary', 'secondary');
    }

    /**
     * Returns the wrapper clss class given a theme, or null if the theme is not defined.
     *
     * @return string|null
     */
    public static function wrapperClass($theme) {
        return is_null($theme) ? NULL : "theme-{$theme->primary}-{$theme->secondary}";
    }
}
