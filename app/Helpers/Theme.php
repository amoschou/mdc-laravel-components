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
        'modes' => [
            'light',
            'dark'
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
     * An object with primary, secondary and mode attributes
     *
     * @return object
     */
    public static function generateRandomTheme() {
        $primary = self::getDesignPoints()['primaries'][-1 + random_int(1,count(self::getDesignPoints()['primaries']))];

        $secondary = self::getDesignPoints()['secondaries'][-1 + random_int(1,count(self::getDesignPoints()['secondaries']))];

        $mode = self::getDesignPoints()['modes'][-1 + random_int(1,count(self::getDesignPoints()['modes']))];

        return (object) compact('primary', 'secondary', 'mode');
    }

    /**
     * Returns the wrapper clss class given a theme.
     *
     * @return string
     */
    public static function wrapperClass($theme) {
        return "theme-{$theme->mode}-{$theme->primary}-{$theme->secondary}";
    }
}
