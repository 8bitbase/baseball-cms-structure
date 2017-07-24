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
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('basic-setting') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <form action="<?= $this->url->get('options/savebase') ?>" method="post" class="form-horizontal" id="base-options-form">
            <div class="form-group">
                <label for="site-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_name') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="siteName" value="<?php if (!empty($options)) { ?><?= $options['site_name']['op_value'] ?><?php } ?>"
                           class="form-control" id="site-name" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_name') ?>">
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.alpha_numeric_dash') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="site-title" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_title') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="siteTitle" value="<?php if (!empty($options)) { ?><?= $options['site_title']['op_value'] ?><?php } ?>"
                           class="form-control" id="site-title" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_title') ?>">
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.site_title') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="site_logo" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_logo') ?></label>
                <div class="col-sm-6">
                    <input type="text" name="site_logo" value="<?php if (!empty($options)) { ?><?= $options['site_logo']['op_value'] ?><?php } ?>"
                           class="form-control" id="site_logo" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_logo') ?>">
                </div>
                <div class="col-sm-1">
                    <a href="javascript:open_popup('/backend/filemanager/dialog.php?popup=1&amp;field_id=site_logo')" class="btn btn-warning btn-sm" type="button">Upload</a>
                </div>
            </div>
            <div class="form-group">
                <label for="site_icon" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_icon') ?></label>
                <div class="col-sm-6">
                    <input type="text" name="site_icon" value="<?php if (!empty($options)) { ?><?= $options['site_icon']['op_value'] ?><?php } ?>"
                           class="form-control" id="site_icon" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_icon') ?>">
                </div>
                <div class="col-sm-1">
                    <a href="javascript:open_popup('/backend/filemanager/dialog.php?popup=1&amp;field_id=site_icon')" class="btn btn-warning btn-sm" type="button">Upload</a>
                </div>
            </div>
            <div class="form-group ">
                <label for="site-url" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_address') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="siteUrl" value="<?php if (!empty($options)) { ?><?= $options['site_url']['op_value'] ?><?php } ?>"
                           class="form-control" id="site-url" placeholder="http://">
                </div>
            </div>
            <div class="form-group ">
                <label for="cdn-url" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.cdn_address') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="cdnUrl" value="<?php if (!empty($options)) { ?><?= $options['cdn_url']['op_value'] ?><?php } ?>"
                           class="form-control" id="cdn-url" placeholder="http://">
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.site_address') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="site-keywords" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.keyword') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="keywords" value="<?php if (!empty($options)) { ?><?= $options['site_keywords']['op_value'] ?><?php } ?>"
                           class="form-control" id="site-keywords" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.keyword') ?>" />
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.keyword') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="site-description" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_desc') ?></label>
                <div class="col-sm-8">
                    <input type="text" name="description" value="<?php if (!empty($options)) { ?><?= $options['site_description']['op_value'] ?><?php } ?>"
                           class="form-control" id="site-description" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_desc') ?>" />
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.site_desc') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="site_script_head" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_script_head') ?></label>
                <div class="col-sm-8">
                    <textarea type="text" name="site_script_head"
                           class="form-control" id="site_script_head"><?php if (!empty($options)) { ?><?= $options['site_script_head']['op_value'] ?><?php } ?></textarea>
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.site_script_head') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="site_script_body" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_script_body') ?></label>
                <div class="col-sm-8">
                    <textarea type="text" name="site_script_body"
                           class="form-control" id="site_script_body"><?php if (!empty($options)) { ?><?= $options['site_script_body']['op_value'] ?><?php } ?></textarea>
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.site_script_body') ?></span>
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
    function open_popup(url){
        var w=880;
        var h=570;
        var l=Math.floor((screen.width-w)/2);
        var t=Math.floor((screen.height-h)/2);
        var win=window.open(url,'LCDFilemanager',"scrollbars=1,width="+w+",height="+h+",top="+t+",left="+l);
    }
    $('#base-options-btn').on('click', function(){
        var siteName = $.trim($('#site-name').val());
        var siteNamePattern = /^[\u4e00-\u9fa5\w-]+$/i;
        if(!siteNamePattern.test(siteName)){
            tips_message("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.site_name') ?> <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.alpha_numeric_dash') ?>");
            return false;
        }

        $('#base-options-form').submit();
    });
</script>