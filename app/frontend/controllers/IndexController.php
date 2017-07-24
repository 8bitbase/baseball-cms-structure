<?php

/**
 * IndexController
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

namespace Lcd\App\Frontend\Controllers;

use \Lcd\App\Frontend\Controllers\BaseController;

class IndexController extends BaseController
{

    /**
     * @method indexAction
     * @auth:  lcdung
     * @return mix
     */
    public function indexAction()
    {
        $this->dispatcher->forward(array(
            'controller' => 'home',
            'action' => 'index',
        ));
    }

    /**
     * @method notfoundAction
     * @auth:  lcdung
     * @return mix
     */
    public function notfoundAction()
    {
       $this->view->setVars(array(
            'layout' => 'layouts/blank',
        ));

        $this->view->pick('pages/common/error404');
    }

    /**
     * @method formSubmitAction
     * @auth:  lcdung
     * @return mix
     */
    public function formSubmitAction()
    {
        $detect = new \Detection\MobileDetect();
        $device = 'desktop';
        if ($detect->isMobile()) {
            $device = 'mobile';
        } elseif ($detect->isTablet()) {
            $device = 'tablet';
        }

        $dataPost = $this->request->getPost();

        foreach ($dataPost as $key => $value) {
            $this->validator->add_rule($key, 'required', $this->_('validate'));
        }
        if ($this->validator->run($dataPost)) {
            return $this->response->redirect($this->request->getHTTPReferer());
        }
        $dataPost['ip'] = $this->request->getClientAddress();
        $dataPost['browser'] = $this->request->getUserAgent();
        $dataPost['device'] = $device;
        unset($dataPost['page']);

        $this->get_repository('FormsSubmit')->save($dataPost);

        
        $this->view->setVars(array(
            'layout' => 'layouts/blank',
        ));

        $this->view->pick('pages/common/success');
    }
}
