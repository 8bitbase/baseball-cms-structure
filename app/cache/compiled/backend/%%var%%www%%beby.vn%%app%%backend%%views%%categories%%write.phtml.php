<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('categories/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('category-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('categories/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('category-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?php if (!empty($category)) { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>
                <?php } else { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?>
                <?php } ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <form action="<?= $this->url->get('categories/save') ?>" method="post" class="form-horizontal" id="category-form">
            <div class="form-group has-feedback">
                <label for="name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?></label>
                <div class="col-sm-5">
                    <input type="text" name="name" <?php if (!empty($category)) { ?>value="<?= $category['name'] ?>"<?php } ?>
                           class="form-control" id="name" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?>" />
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.alpha_numeric_dash') ?></span>
                </div>
            </div>
            <div class="form-group ">
                <label for="category-slug" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.slug') ?></label>
                <div class="col-sm-5">
                    <input type="text" name="slug" <?php if (!empty($category)) { ?>value="<?= $category['slug'] ?>"<?php } ?>
                           class="form-control" id="category-slug" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.slug') ?>">
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.alpha_numeric_dash') ?></span>
                </div>
            </div>
            <fieldset>
                <div class="form-group">
                    <label for="category-parent" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.parent') ?></label>
                    <div class="col-sm-5">
                        <select class="form-control" name="parent">
                            <option><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.please-select') ?></option>
                            <?php foreach ($categoryList as $value) { ?>
                                <?php if (!empty($category) && $category['parent'] == $value['id']) { ?>
                                    <option value="<?= $value['id'] ?>" selected="selected">
                                <?php } elseif ($value['id'] == $parent) { ?>
                                    <option value="<?= $value['id'] ?>" selected="selected">
                                <?php } else { ?>
                                    <option value="<?= $value['id'] ?>">
                                <?php } ?>
                                <?php if ($value['parent'] > 0) { ?>
                                    <?= str_repeat('-', substr_count($value['path'], '/')) ?>
                                    <?= $value['name'] ?>
                                <?php } else { ?>
                                    <?= $value['name'] ?>
                                <?php } ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="category-sort" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.sort') ?></label>
                <div class="col-sm-5">
                    <input type="text" name="sort" <?php if (!empty($category)) { ?>value="<?= $category['sort'] ?>"<?php } ?>
                           class="form-control" id="category-sort" placeholder="999" />
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.suggest-sort') ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="category-description" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.desc') ?></label>
                <div class="col-sm-5">
                    <textarea name="description" class="form-control" rows="5"><?php if (!empty($category)) { ?><?= $category['description'] ?><?php } ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.status') ?></label>
                <div class="controls col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-3">
                                <input name="status" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($category) && $category['status'] == 1) { ?>checked="checked"<?php } ?> />
                                <span class="lbl"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <?php if (!empty($category['id'])) { ?>
                        <input type="hidden" name="id" value="<?= $category['id'] ?>" />
                        <button type="submit" id="category-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                    <?php } else { ?>
                        <button type="submit" id="category-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?></button>
                    <?php } ?>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $('#category-btn').on('click', function(){
        var categorySlug = $.trim($('#category-slug').val());
        var categorySlugPattern = /^[\w-]+$/i;
        if(categorySlug == true && !categorySlugPattern.test(categorySlug)){
            tips_message("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.alpha_numeric_dash') ?>");
            return false;
        }

        $('#category-form').submit();
    });
</script>