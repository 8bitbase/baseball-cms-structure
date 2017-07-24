<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="javascript:void(0);"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('mail-setting') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('mail-setting') ?>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('mail-setting') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <form action="<?= $this->url->get('options/savemail') ?>" method="post" class="form-horizontal" id="base-options-form">
            <div class="form-group">
                <label for="mail_server" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.mail_server') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="mail_server" value="<?php if (!empty($options)) { ?><?= $options['mail_server']['op_value'] ?><?php } ?>"
                           class="form-control" id="mail_server" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.mail_server') ?>">
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.mail_server') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="mail_user" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.mail_user') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="mail_user" value="<?php if (!empty($options)) { ?><?= $options['mail_user']['op_value'] ?><?php } ?>"
                           class="form-control" id="mail_user" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.mail_user') ?>">
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.mail_user') ?></span>
                </div>
            </div>
            <div class="form-group ">
                <label for="mail_passwd" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.mail_passwd') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="mail_passwd" value="<?php if (!empty($options)) { ?><?= $options['mail_passwd']['op_value'] ?><?php } ?>"
                           class="form-control" id="mail_passwd" placeholder="http://">
                </div>
            </div>
            <div class="form-group ">
                <label for="mail_smtp_encryption" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.mail_smtp_encryption') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="mail_smtp_encryption" value="<?php if (!empty($options)) { ?><?= $options['mail_smtp_encryption']['op_value'] ?><?php } ?>"
                           class="form-control" id="mail_smtp_encryption" placeholder="http://">
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.mail_smtp_encryption') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="mail_smtp_port" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.mail_smtp_port') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="mail_smtp_port" value="<?php if (!empty($options)) { ?><?= $options['mail_smtp_port']['op_value'] ?><?php } ?>"
                           class="form-control" id="mail_smtp_port" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.mail_smtp_port') ?>" />
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.mail_smtp_port') ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" id="base-options-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $('#base-options-btn').on('click', function(){
        // var mailName = $.trim($('#mail-name').val());
        // var mailNamePattern = /^[\u4e00-\u9fa5\w-]+$/i;
        // if(!mailNamePattern.test(mailName)){
        //     tips_message("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.mail_server') ?> <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.alpha_numeric_dash') ?>");
        //     return false;
        // }

        $('#base-options-form').submit();
    });
</script>