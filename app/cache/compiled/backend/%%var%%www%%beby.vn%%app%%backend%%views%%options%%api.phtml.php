<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('options/api') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('api-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('options/api') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('api-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?php if (!empty($options)) { ?>
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
                <a href="#apiinfo" data-toggle="tab"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.google-config') ?></a>
            </li>
            <!-- <li>
                <a href="#acceinfo" data-toggle="tab"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.access') ?></a>
            </li> -->
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="apiinfo">
                <form action="<?= $this->url->get('options/saveapi') ?>" method="post" class="form-horizontal" id="api-form">
                    <div class="form-group">
                        <label for="Google_Client_ID" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.Google_Client_ID') ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="Google_Client_ID" class="form-control" id="Google_Client_ID" <?php if (!empty($options)) { ?>value="<?= $options['Google_Client_ID']['op_value'] ?>"<?php } ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Google_Client_Secret" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.Google_Client_Secret') ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="Google_Client_Secret" class="form-control" id="Google_Client_Secret" <?php if (!empty($options)) { ?>value="<?= $options['Google_Client_Secret']['op_value'] ?>"<?php } ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.Google_API_Enable') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label>
                                        <input name="Google_API_Enable" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($options) && $options['Google_API_Enable']['op_value'] == 1) { ?>checked="checked"<?php } ?> />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.Google_Map') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                        <input name="Google_Map" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($options) && $options['Google_Map']['op_value'] == 1) { ?>checked="checked"<?php } ?> />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.Google_Login') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label>
                                        <input name="Google_Login" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($options) && $options['Google_Login']['op_value'] == 1) { ?>checked="checked"<?php } ?> />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <button type="button" class="btn btn-info btn-sm" data-status="1" id="save-api-btn"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="accessinfo"></div>
        </div>
    </div>
</div>

<script>
    $('#save-api-btn').on('click', function(){
        $('#api-form').submit();
    });
</script>