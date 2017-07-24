<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('widget-page/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.widget-page-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('widget-page/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.widget-page-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('info-change') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#users" data-toggle="tab"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.widget-page') ?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" style="overflow: auto;">
                <form action="<?= $this->url->get('widget-page/pushlish') ?>" method="post" class="form-horizontal" id="save-access-form">
                    <table class="table tree-grid table-striped table-bordered table-condensed table-hover" id="test-table">
                        <thead>
                        <?php if (!empty($pages)) { ?>
                            <tr>
                                <th></th>
                                <?php foreach ($pages as $page) { ?>
                                    <th><?= $page->name ?></th>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        </thead>
                        <?php if (!empty($widgets)) { ?>
                            <tbody>
                                <?php foreach ($widgets as $widget) { ?>
                                    <tr>
                                        <th>
                                            <?= $widget->name ?>
                                        </th>
                                        <?php foreach ($pages as $page) { ?>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="page_widget[<?= $widget->id ?>][<?= $page->id ?>]" type="checkbox" class="ace" value="1"  <?php if (!empty($widgets_pages[$widget->id][$page->id])) { ?>checked<?php } ?>/>
                                                        <span class="lbl"></span>
                                                    </label>
                                                </div>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        <?php } else { ?>
                            <tbody>
                                <tr>
                                    <td colspan="5"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.no-data') ?></td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                    <div class="form-group">
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-info btn-sm" data-status="1" id="save-access-btn"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
