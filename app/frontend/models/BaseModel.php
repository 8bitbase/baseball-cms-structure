<?php

/**
 * BaseModel
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

namespace Lcd\App\Frontend\Models;

use \Lcd\App\Core\PhalBaseModel;

class BaseModel extends PhalBaseModel
{

    /**
     * session user
     */
    protected $_user;

    public function initialize()
    {
        parent::initialize();
        $this->_user = $this->getDI()->get('session')->get('user');
    }
}
