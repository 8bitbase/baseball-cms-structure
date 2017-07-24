<?php

/**
 * Config routes
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0

 *
 * Example: support regular
 * $key => array("controller" => "", "action" => "")
 */

return array(
    // Backend routes rule
    '/backend/:controller/:action/:params' => array(
        'module' => 'backend',
        'controller'=>1,
        'action'=>2
    ),

    // dashboard
    '/admin' => array(
        'module' => 'backend',
        'controller' => 'index',
        'action' => 'index'
    ),

    // Frontend routes rule
    '/frontend/:controller/:action/:params' => array(
        'module' => 'frontend',
        'controller'=>1,
        'action'=>2
    ),

    // Home
    '/' => array(
        'module' => 'frontend',
        'controller' => 'home',
        'action' => 'index'
    ),

    // Page not found - 404
    '/404' => array(
        'module' => 'frontend',
        'controller' => 'index',
        'action' => 'notfound',
    ),
);
