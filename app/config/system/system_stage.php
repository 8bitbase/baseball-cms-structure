<?php

/**
 * System Configuration - Development Environment
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

return array(
    'app'      => array(
        // project name
        'app_name'       => 'LCDRealtor',

        // version number
        'version'        => '0.1',

        // Root namespace
        'root_namespace' => 'Lcd',

        // Foreground configuration
        'frontend'       => array(
            // The pathname of the module in the URL
            'module_pathinfo' => '/',

            // Controller path
            'controllers'     => ROOT_PATH . '/app/frontend/controllers/',

            // View path
            'views'           => ROOT_PATH . '/app/frontend/views/',

            // Whether to compile the template in real time
            'is_compiled'     => false,

            // Template path
            'compiled_path'   => ROOT_PATH . '/app/cache/compiled/frontend/',
        ),

        // Background configuration
        'backend'        => array(
            // The pathname of the module in the URL
            'module_pathinfo' => '/backend/',

            // Controller path
            'controllers'     => ROOT_PATH . '/app/backend/controllers/',

            // View path
            'views'           => ROOT_PATH . '/app/backend/views/',

            // Whether to compile the template in real time
            'is_compiled'     => false,

            // Template path
            'compiled_path'   => ROOT_PATH . '/app/cache/compiled/backend/',

            // Background static resource URL
            'assets_url'      => '/backend/',
        ),

        // Class library path
        'libs'           => ROOT_PATH . '/app/libs/',

        // Log root directory
        'log_path'       => ROOT_PATH . '/app/cache/logs/',

        // Cache path
        'cache_path'     => ROOT_PATH . '/app/cache/data/',

        'migrations'  => ROOT_PATH . '/app/migrations/',
    ),

    // Database configuration
    'database' => array(
        // Database connection information
        'db'     => array(
            'host'     => '139.162.3.186',
            'port'     => 3306,
            'username' => '',
            'password' => '',
            'dbname'   => '',
            'charset'  => 'utf8',
        ),

        // Table prefix
        'prefix' => '',
    ),
);
