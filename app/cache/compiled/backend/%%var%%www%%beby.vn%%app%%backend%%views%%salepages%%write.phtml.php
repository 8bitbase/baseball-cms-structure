<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('sale-pages/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('sale-page-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('sale-pages/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('sale-page-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?php if (!empty($salePages)) { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>
                <?php } else { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?>
                <?php } ?>
            </small>
        </h1>
    </div>
    <form action="<?= $this->url->get('sale-pages/publish') ?>" method="post" class="form-horizontal" id="save-archive-form" enctype="multipart/form-data">
        <div class="col-lg-12">
            <h3 class="header smaller lighter blue"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.information') ?></h3>
            <div class="form-group">
                <label for="archive-title" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.title') ?></label>
                <div class="col-sm-9">
                    <input type="name" name="name" class="form-control" id="name" <?php if (!empty($salePages)) { ?>value="<?= $salePages['name'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-alias" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.alias') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="alias" class="form-control" id="alias" <?php if (!empty($salePages)) { ?>value="<?= $salePages['alias'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-category" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.category') ?></label>
                <div class="col-sm-4">
                    <div class="archive-category-list">
                        <ul>
                            <?php foreach ($categoryList as $value) { ?>
                            <li>
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" name="category[]" value="<?= $value['id'] ?>"
                                    <?php if (!empty($salePages['categories'])) { ?>
                                       <?php foreach ($salePages['categories'] as $cv) { ?>
                                            <?php if ($cv['id'] == $value['id']) { ?>
                                                checked="checked"
                                                <?php break; ?>
                                            <?php } ?>
                                       <?php } ?>
                                    <?php } ?>
                                /><?= $value['name'] ?>
                                </label>
                            </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-keyword" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.keyword') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="keyword" class="form-control" id="keyword" <?php if (!empty($salePages)) { ?>value="<?= $salePages['keyword'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-phone" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.phone') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="phone" class="form-control" id="phone" <?php if (!empty($salePages)) { ?>value="<?= $salePages['phone'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-email" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.email') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="email" class="form-control" id="email" <?php if (!empty($salePages)) { ?>value="<?= $salePages['email'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.address') ?></label>
                <div class="col-sm-9">
                    <textarea id="address" name="address" class="autosize-transition form-control"><?php if (!empty($salePages)) { ?><?= $salePages['address'] ?><?php } ?></textarea>
                </div>
            </div>

            <h3 class="header smaller lighter blue"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.content') ?></h3>

            <div class="form-group">
                <label for="upimage" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.image') ?></label>
                <div class="col-sm-9 has-success">
                    <input id="upimage" name="upimage" type="file" />
                    <div class="help-block col-xs-12 col-sm-reset">
                        File size max: 2MB, Size: 1500x1000 (px)
                    </div>
                </div>
            </div>
            <?php if (!empty($salePages['image'])) { ?>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-2">
                    <span class="profile-picture">
                        <img class="editable img-responsive editable-click editable-empty" src="<?= $salePages['image'] ?>" />
                    </span>
                </div>
            </div>
            <?php } ?>
            <div class="form-group">
                <label for="uplogo" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.logo') ?></label>
                <div class="col-sm-9 has-success">
                    <input id="uplogo" name="uplogo" type="file" />
                    <div class="help-block col-xs-12 col-sm-reset">
                        File size max: 2MB, Size: 500x500 (px)
                    </div>
                </div>
            </div>
            <?php if (!empty($salePages['logo'])) { ?>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-2">
                    <span class="profile-picture">
                        <img class="editable img-responsive editable-click editable-empty" src="<?= $salePages['logo'] ?>" />
                    </span>
                </div>
            </div>
            <?php } ?>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.description') ?></label>
                <div class="col-sm-9">
                    <textarea id="description" name="description" class="autosize-transition form-control"><?php if (!empty($salePages)) { ?><?= $salePages['description'] ?><?php } ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="content" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.content') ?></label>
                <div class="col-sm-9">
                    <textarea id="content" class="tinymce autosize-transition form-control" name="content"><?php if (!empty($salePages)) { ?><?= $salePages['content'] ?><?php } ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="video" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.video') ?></label>
                <div class="col-sm-9">
                    <textarea id="video" name="video" class="autosize-transition form-control"><?php if (!empty($salePages)) { ?><?= $salePages['video'] ?><?php } ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.status') ?></label>
                <div class="controls col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-3">
                            <label>
                                <input name="status" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($salePages) && $salePages['status'] == 1) { ?>checked="checked"<?php } ?> />
                                <span class="lbl"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="header smaller lighter blue"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.popup') ?></h3>
            
            <div class="form-group">
                <label for="uppopup_image" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.popup_image') ?></label>
                <div class="col-sm-9 has-success">
                    <input id="uppopup_image" name="uppopup_image" type="file" />
                    <div class="help-block col-xs-12 col-sm-reset">
                        File size max: 2MB, Size: 750x500 (px)
                    </div>
                </div>
            </div>
            <?php if (!empty($salePages)) { ?>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-2">
                    <span class="profile-picture">
                        <img class="editable img-responsive editable-click editable-empty" src="<?= $salePages['popup_image'] ?>" />
                    </span>
                </div>
            </div>
            <?php } ?>
            <div class="form-group">
                <label for="popup_tracking" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.tracking-id') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="popup_tracking" class="form-control" id="popup_tracking" <?php if (!empty($salePages)) { ?>value="<?= $salePages['popup_tracking'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="popup_description" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.popup_description') ?></label>
                <div class="col-sm-9">
                    <textarea id="popup_description" class="tinymce autosize-transition form-control" name="popup_description"><?php if (!empty($salePages)) { ?><?= $salePages['popup_description'] ?><?php } ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="is_popup" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.is_popup') ?></label>
                <div class="controls col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-3">
                            <label>
                                <input name="is_popup" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($salePages) && $salePages['is_popup'] == 1) { ?>checked="checked"<?php } ?> />
                                <span class="lbl"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="header smaller lighter blue"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.footer') ?></h3>
            
            <div class="form-group">
                <label for="copyright" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.copyright') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="copyright" class="form-control" id="copyright" <?php if (!empty($salePages)) { ?>value="<?= $salePages['copyright'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="link_facebook" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.link_facebook') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="link_facebook" class="form-control" id="link_facebook" <?php if (!empty($salePages)) { ?>value="<?= $salePages['link_facebook'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="link_google" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.link_google') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="link_google" class="form-control" id="link_google" <?php if (!empty($salePages)) { ?>value="<?= $salePages['link_google'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="link_twitter" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.link_twitter') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="link_twitter" class="form-control" id="link_twitter" <?php if (!empty($salePages)) { ?>value="<?= $salePages['link_twitter'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="link_linkedin" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.link_linkedin') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="link_linkedin" class="form-control" id="link_linkedin" <?php if (!empty($salePages)) { ?>value="<?= $salePages['link_linkedin'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="link_youtube" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.link_youtube') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="link_youtube" class="form-control" id="link_youtube" <?php if (!empty($salePages)) { ?>value="<?= $salePages['link_youtube'] ?>"<?php } ?>>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <?php if (!empty($salePages)) { ?>
                        <input type="hidden" name="id" value="<?= $salePages['id'] ?>" />
                    <?php } ?>
                    <button type="button" class="btn btn-info btn-sm" data-status="1" id="save-sale-pages-btn"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                    <button type="button" class="btn btn-sm" data-status="2" id="save-sale-pages-draft-btn"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save-draft') ?></button>
                </div>
            </div>
        </div>
    </form>
</div>
<link rel="stylesheet" href="<?= $this->url->getStatic('tagsinput/jquery.tagsinput.css?_v=') . $assetsVersion ?>" />
<script src="<?= $this->url->getStatic('tagsinput/jquery.tagsinput.js?_v=') . $assetsVersion ?>"></script>
<script>
    $('#archive-tags').tagsInput({
        'defaultText':'',
        'width':'100%',
        'height':'auto'
    });
    $('#save-sale-pages-btn, #save-sale-pages-draft-btn').on('click', function(){
        var title = $.trim($('#name').val());
        if(typeof title == 'undefined' || title == false){
            tips_message("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.title') ?>");
            return false;
        }

        var category = new Array();
        $('input[name="category[]"]').each(function(){
            if($(this).is(':checked')){
                category.push($(this).val());
            }
        });
        if(category.length == 0){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.select-category') ?>');
            return false;
        }

        var status = $(this).attr('data-status');
        $('#status').val(status);

        $('#save-archive-form').submit();
    });
    
</script>