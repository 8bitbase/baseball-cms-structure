<!doctype html>
<html>
    <?= $this->partial('partials/head') ?>
    <?= $this->partial('partials/css') ?>
    <body>
        <?= $this->partial('partials/header') ?>
        <!-- End Banner quảng cáo 2 bên-->
        <!--Start header -->
        <?= $this->partial('partials/navigate') ?>
        <!--End header -->
        <!--Start main-content -->
        <?= $this->getContent() ?>
        <!--End main-content -->
        <!--Start footer -->
        <?= $this->partial('partials/foot') ?>
        <!--End footer -->
        <?= $this->partial('partials/js') ?>
    </body>
</html>