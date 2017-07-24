<?php

/**
 * LangHelper
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

namespace Lcd\App\Helpers;

class UrlHelper
{
    const TYPE = array(
        'article' => 'tin',
        'news' => 'tin',
        'categoryNews' => 'tin-tuc',
        'categoryImage' => 'hinh-anh',
        'categoryVideo' => 'video',
    );

    public static function getUrl($slug, $id, $type = 'article')
    {
        $url = new \Phalcon\Mvc\Url();
        $url->setBaseUri('/');
        switch ($type) {
            case 'menu':
                if (!empty($slug['category'])) {
                    $uri = 'tin-tuc/' . $slug['category']['slug'];
                } else {
                    return $slug['url'];
                }
                break;
            case 'article':
                $uri = self::TYPE[$type] . '/' . $slug . '-' . $id . '.html';
                break;
            case 'news':
                $uri = self::TYPE[$type] . '/' . $slug . '-' . $id . '.html';
                break;
            default:
                $uri = $slug;
                if ($slug != self::TYPE[$type]) {
                    $uri = self::TYPE[$type] . '/' . $slug;
                }
                break;
        }
        $result = $url->get($uri);
        return $result;
    }
}
