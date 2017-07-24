<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('profile/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('profile-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('profile/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('profile-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?php if (!empty($profile)) { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>
                <?php } else { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?>
                <?php } ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#profileinfo" data-toggle="tab"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.profile') ?></a>
            </li>
            <li>
                <a href="#accessinfo" data-toggle="tab"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.access') ?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="profileinfo">
                <form action="<?= $this->url->get('profile/publish') ?>" method="post" class="form-horizontal" id="save-archive-form">
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="name" <?php if (!empty($profile)) { ?>value="<?= $profile['name'] ?>"<?php } ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.status') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label>
                                        <input name="status" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($profile) && $profile['status'] == 1) { ?>checked="checked"<?php } ?> />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <?php if (!empty($profile)) { ?>
                                <input type="hidden" name="profileID" value="<?= $profile['id'] ?>" />
                            <?php } ?>
                            <button type="button" class="btn btn-info btn-sm" data-status="1" id="save-profile-btn"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="accessinfo">
                <form action="<?= $this->url->get('profile/access') ?>" method="post" class="form-horizontal" id="save-access-form">
                    <table class="table tree-grid table-striped table-bordered table-condensed table-hover" id="test-table">
                        <thead>
                            <tr>
                                <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.module') ?></th>
                                <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.view') ?></th>
                                <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?></th>
                                <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?></th>
                                <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.delete') ?></th>
                            </tr>
                        </thead>
                        <?php if (!empty($modules)) { ?>
                            <tbody>
                                <?php foreach ($modules as $module) { ?>
                                    <tr>
                                        <td>
                                            <?= $module['name'] ?>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="module[<?= $module['id'] ?>][view]" type="checkbox" class="ace" value="1" <?php if (!empty($module['is_view']) && $module['is_view'] == 1) { ?>checked<?php } ?> />
                                                    <span class="lbl"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="module[<?= $module['id'] ?>][add]" type="checkbox" class="ace" value="1" <?php if (!empty($module['is_add']) && $module['is_add'] == 1) { ?>checked<?php } ?> />
                                                    <span class="lbl"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="module[<?= $module['id'] ?>][edit]" type="checkbox" class="ace" value="1" <?php if (!empty($module['is_edit']) && $module['is_edit'] == 1) { ?>checked<?php } ?> />
                                                    <span class="lbl"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="module[<?= $module['id'] ?>][delete]" type="checkbox" class="ace" value="1" <?php if (!empty($module['is_delete']) && $module['is_delete'] == 1) { ?>checked<?php } ?> />
                                                    <span class="lbl"></span>
                                                </label>
                                            </div>
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
                    <div class="form-group">
                        <div class="col-sm-5">
                            <?php if (!empty($profile)) { ?>
                                <input type="hidden" name="profileID" value="<?= $profile['id'] ?>" />
                            <?php } ?>
                            <button type="button" class="btn btn-info btn-sm" data-status="1" id="save-access-btn"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#save-profile-btn').on('click', function(){
        var name = $.trim($('#name').val());
        if(typeof name == 'undefined' || name == false){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?>');
            return false;
        }

        $('#save-archive-form').submit();
    });

    $('#save-access-btn').on('click', function(){
        $('#save-access-form').submit();
    });
</script>