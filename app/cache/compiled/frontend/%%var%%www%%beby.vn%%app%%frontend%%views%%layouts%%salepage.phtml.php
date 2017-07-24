<!doctype html>
<html lang="vi">
    <?= $this->partial('partials/page.header') ?>
    <body class="home page page-id-218 page-template page-template-includes page-template-pages-fb page-template-includespages-fb-php header-full-width full-width-content dmf-home" itemscope="" itemtype="http://schema.org/WebPage">
        <?= $this->partial('partials/page.navigate') ?>
        <!--End header -->
        <!--Start main-content -->
        <?= $this->getContent() ?>
        <!--End main-content -->
        <!--Start footer -->
        <?= $this->partial('partials/page.footer') ?>
    </body>
</html>