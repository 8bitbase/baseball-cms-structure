<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('menu/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('menu-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('menu/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('menu-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?php if (!empty($menu)) { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>
                <?php } else { ?>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?>
                <?php } ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <form action="<?= $this->url->get('menu/save') ?>" method="post" class="form-horizontal" id="menu-form">
            <div class="form-group has-feedback">
                <label for="menu-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?></label>
                <div class="col-sm-5">
                    <input type="text" name="name" <?php if (!empty($menu)) { ?>value="<?= $menu['name'] ?>"<?php } ?>
                           class="form-control" id="menu-name" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?>">
                </div>
            </div>
            <div class="radio form-group">
                <div class="col-sm-1 col-sm-offset-2">
    				<label>
    					<input id="input_link" name="check-link" type="radio" class="ace" <?php if (!empty($menu['url'])) { ?>checked<?php } ?> />
    					<span class="lbl"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.link') ?></span>
    				</label>
				</div>
				<div class="col-sm-1">
    				<label>
    					<input id="input_category" name="check-link" type="radio" class="ace" <?php if (!empty($menu['id_category'])) { ?>checked<?php } ?> />
    					<span class="lbl"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.category') ?></span>
    				</label>
				</div>
			</div>
            <div class="form-group" id="display_link" <?php if (!empty($menu['id_category'])) { ?>style="display:none"<?php } ?>>
                <label for="menu-url" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.link') ?></label>
                <div class="col-sm-5">
                    <input type="text" name="url" <?php if (!empty($menu)) { ?>value="<?= $menu['url'] ?>"<?php } ?> class="form-control" id="menu-url" placeholder="/index/index">
                </div>
            </div>
            <fieldset id="display_category" <?php if (!empty($menu['url'])) { ?>style="display:none"<?php } ?>>
                <div class="form-group">
                    <label for="category-parent" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.category') ?></label>
                    <div class="col-sm-5">
                        <select class="form-control" name="id_category">
                            <option value="0"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.please-select') ?></option>
                            <?php foreach ($categoryList as $value) { ?>
                                <?php if (!empty($menu) && $menu['id_category'] == $value['id']) { ?>
                                    <option value="<?= $value['id'] ?>" selected="selected">
                                <?php } elseif ($value['id'] == $parentid) { ?>
                                    <option value="<?= $value['id'] ?>" selected="selected">
                                <?php } else { ?>
                                    <option value="<?= $value['id'] ?>">
                                <?php } ?>
                                <?php if ($value['parent'] > 0) { ?>
                                    ├─<?= str_repeat('──', substr_count($value['path'], '/')) ?>
                                    <?= $value['name'] ?>
                                <?php } else { ?>
                                    ├─<?= $value['name'] ?>
                                <?php } ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="menu-parent" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.parent') ?></label>
                    <div class="col-sm-5">
                        <select class="form-control" name="parent">
                            <option value="0"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.please-select') ?></option>
                            <?php foreach ($menuList as $value) { ?>
                                <?php if (!empty($menu) && $menu['parent'] == $value['id']) { ?>
                                    <option value="<?= $value['id'] ?>" selected="selected">
                                <?php } elseif ($value['id'] == $parentid) { ?>
                                    <option value="<?= $value['id'] ?>" selected="selected">
                                <?php } else { ?>
                                    <option value="<?= $value['id'] ?>">
                                <?php } ?>
                                <?php if ($value['parent'] > 0) { ?>
                                    ├─<?= str_repeat('──', substr_count($value['path'], '/')) ?>
                                    <?= $value['name'] ?>
                                <?php } else { ?>
                                    ├─<?= $value['name'] ?>
                                <?php } ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="menu-sort" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.sort') ?></label>
                <div class="col-sm-5">
                    <input type="text" name="sort" <?php if (!empty($menu)) { ?>value="<?= $menu['sort'] ?>"<?php } ?>
                           class="form-control" id="menu-sort" placeholder="999" />
                    <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.suggest-sort') ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <?php if (!empty($menu['id'])) { ?>
                        <input type="hidden" name="id" value="<?= $menu['id'] ?>" />
                        <button type="submit" id="menu-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.save') ?></button>
                    <?php } else { ?>
                        <button type="submit" id="menu-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?></button>
                    <?php } ?>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $('#input_category').on('click', function(){
       $('#display_category').show();
       $('#display_link').hide();
       $("[name='url']").val('');
    });
    
    $('#input_link').on('click', function(){
       $('#display_link').show();
       $('#display_category').hide();
       $("[name='id_category']").val(0);
    });
</script>