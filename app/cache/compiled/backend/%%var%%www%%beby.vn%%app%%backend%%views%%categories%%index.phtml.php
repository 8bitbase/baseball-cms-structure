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
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('category-list') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <div class="btn-panel">
            <a href="<?= $this->url->get('categories/write') ?>" class="btn btn-success btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?></a>
            <a href="<?= $this->url->get('categories/refresh') ?>" class="btn btn-pink btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.clear-cache') ?></a>
        </div>
        <div class="table-responsive">
                <table class="table tree-grid table-bsorted table-condensed table-hover" id="category-table">
                    <thead>
                        <tr>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.slug') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.sort') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.status') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.updated') ?></th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <?php if (!empty($categoryList)) { ?>
                        <tbody>
                            <?php foreach ($categoryList as $index => $category) { ?>
                                <?php if (!empty($category['parent'])) { ?>
                                    <tr class="treegrid-<?= $category['id'] ?> treegrid-parent-<?= $category['parent'] ?>">
                                <?php } else { ?>
                                    <tr class="treegrid-<?= $category['id'] ?>">
                                <?php } ?>
                                    <td>
                                        <a href="<?= $this->url->get('categories/write?id=' . $category['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <?= $category['name'] ?>
                                        </a>
                                    </td>
                                    <td><?= $category['slug'] ?></td>
                                    <td>
                                        <a href="javascript:void(0);" class="category-sort-block" data-name="sort"
                                           data-url="<?= $this->url->get('categories/savesort') ?>"
                                           data-pk="<?= $category['id'] ?>" data-type="text"
                                           data-placement="top" data-title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.sort') ?>">
                                            <?= $category['sort'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php if ($category['status'] == 0) { ?>
                                            <span class="label label-white middle">
                                                <s><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.inactive') ?></s>
                                            </span>
                                        <?php } else { ?>
                                            <span class="label label-success label-white middle">
                                                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.active') ?>
                                            </span>
                                        <?php } ?>
                                    </td>
                                    <td><?= $category['modify_time'] ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-success" href="<?= $this->url->get('categories/write?parent=' . $category['id']) ?>">
                                            <i class="icon-plus bigger-120"></i>
                                        </a>
                                        <a class="btn btn-xs btn-info" href="<?= $this->url->get('categories/write?id=' . $category['id']) ?>">
                                            <i class="icon-edit bigger-120"></i>
                                        </a>
                                        <?php if ($category['id'] > 19) { ?>
                                        <button class="btn btn-xs btn-danger delete-category" data-url="<?= $this->url->get('categories/delete?id=' . $category['id']) ?>">
                                            <i class="icon-trash bigger-120"></i>
                                        </button>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    <?php } else { ?>
                        <tbody>
                            <tr>
                                <td colspan="8"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.no-data') ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
        </div>
    </div>
</div>
<link href="<?= $this->url->getStatic('bootstrap-editable/css/bootstrap-editable.css?_v=') . $assetsVersion ?>" rel="stylesheet"/>
<script src="<?= $this->url->getStatic('bootstrap-editable/js/bootstrap-editable.min.js?_v=') . $assetsVersion ?>"></script>
<script>
    $.fn.editable.defaults.mode = 'popup';
    $('.category-sort-block').editable({
        params:function(params){
            params.sort = params.value;
            params.id = params.pk;
            if(params.sort <= 0 || params.sort > 999){
                params.sort = 999;
            }
            return params;
        },
        success:function(response, value){
            if (typeof response !== 'object') response = JSON.parse(response);
            if(response.code == 1){
                tips_message(response.message, 'success');
            }else{
                tips_message(response.message, 'error');
            }
            return true;
        },
        error:function(response){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.error-network') ?>');
        },
        display:function(value){
            if(value <= 0 || value > 999){
                value = 999;
            }
            $(this).html(value);
        }
    });

    $('.delete-category').on('click', function(){
        var dataUrl = $.trim($(this).attr('data-url'));
        if(!window.confirm('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.is-delete-selected') ?>')){
            return false;
        }
        window.location.href = dataUrl;
    });
</script>