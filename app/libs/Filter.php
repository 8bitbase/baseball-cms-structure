<?php

/**
 * Filter
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

namespace Lcd\App\Libs;

class Filter
{

    /**
     * Remove xss special characters
     * @param $str
     * @return mixed
     */
    public static function remove_xss($str)
    {
        $str = filter_var(trim($str), FILTER_SANITIZE_STRING);
        return $str;
    }
}
