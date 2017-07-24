<?php

/**
 * PhalBaseFilter Phalcon expansion filter
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

namespace Lcd\App\Core;

use \Phalcon\Filter;

class PhalBaseFilter extends Filter
{

    /**
     * Customize the initialization function
     * @auth:  lcdung
     * @return
     */
    public function init()
    {
        // Add filter remove_xss
        $this->add('remove_xss', function ($value) {
            return \Lcd\App\Libs\Filter::remove_xss($value);
        });
    }
}
