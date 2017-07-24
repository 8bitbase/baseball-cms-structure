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
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('list') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-panel">
                    <a href="<?= $this->url->get('widget-page/write') ?>" class="btn btn-success btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?></a>
                    <a href="<?= $this->url->get('widget-page/import') ?>" class="btn btn-success btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.import') ?></a>
                </div>
            </div>
        </div>
        <div class="row" style="overflow: auto;">
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
                                                    <?php if (!empty($widgets_pages[$widget->id][$page->id])) { ?>
                                                        <span class="label label-success label-white middle">X</span>
                                                    <?php } ?>
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
        </div>
    </div>
</div>
