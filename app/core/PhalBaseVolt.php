<?php

/**
 * PhalBaseVolt Phalcon expansion volt
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

namespace Lcd\App\Core;

use \Phalcon\Mvc\View\Engine\Volt;

class PhalBaseVolt extends Volt
{

    /**
     * @method initFunction
     * @auth:  lcdung
     * @return
     */
    public function initFunction()
    {
        $compiler = $this->getCompiler();

        // Get paging url
        $compiler->addFunction('get_page_url', function ($resolvedArgs, $exprArgs) use ($compiler) {
            return '\Lcd\App\Helpers\PaginatorHelper::get_page_url(' . $resolvedArgs . ')';
        });

        // Get translation key word. Use: {{ trans('hi', 'value') }}
        $compiler->addFunction('trans', function ($resolvedArgs, $exprArgs) use ($compiler) {
            $val = explode(',', $resolvedArgs);
            if (!empty($val[1])) {
                return "\Lcd\App\Helpers\LangHelper::getTranslation()->_({$val[0]}), ' ', {$val[1]}";
            } else {
                return "\Lcd\App\Helpers\LangHelper::getTranslation()->_({$resolvedArgs})";
            }

        });

        // Get url 
        $compiler->addFunction('get_url', function ($resolvedArgs, $exprArgs) use ($compiler) {
            $val = explode(',', $resolvedArgs);
            if (!empty($val[2])) {
                return "\Lcd\App\Helpers\UrlHelper::getUrl(" . $val[0] . "', '" . $val[1] . "', '" . $val[2] . ")";
            } else {
                return "\Lcd\App\Helpers\UrlHelper::getUrl(" . $val[0] . "', '" . $val[1] . ")";
            }
        });

        // Gen form 
        $compiler->addFunction('gen_form', function ($resolvedArgs, $exprArgs) use ($compiler) {
            $val = explode(',', $resolvedArgs);
            return "\Lcd\App\Helpers\FormHelper::genForm(" . $val[0] . ")";
        });

        $compiler->addFunction('gen_form_sale_page', function ($resolvedArgs, $exprArgs) use ($compiler) {
            $val = explode(',', $resolvedArgs);
            return "\Lcd\App\Helpers\FormHelper::genFormSalePage(" . $val[0] . ")";
        });

        // Noted.
        $compiler->addFunction('str_repeat', 'str_repeat');

        // Noted.
        $compiler->addFunction('substr_count', 'substr_count');

        // Explode string
        $compiler->addFunction('explode', 'explode');

        // Noted.
        $compiler->addFunction('array_rand', 'array_rand');
    }
}
