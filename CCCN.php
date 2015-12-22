<?php

namespace MarcW\CCCN;

final class CCCN
{
    public static $countries;

    /**
     * Returns the country code of a country given it's name, in any language
     */
    public static function getCountryCode($name)
    {
        if (null === static::$countries) {
            static::$countries = require_once __DIR__.DIRECTORY_SEPARATOR.'countries.aggregate.php';
        }

        $name = mb_strtolower($name);

        if (isset(self::$countries[$name])) {
            return self::$countries[$name];
        }
    }
}
