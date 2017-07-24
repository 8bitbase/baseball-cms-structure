<div class="iframe-video-top">
    <?= $data['page']['video'] ?>
    <input id="du_an_page" readonly="readonly" type="hidden" value="<?= $data['page']['name']; ?>"/>
</div>
<div class="site-container">
    <div class="site-inner">
        <div class="content-sidebar-wrap">
            <main class="content">
                <div class="top-slider" style="background-image: url(<?= $data['page']['image'] ?>);">
                    <div class="top-slider-overlay">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-4 col-md-4">
                                <div class="lp-pom-box-527">
                                    <div class="lplh-29 blink">
                                        Liên hệ đăng ký tư vấn trong vòng 5 phút!
                                    </div>
                                    <div class="gf_browser_unknown gform_wrapper" id="gform_wrapper_1">
                                        <?= $this->partial('partials/page.form_vertical_top') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= \Lcd\App\Helpers\FormHelper::genFormSalePage($data['page']['content']) ?>
                <div class="box-wins box-wins-2 no-top" data-anchor="#vi-tri" id="vi-tri">
                    <div class="sidebar">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="lplh-38">
                                        TIN TỨC CẬP NHẬT VỀ DỰ ÁN
                                    </div>
                                </div>
                                <div id=" promotedposts">
                                    <div style="clear:left;">
                                    </div>
                                    <?php
                                    if(!empty($data['articles'])):
                                        foreach ($data['articles'] as $key =>
                                    $item):
                                            $url = ".html";
                                    ?>
                                    <article class="col-sm-4">
                                        <div class="cover" style="background-image: url(<?= $item['image_thumbs'] ?>);">
                                            <a target="_blank" href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'news') ?>">
                                            </a>
                                        </div>
                                        <header>
                                            <h3>
                                                <a target="_blank" href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'news') ?>">
                                                    <?= $item['title']; ?>
                                                </a>
                                            </h3>
                                            <time datetime="<?= date('Y/m/D H:i:s', strtotime($item['create_time'])); ?>" itemprop="datePublished">
                                                <?= date("d/m/Y", strtotime($item['create_time'])); ?>
                                            </time>
                                        </header>
                                    </article>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>