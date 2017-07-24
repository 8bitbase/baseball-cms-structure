<?php 
/**
 * WidgetHelper
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

namespace Lcd\App\Helpers;

use \Lcd\App\Frontend\Repositories\RepositoryFactory;

class WidgetHelper
{

    /**
     * @method checkWidget
     * @auth   hltphat
     * @param Strng $controllerName / String $actionName
     * @return bool
     */
    public static function checkWidget($controller, $action)
    {   
        $check = RepositoryFactory::get_repository('WidgetPage')
        ->check_widget($controller, $action);
        if (!empty($check)) {
            return true;
        }
        return true;// false;
    }
}
