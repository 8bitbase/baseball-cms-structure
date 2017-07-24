<?php

/**
 * BaseController
 * @category ProjectShare
 * @copyright Copyright (c) PhalconFW
 * @license GNU General Public License 2.0
 */

namespace Lcd\App\Frontend\Controllers;

use \Lcd\App\Core\PhalBaseController;
use \Lcd\App\Frontend\Repositories\RepositoryFactory;

class BaseController extends PhalBaseController
{
    public function initialize()
    {
        parent::initialize();
        $this->set_common_vars();
    }

    /**
     * @method set_common_vars
     * @auth:  lcdung
     */
    public function set_common_vars()
    {
        $option = $this->get_repository('Options');
        $domain = rtrim($option->get_option('site_url'), '/');
        $url = $domain . '/' . $this->router->getRewriteUri();
        $urlCDN = $option->get_option('cdn_url');
        $this->url->setStaticBaseUri($urlCDN);

        $this->view->setVars(array(
            'siteName' => $option->get_option('site_name'),
            'siteTitle' => $option->get_option('site_title'),
            'siteLogo' => $option->get_option('site_logo'),
            'siteIcon' => $option->get_option('site_icon'),
            'siteUrl' => $domain,
            'fullUrl' => $url,
            'siteDescription' => $option->get_option('site_description'),
            'siteKeywords' => $option->get_option('site_keywords'),
            'menuList' => $this->get_repository('Common')->get_menu_list(),
            'assetsVersion' => strtotime(date('Y-m-d H', time()) . ":00:00"),
            'layout' => 'layouts/template',
        ));
    }

    /**
     * @method get_repository
     * @auth:  lcdung
     * @param  $repositoryName
     * @return mix
     */
    protected function get_repository($repositoryName)
    {
        return RepositoryFactory::get_repository($repositoryName);
    }

    /**
     * @method redirect
     * @auth:  lcdung
     * @param  $url
     * @return mix
     */
    protected function redirect($url = null)
    {
        empty($url) && $url = $this->request->getHeader('HTTP_REFERER');
        $this->response->redirect($url);
    }

    /**
     * @method widgetMenuAction
     * @auth   ttdat
     * @return [type] [description]
     */
    public function widgetMenu($id)
    {
        $menu = $this->get_repository('Common')->get_widgetMenu($id);
        return $menu;
    }

    /**
     * @method widgetArticlesAction
     * @auth   ttdat
     * @param  aray   $optionArticle
     * @return array
     */
    public function widgetArticles(array $optionArticle)
    {
        $articles = $this->get_repository('Common')->get_widgetArticles($optionArticle);
        return $articles;
    }

    /**
     * @method widgetArticleAction
     * @auth   ttdat
     * @param  int $id
     * @return array
     */
    public function widgetArticle($id, $ext = null)
    {
        $article = $this->get_repository('Common')->get_widgetArticle($id, $ext);
        return $article;
    }

    /**
     * @method widgetCategoriesAction
     * @auth   ttdat
     * @param  array  $optionCategory
     * @return array
     */
    public function widgetCategories(array $optionCategory)
    {
        $categories = $this->get_repository('Common')->get_widgetCategories($optionCategory);
        return $categories;
    }

    /**
     * @method widgetCategoryAction
     * @auth   ttdat
     * @param  int $id
     * @return array
     */
    public function widgetCategory($id)
    {
        $category = $this->get_repository('Common')->get_widgetCategory($id);
        return $category;
    }

    /**
     * @method widgetArticlesByCategoriesAction
     * @auth   ttdat
     * @param  array  $optionCategory option for categories
     * @param  array  $optionArticle  option for articles
     * @return array
     */
    public function widgetArticlesByCategories(array $optionCategory, array $optionArticle)
    {
        $articles = $this->get_repository('Common')->get_widgetArticlesByCategories($optionCategory, $optionArticle);
        return $articles;
    }

    /**
     * @method widgetArticlesByIdCategoryAction
     * @auth   ttdat
     * @param  array  $optionArticle
     * @return array
     */
    public function widgetArticlesByIdCategory(array $optionArticle)
    {
        $articles = $this->get_repository('Common')->get_widgetArticlesByIdCategory($optionArticle);
        return $articles;
    }

    /**
     * @method widgetArticlesBySlugAction
     * @auth   ttdat
     * @param  array  $optionArticle
     * @return array
     */
    public function widgetArticlesBySlug(array $optionArticle)
    {
        $articles = $this->get_repository('Common')->get_widgetArticlesBySlug($optionArticle);
        return $articles;
    }

    public function widgetArticlesByTag(array $optionArticle)
    {
        $articles = $this->get_repository('Common')->get_widgetArticlesByTag($optionArticle);
        return $articles;
    }

    /**
     * @method
     * @auth   ttdat
     * @param  array  $optionAdvertise
     * @return array
     */
    public function widgetAdvertise(array $optionAdvertise)
    {
        $advertise = $this->get_repository('Common')->get_widgetAdvertise($optionAdvertise);
        return $advertise;
    }
}
