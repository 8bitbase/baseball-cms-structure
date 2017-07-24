<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('tags/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('tag-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('tags/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('tag-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.view') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.tag_list') ?></h3>
            </div>
            <div class="panel-body">
                <div class="tags-box">
                    <?php if (!empty($tagsList)) { ?>
                        <ul>
                            <?php $tagclound = ['label-success', 'label-warning', 'label-danger', 'label-info', 'label-inverse', 'label-pink', 'label-yellow', 'label-purple']; ?>
                            <?php foreach ($tagsList as $tagk => $tag) { ?>
                                <li>
                                    <span class="label <?= $tagclound[array_rand($tagclound)] ?> arrowed-in-right arrowed">
                                        <a href="<?= $this->url->get('tags/index?id=' . $tag['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <?= $tag['name'] ?>
                                        </a>
                                        <a href="javascript:void(0);" class="delete-tag" data-url="<?= $this->url->get('tags/delete?id=' . $tag['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.delete') ?>">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>
                                    </span>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.no-data') ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></h3>
            </div>
            <div class="panel-body" >
                <form action="<?= $this->url->get('tags/save') ?>" method="post" class="form-horizontal" id="tag-form">
                    <div class="form-group">
                        <label for="tag-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="<?php if (!empty($taginfo)) { ?><?= $taginfo['name'] ?><?php } ?>"
                                   class="form-control" id="tag-name" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?>">
                            <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.alpha_numeric_dash') ?></span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="tag-slug" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.tag') ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="slug" value="<?php if (!empty($taginfo)) { ?><?= $taginfo['slug'] ?><?php } ?>"
                                   class="form-control" id="taginfo-slug" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.tag') ?>">
                            <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.alpha_numeric_dash') ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <?php if (!empty($taginfo['id'])) { ?>
                                <input type="hidden" name="id" value="<?= $taginfo['id'] ?>" />
                                <button type="submit" id="tag-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                            <?php } else { ?>
                                <button type="submit" id="tag-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?></button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.delete-tag').on('click', function(){
        var dataUrl = $.trim($(this).attr('data-url'));
        if(!window.confirm("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.is-delete-selected') ?>")){
            return false;
        }
        window.location.href = dataUrl;
    });

    $('#tag-btn').on('click', function(){
        var tagSlug = $.trim($('#tag-slug').val());
        var tagSlugPattern = /^[\w-]+$/i;
        if(tagSlug == true && !tagSlugPattern.test(tagSlug)){
            tips_message("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.alpha_numeric_dash') ?>");
            return false;
        }

        $('#tag-form').submit();
    });
</script>
