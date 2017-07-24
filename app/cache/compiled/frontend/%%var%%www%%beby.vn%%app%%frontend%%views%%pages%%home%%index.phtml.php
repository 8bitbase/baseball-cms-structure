<div class="main-content container">
    <!--Start content left -->
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-9 content">
                <?php if (!empty($articlesTopFirst)) { ?>
                <div class="row">
                    <div class="col-md-6 news-main">
                        <div class="row">
                            <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesTopFirst['slug'] . '', '' . $articlesTopFirst['id']) ?>">
                                <img src="<?= $articlesTopFirst['image'] ?>" alt="hình" width="100%"/>
                            </a>
                            <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesTopFirst['slug'] . '', '' . $articlesTopFirst['id']) ?>">
                                <h3><?= $articlesTopFirst['title'] ?></h3>
                            </a>
                            <p><?= $articlesTopFirst['introduce'] ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 title-mobile">
                        <div class="row">
                            <?php foreach ($articlesTopSecond as $article) { ?>
                            <div class="col-md-12 margin-bottom">
                                <div class="row">
                                    <div class="col-md-4 col-xs-4">
                                        <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>">
                                            <img src="<?= $article['image'] ?>" alt="hình" width="100%"/>
                                        </a>
                                    </div>
                                        <p class="col-md-8 col-xs-8 padding-left0"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></p>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="col-md-12 margin-bottom">
                                <ul class="ulpadding-left15">
                                <?php foreach ($articlesTopThird as $article) { ?>
                                    <li class="bottom10"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Tin tức quảng cáo loại 1 -->
                <?php if (!empty($advertisesHCOne_one['html'])) { ?>
                <div class="row margin-bottom padding100100 border-bottom border-top">
                    <?= $advertisesHCOne_one['html'] ?>
                </div>
                <?php } ?>
                <!--End Tin tức quảng cáo loại 1 -->
                <!-- Tab Tin tức | video | hình ảnh-->
                <!-- Nav tabs -->
                <?php if (!empty($articlesType)) { ?>
                <div class="row margin-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php foreach ($articlesType as $index => $category) { ?>
                            <li role="presentation" class="<?php if ($index == 0) { ?> active <?php } ?>"><a href="#tab<?= $category['slug'] ?>" aria-controls="tab<?= $category['slug'] ?>" role="tab" data-toggle="tab"><?= $category['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                    <?php foreach ($articlesType as $index => $category) { ?>
                        <?php if ($category['id'] == 1) { ?>
                            <?php $router = 'news'; ?>
                        <?php } elseif ($category['id'] == 2) { ?>
                            <?php $router = 'video'; ?>
                        <?php } else { ?>
                            <?php $router = 'image'; ?>
                        <?php } ?>
                        <div role="tabpanel" class="tab-pane <?php if ($index == 0) { ?> active <?php } ?>" id="tab<?= $category['slug'] ?>">
                            <?php foreach ($category['articles'] as $article) { ?>
                                <div class="col-md-4 news-tab" style="width: 242.5px; height: 245px;">
                                    <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id'] . '', '' . $router) ?>">
                                        <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" width="100%" style="max-width: 212px; max-height: 133px;" />
                                    </a>
                                    <p class="title"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id'] . '', '' . $router) ?>"><?= $article['title'] ?></a></p>
                                    <p><?= $article['create_time'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <?php } ?>
                <!-- End tab -->
                <!-- Start tin tức quảng cáo loại 2 -->
                <?php if (!empty($advertisesHCTwo['html'])) { ?>
                    <div class="row margin-bottom padding100100 border-bottom border-top">
                        <?= $advertisesHCTwo['html'] ?>
                    </div>
                <?php } ?>
                <!-- End Tin tức quảng cáo loại 2 -->
                <!-- Catelory News danh mục tin tức -->
                <?php if (!empty($articlesCategoriesOnelOne) && !empty($articlesCategoriesOnelTwo)) { ?>
                <div class="row margin-bottom catelory_news">
                    <div class="row">
                        <!-- block 1 -->
                        <div class="col-md-6 margin-bottom-mobile-10">
                            <ul class="nav nav-tabs" role="tablist">
                            <?php foreach ($articlesCategoriesOnelOne as $index => $category) { ?>
                                <li role="presentation" class="<?php if ($index == 0) { ?> active <?php } ?>"><a href="#block1_<?= $category['id'] ?>" aria-controls="block1_<?= $category['id'] ?>" role="tab" data-toggle="tab"><?= $category['name'] ?></a></li>
                            <?php } ?>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                            <?php foreach ($articlesCategoriesOnelOne as $index => $category) { ?>
                                <div role="tabpanel" class="tab-pane <?php if ($index == 0) { ?> active <?php } ?>" id="block1_<?= $category['id'] ?>">
                                    <div class="col-md-12 news-tab">
                                        <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>">
                                            <img src="<?= $category['articles'][0]['image'] ?>" alt="<?= $category['articles'][0]['title'] ?>" width="100%" style="max-width: 319px; max-height: 200px;" />
                                        </a>
                                        <p class="title"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $category['articles'][0]['title'] ?></a></p>
                                        <ul class="ulpadding-left15">
                                        <?php foreach ($category['articles'] as $index => $article) { ?>
                                            <?php if ($index != 0) { ?>
                                                <li><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></li>
                                            <?php } ?>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <!-- End block 1 -->
                        <!-- block 2 -->
                        <div class="col-md-6 margin-bottom-mobile-10">
                            <ul class="nav nav-tabs" role="tablist">
                            <?php foreach ($articlesCategoriesOnelTwo as $index => $category) { ?>
                                <li role="presentation" class="<?php if ($index == 0) { ?> active <?php } ?>"><a href="#block2_<?= $category['id'] ?>" aria-controls="block2_<?= $category['id'] ?>" role="tab" data-toggle="tab"><?= $category['name'] ?></a></li>
                            <?php } ?>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                            <?php foreach ($articlesCategoriesOnelTwo as $index => $category) { ?>
                                <div role="tabpanel" class="tab-pane <?php if ($index == 0) { ?> active <?php } ?>" id="block2_<?= $category['id'] ?>">
                                    <div class="col-md-12 news-tab">
                                        <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>">
                                            <img src="<?= $category['articles'][0]['image'] ?>" alt="<?= $category['articles'][0]['title'] ?>" width="100%" style="max-width: 319px; max-height: 200px;" />
                                        </a>
                                        <p class="title"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $category['articles'][0]['title'] ?></a></p>
                                        <ul class="ulpadding-left15">
                                        <?php foreach ($category['articles'] as $index => $article) { ?>
                                            <?php if ($index != 0) { ?>
                                                <li><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></li>
                                            <?php } ?>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <!-- End block 2 -->
                    </div>
                </div>
                <?php } ?>
                <!-- End Catelory News danh mục tin tức -->
                <!-- Start tin tức quảng cáo loại 1 -->
                <?php if (!empty($advertisesHCOne_two['html'])) { ?>
                <div class="row margin-bottom padding100100 border-bottom border-top">
                    <?= $advertisesHCOne_two['html'] ?>
                </div>
                <?php } ?>
                <!--End Tin tức quảng cáo loại 1 -->
                <!-- Sidershow -->
                <?php if (!empty($articlesCategoryImage)) { ?>
                <div class="row margin-bottom">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php foreach ($articlesCategoryImage as $index => $article) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?= $index ?>" <?php if ($index == 0) { ?> class="active" <?php } ?>></li>
                            <?php } ?>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php foreach ($articlesCategoryImage as $index => $article) { ?>
                            <div class="item <?php if ($index == 0) { ?> active <?php } ?>">
                                <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" width="100%">
                                <div class="carousel-caption">
                                    <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id'] . '', 'article') ?>">
                                        <?= $article['title'] ?>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <?php } ?>
                <!-- End Sidershow -->
                <!-- Start tin tức quảng cáo loại 1 -->
                <?php if (!empty($advertisesHCOne_three['html'])) { ?>
                <div class="row margin-bottom padding100100 border-bottom border-top">
                    <?= $advertisesHCOne_three['html'] ?>
                </div>
                <?php } ?>
                <!--End Tin tức quảng cáo loại 1 -->
                <!-- Catelory News danh mục tin tức 2-->
                <?php if (!empty($articlesCategoriesTwolOne) && !empty($articlesCategoriesTwolTwo)) { ?>
                <div class="row margin-bottom catelory_news_2">
                    <div class="row">
                        <!-- block 1 -->
                        <div class="col-md-6 margin-bottom-mobile-10">
                            <ul class="nav nav-tabs" role="tablist">
                            <?php foreach ($articlesCategoriesTwolOne as $index => $category) { ?>
                                <li role="presentation" class="<?php if ($index == 0) { ?> active <?php } ?>"><a href="#block1_<?= $category['id'] ?>" aria-controls="block1_<?= $category['id'] ?>" role="tab" data-toggle="tab"><?= $category['name'] ?></a></li>
                            <?php } ?>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                            <?php foreach ($articlesCategoriesTwolOne as $index => $category) { ?>
                                <div role="tabpanel" class="tab-pane <?php if ($index == 0) { ?> active <?php } ?>" id="block1_<?= $category['id'] ?>">
                                    <div class="col-md-12 news-tab">
                                        <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>">
                                            <img src="<?= $category['articles'][0]['image'] ?>" alt="<?= $category['articles'][0]['title'] ?>" width="100%" style="max-width: 319px; max-height: 200px;" />
                                        </a>
                                        <p class="title"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $category['articles'][0]['title'] ?></a></p>
                                        <ul class="ulpadding-left15">
                                        <?php foreach ($category['articles'] as $index => $article) { ?>
                                            <?php if ($index != 0) { ?>
                                                <li><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></li>
                                            <?php } ?>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <!-- End block 1 -->
                        <!-- block 2 -->
                        <div class="col-md-6 margin-bottom-mobile-10">
                            <ul class="nav nav-tabs" role="tablist">
                            <?php foreach ($articlesCategoriesTwolTwo as $index => $category) { ?>
                                <li role="presentation" class="<?php if ($index == 0) { ?> active <?php } ?>"><a href="#block2_<?= $category['id'] ?>" aria-controls="block2_<?= $category['id'] ?>" role="tab" data-toggle="tab"><?= $category['name'] ?></a></li>
                            <?php } ?>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                            <?php foreach ($articlesCategoriesTwolTwo as $index => $category) { ?>
                                <div role="tabpanel" class="tab-pane <?php if ($index == 0) { ?> active <?php } ?>" id="block2_<?= $category['id'] ?>">
                                    <div class="col-md-12 news-tab">
                                        <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>">
                                            <img src="<?= $category['articles'][0]['image'] ?>" alt="<?= $category['articles'][0]['title'] ?>" width="100%" style="max-width: 319px; max-height: 200px;" />
                                        </a>
                                        <p class="title"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $category['articles'][0]['title'] ?></a></p>
                                        <ul class="ulpadding-left15">
                                        <?php foreach ($category['articles'] as $index => $article) { ?>
                                            <?php if ($index != 0) { ?>
                                                <li><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></li>
                                            <?php } ?>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <!-- End block 2 -->
                    </div>
                </div>
                <?php } ?>
                <!-- End Catelory News danh mục tin tức 2-->
                <!-- Tin mới -->
                <?php if (!empty($articlesNew)) { ?>
                <div class="row">
                    <?php foreach ($articlesNew as $article) { ?>
                    <div class="col-md-12 margin-bottom padding0 border-bottom">
                        <div class="col-md-3 col-xs-12 padding0">
                            <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>">
                                <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" width="100%">
                            </a>
                        </div>
                        <p class="col-md-9 col-xs-12 title title-mobile"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></p>
                        <p class="col-md-9 col-xs-12 padding-mobile-0"><?= $article['create_time'] ?></p>
                        <p class="col-md-9 col-xs-12 padding-mobile-0"><?= $article['introduce'] ?></p>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!-- End tin mới -->
            </div>
            <!--End content left -->
            <!--Start content right -->
            <aside class="col-md-3 padding-right0 padding-mobileleft0">
                <?php if (!empty($bannerHROne)) { ?>
                <div class="margin-bottom row">
                    <?php if (!empty($bannerHROne['banner'])) { ?>
                        <div class="banner col-md-12">
                            <a href="<?= $bannerHROne['url'] ?>">
                                <img src="<?= $bannerHROne['banner'] ?>" alt="<?= $bannerHROne['name'] ?>" width="100%"/>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="banner col-md-12">
                            <?= $bannerHROne['html'] ?>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!--Start danh mục right 1 -->
                <?php if (!empty($articlesCategoryOne)) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="yellow"><?= $articlesCategoryOne['name'] ?></h4>
                    </div>
                </div>
                <div class="catelory-right row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 padding0">
                                    <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesCategoryOnefirst['slug'] . '', '' . $articlesCategoryOnefirst['id']) ?>">
                                        <img src="<?= $articlesCategoryOnefirst['image'] ?>" alt="<?= $articlesCategoryOnefirst['title'] ?>" width="100%">
                                    </a>
                                </div>
                                <p class="col-md-8 col-xs-12 title-nopadding title-mobile"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesCategoryOnefirst['slug'] . '', '' . $articlesCategoryOnefirst['id']) ?>"><?= $articlesCategoryOnefirst['title'] ?></a></p>
                                <p class="col-md-12 col-xs-12 margin0 padding0 padding-bottom10"><?= $articlesCategoryOnefirst['introduce'] ?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <ul class="ulpadding-left15">
                                    <?php foreach ($articlesCategoryOne['articles'] as $article) { ?>
                                    <li class="bottom10"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--End danh mục right 1-->
                <!--Start Banner home right 2-->
                <?php if (!empty($bannerHRTwo)) { ?>
                <div class="margin-bottom row">
                    <?php if (!empty($bannerHRTwo['banner'])) { ?>
                        <div class="banner col-md-12">
                            <a href="<?= $bannerHRTwo['url'] ?>">
                                <img src="<?= $bannerHRTwo['banner'] ?>" alt="<?= $bannerHRTwo['name'] ?>" width="100%"/>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="banner col-md-12">
                            <?= $bannerHRTwo['html'] ?>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!--End Banner home right 2-->
                <!--Start Banner home right 3-->
                <?php if (!empty($bannerHRThree)) { ?>
                <div class="margin-bottom row">
                    <?php if (!empty($bannerHRThree['banner'])) { ?>
                        <div class="banner col-md-12">
                            <a href="<?= $bannerHRThree['url'] ?>">
                                <img src="<?= $bannerHRThree['banner'] ?>" alt="<?= $bannerHRThree['name'] ?>" width="100%"/>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="banner col-md-12">
                            <?= $bannerHRThree['html'] ?>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!--End Banner home right 3-->
                <!--Start danh mục right 2-->
                <?php if (!empty($articlesCategoryTwo)) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="yellow"><?= $articlesCategoryTwo['name'] ?></h4>
                    </div>
                </div>
                <div class="catelory-right row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 padding0">
                                    <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesCategoryTwofirst['slug'] . '', '' . $articlesCategoryTwofirst['id']) ?>">
                                        <img src="<?= $articlesCategoryTwofirst['image'] ?>" alt="<?= $articlesCategoryTwofirst['title'] ?>" width="100%">
                                    </a>
                                </div>
                                <p class="col-md-8 col-xs-12 title-nopadding title-mobile"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesCategoryTwofirst['slug'] . '', '' . $articlesCategoryTwofirst['id']) ?>"><?= $articlesCategoryTwofirst['title'] ?></a></p>
                                <p class="col-md-12 col-xs-12 margin0 padding0 padding-bottom10"><?= $articlesCategoryTwofirst['introduce'] ?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <ul class="ulpadding-left15">
                                    <?php foreach ($articlesCategoryTwo['articles'] as $article) { ?>
                                    <li class="bottom10"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--End danh mục right 2-->
                <!--Start banner home right 4-->
                <?php if (!empty($bannerHRFour)) { ?>
                <div class="margin-bottom row">
                    <?php if (!empty($bannerHRFour['banner'])) { ?>
                        <div class="banner col-md-12">
                            <a href="<?= $bannerHRFour['url'] ?>">
                                <img src="<?= $bannerHRFour['banner'] ?>" alt="<?= $bannerHRFour['name'] ?>" width="100%"/>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="banner col-md-12">
                            <?= $bannerHRFour['html'] ?>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!--End banner home right 4-->
                <?php if (!empty($bannerHRFive)) { ?>
                <div class="margin-bottom row">
                    <?php if (!empty($bannerHRFive['banner'])) { ?>
                        <div class="banner col-md-12">
                            <a href="<?= $bannerHRFive['url'] ?>">
                                <img src="<?= $bannerHRFive['banner'] ?>" alt="<?= $bannerHRFive['name'] ?>" width="100%"/>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="banner col-md-12">
                            <?= $bannerHRFive['html'] ?>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!--End banner home right 4-->
                <!--Start tin nổi bất-->
                <?php if (!empty($articlesMark)) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="yellow">Tin nổi bật</h4>
                    </div>
                </div>
                <div class="news-nb row">
                    <?php foreach ($articlesMark as $article) { ?>
                    <div class="col-md-12">
                        <div class="col-md-12 margin-bottom">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 padding0">
                                    <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>">
                                        <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" width="100%">
                                    </a>
                                </div>
                                <p class="col-md-8 col-xs-12 title-mobile"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!--End tin nổi bất-->
                <!--Start danh mục right 3-->
                <?php if (!empty($articlesCategoryThree)) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="yellow"><?= $articlesCategoryThree['name'] ?></h4>
                    </div>
                </div>
                <div class="catelory-right row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 padding0">
                                    <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesCategoryThreefirst['slug'] . '', '' . $articlesCategoryThreefirst['id']) ?>">
                                        <img src="<?= $articlesCategoryThreefirst['image'] ?>" alt="<?= $articlesCategoryThreefirst['title'] ?>" width="100%">
                                    </a>
                                </div>
                                <p class="col-md-8 col-xs-12 title-nopadding title-mobile"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesCategoryThreefirst['slug'] . '', '' . $articlesCategoryThreefirst['id']) ?>"><?= $articlesCategoryThreefirst['title'] ?></a></p>
                                <p class="col-md-12 col-xs-12 margin0 padding0 padding-bottom10"><?= $articlesCategoryThreefirst['introduce'] ?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <ul class="ulpadding-left15">
                                    <?php foreach ($articlesCategoryThree['articles'] as $article) { ?>
                                    <li class="bottom10"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--End danh mục right 3-->
                <!--Start danh mục right 4-->
                <?php if (!empty($articlesCategoryFour)) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="yellow"><?= $articlesCategoryFour['name'] ?></h4>
                    </div>
                </div>
                <div class="catelory-right row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 padding0">
                                    <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesCategoryFourfirst['slug'] . '', '' . $article['id']) ?>">
                                        <img src="<?= $articlesCategoryFourfirst['image'] ?>" alt="<?= $articlesCategoryFourfirst['title'] ?>" width="100%">
                                    </a>
                                </div>
                                <p class="col-md-8 col-xs-12 title-nopadding title-mobile"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($articlesCategoryFourfirst['slug'] . '', '' . $article['id']) ?>"><?= $articlesCategoryFourfirst['title'] ?></a></p>
                                <p class="col-md-12 col-xs-12 margin0 padding0 padding-bottom10"><?= $articlesCategoryFourfirst['introduce'] ?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <ul class="ulpadding-left15">
                                    <?php foreach ($articlesCategoryFour['articles'] as $article) { ?>
                                    <li class="bottom10"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($article['slug'] . '', '' . $article['id']) ?>"><?= $article['title'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--End danh mục right 4-->
                <?php if (!empty($bannerHRSix)) { ?>
                <div class="margin-bottom row">
                    <?php if (!empty($bannerHRSix['banner'])) { ?>
                        <div class="banner col-md-12">
                            <a href="<?= $bannerHRSix['url'] ?>">
                                <img src="<?= $bannerHRSix['banner'] ?>" alt="<?= $bannerHRSix['name'] ?>" width="100%"/>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="banner col-md-12">
                            <?= $bannerHRSix['html'] ?>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </aside>
            <!--End content right -->
        </div>
    </div>
</div>
<!-- Start tin tức quảng cáo loại 3 -->
<?php if (!empty($advertisesHCThree)) { ?>
    <?= $advertisesHCThree['html'] ?>
<?php } ?>
<!-- End Tin tức quảng cáo loại 3 -->
<!-- Start tin tức quảng cáo loại 4 -->
<?php if (!empty($advertisesHCFour)) { ?>
    <?= $advertisesHCFour['html'] ?>
<?php } ?>
<!-- End Tin tức quảng cáo loại 4 -->