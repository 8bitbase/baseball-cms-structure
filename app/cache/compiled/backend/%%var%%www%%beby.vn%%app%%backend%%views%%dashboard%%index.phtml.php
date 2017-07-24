<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.view') ?>
            </small>
        </h1>
    </div>
    <div class="col-sm-12 infobox-container">
        <div class="infobox infobox-green  ">
            <div class="infobox-icon">
                <i class="icon-book"></i>
            </div>
            <div class="infobox-data">
                <span class="infobox-data-number"><?= $articlesCount ?></span>
                <div class="infobox-content">
                    <a href="<?= $this->url->get('articles/index') ?>">
                        <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('total-article') ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="infobox infobox-blue">
            <div class="infobox-icon">
                <i class="icon-folder-open"></i>
            </div>
            <div class="infobox-data">
                <span class="infobox-data-number"><?= $categorysCount ?></span>
                <div class="infobox-content">
                    <a href="<?= $this->url->get('categorys/index') ?>">
                        <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('total-category') ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="infobox infobox-pink">
            <div class="infobox-icon">
                <i class="icon-pencil"></i>
            </div>
            <div class="infobox-data">
                <span class="infobox-data-number"><?= $tagsCount ?></span>
                <div class="infobox-content">
                    <a href="<?= $this->url->get('tags/index') ?>">
                        <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('total-tag') ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="infobox infobox-red">
            <div class="infobox-icon">
                <i class="icon-group"></i>
            </div>
            <div class="infobox-data">
                <span class="infobox-data-number"><?= $usersCount ?></span>
                <div class="infobox-content"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('total-user') ?></div>
            </div>
        </div>
    </div>
</div>