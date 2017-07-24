<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="javascript:void(0);"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('site-setting') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('site-setting') ?>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('view-setting') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <form action="<?= $this->url->get('options/saveread') ?>" method="post" class="form-horizontal" id="saveread-options-form">
            <div class="form-group">
                <label for="page_default_number" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.page_default_number') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="page_default_number" value="<?php if (!empty($options)) { ?><?= $options['page_default_number']['op_value'] ?><?php } ?>"
                           class="form-control" id="page_default_number" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.page_default_number') ?>">
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.page_default_number') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="page_article_number" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.page_article_number') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="page_article_number" value="<?php if (!empty($options)) { ?><?= $options['page_article_number']['op_value'] ?><?php } ?>"
                           class="form-control" id="page_article_number" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.page_article_number') ?>">
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.page_article_number') ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" id="read-options-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                </div>
            </div>
        </form>
    </div>
</div>