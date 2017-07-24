<?php

/**
 * System Configuration - Production Environment
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

return array(
    'path' => array(
        'articles' => ROOT_PATH . '/public/upload/articles/',
        'banners' => ROOT_PATH . '/public/upload/banners/',
        'other' => ROOT_PATH . '/public/upload/other/',
        'sale' => ROOT_PATH . '/public/upload/sale/',
    ),
    'link' => array(
        'articles' => '/upload/articles/',
        'banners' => '/upload/banners/',
        'other' => '/upload/other/',
        'sale' => '/upload/sale/',
    ),
    'imageSize' => array(
        'thumbs' => array(
            'width' => 250,
            'height' => 250
        ),
        'normal' => array(
            'width' => 500,
            'height' => 500
        ),
        'big' => array(
            'width' => 1000,
            'height' => 1000
        )
    )
);
