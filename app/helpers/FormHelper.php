<?php

/**
 * FormHelper
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

namespace Lcd\App\Helpers;

use Phalcon\Mvc\View\Simple as SimpleView;
use \Lcd\App\Frontend\Repositories\RepositoryFactory as repository;

class FormHelper
{
    public static function genForm($content)
    {
        $repo = new repository();
        $view = new SimpleView();
        $view->setViewsDir(ROOT_PATH . '/app/frontend/views/');

        $forms = $repo->get_repository('Forms')->get_list_all();
        foreach ($forms as $key => $form) {
            $html = strip_tags($form['html'], '<input><div><label>');
            $genForm = $view->render("partials/gen_form", array('html' => $html));
            $content = str_replace($form['short_code'], $genForm, $content);
        }

        return $content;
    }

    public static function genFormSalePage($content)
    {
        $view = new SimpleView();
        $view->setViewsDir(ROOT_PATH . '/app/frontend/views/');

        $genFormVertical = $view->render("partials/page.form_vertical");
        $genFormHorizol = $view->render("partials/page.form_horizol");

        $content = str_replace('__form_ngang__', $genFormHorizol, $content);
        $content = str_replace('__form_doc__', $genFormVertical, $content);

        return $content;
    }
}
