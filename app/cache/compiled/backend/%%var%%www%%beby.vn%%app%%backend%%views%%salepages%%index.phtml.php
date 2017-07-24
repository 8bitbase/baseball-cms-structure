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
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('sale-page-list') ?>
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-sm-2">
                        <select name="id_category" class="form-control">
                            <option><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.please-select') ?></option>
                            <?php foreach ($categoryList as $value) { ?>
                                <?php if (!empty($id_category) && $id_category == $value['id']) { ?>
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
                    <div class="col-sm-2">
                        <div class="btn-panel">
                            <a href="<?= $this->url->get('sale-pages/write') ?>" class="btn btn-success btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?></a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table tree-grid table-striped table-bordered table-condensed table-hover" id="test-table">
                    <thead>
                        <tr>
                            <th width="20%"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.title') ?></th>
                            <th width="20%"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.category') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.created') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.updated') ?></th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <?php if (!empty($salePages)) { ?>
                        <tbody>
                            <?php foreach ($salePages as $salePage) { ?>
                                <tr>
                                    <td>
                                        <a href="<?= $this->url->get('sale-pages/write?id=' . $salePage['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <?= $salePage['name'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php foreach ($salePage['categories'] as $ck => $cv) { ?>
                                            <?php if ($ck == 0) { ?>
                                                <a href="<?= $this->url->get('sale-pages/index?id_category=' . $cv['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.view') ?>">
                                                    <?= $cv['name'] ?>
                                                </a>
                                            <?php } else { ?>
                                                ,<a href="<?= $this->url->get('sale-pages/index?id_category=' . $cv['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.view') ?>">
                                                    <?= $cv['name'] ?>
                                                </a>
                                            <?php } ?>
                                        <?php } ?>
                                    </td>
                                    <td><?= $salePage['create_time'] ?></td>
                                    <td><?= $salePage['modify_time'] ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="/du-an/<?= $salePage['alias'] ?>.html/review" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.view') ?>" target="_blank">
                                            <i class="fa fa-eye bigger-120"></i>
                                        </a>
                                        <a class="btn btn-xs btn-info" href="<?= $this->url->get('sale-pages/write?id=' . $salePage['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <i class="icon-edit bigger-120"></i>
                                        </a>
                                        <button class="btn btn-xs btn-danger delete-sale-pages" data-url="<?= $this->url->get('sale-pages/delete?id=' . $salePage['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.delete') ?>">
                                            <i class="icon-trash bigger-120"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    <?php } else { ?>
                        <tbody>
                        <tr>
                            <td colspan="7"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.no-data') ?></td>
                        </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <?php if (!empty($salePages)) { ?>
                    <?= $this->partial('public/paginator') ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
    $('.delete-sale-pages').on('click', function(){
        var dataUrl = $.trim($(this).attr('data-url'));
        if(!window.confirm("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.is-delete-selected') ?>")){
            return false;
        }
        window.location.href = dataUrl;
    });
</script>