<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('modules/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('modules-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('modules/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('modules-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('list') ?>
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.keyword') ?>" <?php if (!empty($keyword)) { ?>value="<?= $keyword ?>"<?php } ?> />
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-info btn-sm">
                                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.search') ?>
                                    <i class="icon-search icon-on-right bigger-110"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="btn-panel">
                            <a href="<?= $this->url->get('modules/write') ?>" class="btn btn-success btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?></a>
                            <a href="<?= $this->url->get('modules/reset') ?>" class="btn btn-success btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.reset') ?></a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table tree-grid table-striped table-bordered table-condensed table-hover" id="test-table">
                    <thead>
                        <tr>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.id') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.active') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.version') ?></th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <?php if (!empty($modules)) { ?>
                        <tbody>
                            <?php foreach ($modules as $modules) { ?>
                                <tr>
                                    <td>
                                        <?= $modules['id'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= $this->url->get('modules/write?modulesID=' . $modules['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <?= $modules['name'] ?>
                                        </a>
                                        
                                    </td>
                                    <td>
                                        <?php if ($modules['active'] == 0) { ?>
                                            <span class="label label-white middle">
                                                <s><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.inactive') ?></s>
                                            </span>
                                        <?php } else { ?>
                                            <span class="label label-success label-white middle">
                                                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.active') ?>
                                            </span>
                                        <?php } ?>
                                    </td>
                                    <td><?= $modules['version'] ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="<?= $this->url->get('modules/write?modulesID=' . $modules['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <i class="icon-edit bigger-120"></i>
                                        </a>
                                        <button class="btn btn-xs btn-danger delete-modules" data-url="<?= $this->url->get('modules/delete?modulesID=' . $modules['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.delete') ?>">
                                            <i class="icon-trash bigger-120"></i>
                                        </button>
                                    </td>
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
                <?php if (!empty($modules)) { ?>
                    <?= $this->partial('public/paginator') ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
    $('.delete-modules').on('click', function(){
        var dataUrl = $.trim($(this).attr('data-url'));
        if(!window.confirm("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.is-delete-selected') ?>")){
            return false;
        }
        window.location.href = dataUrl;
    });
</script>