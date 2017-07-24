<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('articles/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('article-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('articles/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('article-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?php if (!empty($article)) { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>
                <?php } else { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?>
                <?php } ?>
            </small>
        </h1>
    </div>
    <form action="<?= $this->url->get('articles/publish') ?>" method="post" class="form-horizontal" id="save-archive-form" enctype="multipart/form-data">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="archive-title" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.title') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="title" class="form-control" id="title" <?php if (!empty($article)) { ?>value="<?= $article['title'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="slug" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.slug') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="slug" class="form-control" id="slug" <?php if (!empty($article)) { ?>value="<?= $article['slug'] ?>"<?php } ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="introduce" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.introduce') ?></label>
                <div class="col-sm-9">
                    <textarea id="introduce" name="introduce" class="autosize-transition form-control"><?php if (!empty($article)) { ?><?= $article['introduce'] ?><?php } ?></textarea>
                </div>
            </div>
            <div class="form-group ">
                <label for="archive-category" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.category') ?></label>
                <div class="col-sm-4">
                    <div class="archive-category-list">
                        <ul>
                            <?php foreach ($categoryList as $value) { ?>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="category[]" value="<?= $value['id'] ?>"
                                        <?php if (!empty($article['categories'])) { ?>
                                           <?php foreach ($article['categories'] as $cv) { ?>
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
                <label for="archive-tags" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.tag') ?></label>
                <div class="col-sm-9">
                    <input type="text" name="tags" class="form-control" id="archive-tags" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.tag') ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="introduce" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.image') ?></label>
                <div class="col-sm-9 has-success">
                    <input id="image" name="image" type="file" />
                    <div class="help-block col-xs-12 col-sm-reset">
                        File size max: 2MB, Size: 750x500 (px)
                    </div>
                </div>
            </div>
            <?php if (!empty($article['image'])) { ?>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-2">
                    <span class="profile-picture">
                        <img class="editable img-responsive editable-click editable-empty" src="<?= $article['image'] ?>" />
                    </span>
                </div>
            </div>
            <?php } ?>
            <div class="form-group">
                <label for="content" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.content') ?></label>
                <div class="col-sm-9 full-tinymce">
                    <textarea id="content" class="tinymce autosize-transition form-control" name="content"><?php if (!empty($article)) { ?><?= $article['content'] ?><?php } ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.status') ?></label>
                <div class="controls col-xs-12 col-sm-4">
                    <select class="form-control">
                        <option value="0"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.disable') ?></option>
                        <option value="1"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.public') ?></option>
                        <option value="-1"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.private') ?></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.is_top') ?></label>
                <div class="controls col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-3">
                            <label>
                                <input name="is_top" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($article) && $article['is_top'] == 1) { ?>checked="checked"<?php } ?> />
                                <span class="lbl"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.is_recommend') ?></label>
                <div class="controls col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-3">
                            <label>
                                <input name="is_top" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($article) && $article['is_recommend'] == 1) { ?>checked="checked"<?php } ?> />
                                <span class="lbl"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-time" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.created') ?></label>
                <div class="col-sm-4">
                    <input type="text" name="create_time" id="archive-time" class="form-control Wdate" <?php if (!empty($article)) { ?>value="<?= $article['create_time'] ?>"<?php } ?> />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <?php if (!empty($article)) { ?>
                        <input type="hidden" name="id" value="<?= $article['id'] ?>" />
                    <?php } ?>
                    <button type="button" class="btn btn-info btn-sm" data-status="1" id="save-articles-btn"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                    <button type="button" class="btn btn-sm" data-status="2" id="save-articles-draft-btn"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save-draft') ?></button>
                </div>
            </div>
        </div>
    </form>
</div>
<link rel="stylesheet" href="<?= $this->url->getStatic('tagsinput/jquery.tagsinput.css?_v=') . $assetsVersion ?>" />
<script src="<?= $this->url->getStatic('tagsinput/jquery.tagsinput.js?_v=') . $assetsVersion ?>"></script>
<script src="<?= $this->url->getStatic('my97datepicker/WdatePicker.js?_v=') . $assetsVersion ?>"></script>
<script>
    $('#archive-time').on('click', function(){
        WdatePicker({
            dateFmt:'yyyy-MM-dd HH:mm'
        });
    });
    $('#archive-tags').tagsInput({
        'defaultText':'',
        'width':'100%',
        'height':'auto'
    });
    $('#save-articles-btn, #save-articles-draft-btn').on('click', function(){
        var title = $.trim($('#title').val());
        if(typeof title == 'undefined' || title == false){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.title') ?>');
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

        var tags = $.trim($('#archive-tags').val());
        if(typeof tags == 'undefined' || tags == false){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.tag') ?>');
            return false;
        }

        var status = $(this).attr('data-status');
        $('#status').val(status);

        $('#save-archive-form').submit();
    });
    <?php if (!empty($article['tags'])) { ?>
        <?php foreach ($article['tags'] as $tv) { ?>
            $("#archive-tags").addTag("<?= $tv['name'] ?>");
        <?php } ?>
    <?php } ?>
</script>