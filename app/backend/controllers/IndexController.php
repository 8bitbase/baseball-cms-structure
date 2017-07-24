<?php

/**
 *
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */
namespace Lcd\App\Backend\Controllers;

use \Lcd\App\Backend\Controllers\BaseController;

class IndexController extends BaseController
{
    /**
     * @method indexAction
     * @auth:  lcdung
     * @return mix
     */
    public function indexAction()
    {
        return $this->redirect('dashboard/index');
    }

    /**
     * @method notfoundAction
     * @auth:  lcdung
     * @return mix
     */
    public function notfoundAction()
    {
        return $this->response->setHeader('status', '404 Not Found');
    }

    /**
     * @method nopermissionAction
     * @auth:  lcdung
     * @return mix
     */
    public function nopermissionAction()
    {
        $this->view->setVars(array(
            'message' => 'NO PERMISSION',
        ));
        return $this->view->pick('errors/p500');
    }
}
