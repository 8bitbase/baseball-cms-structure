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
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('menu-list') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <div class="btn-panel">
            <a href="<?= $this->url->get('menu/write') ?>" class="btn btn-success btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?></a>
            <a href="<?= $this->url->get('menu/refresh') ?>" class="btn btn-pink btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.clear-cache') ?></a>
        </div>
        <div class="table-responsive">
            <table class="table tree-grid table-bordered table-condensed table-hover" id="menu-table">
                <thead>
                <tr>
                    <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?></th>
                    <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.link') ?></th>
                    <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.category') ?></th>
                    <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.sort') ?></th>
                    <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.updated') ?></th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <?php if (!empty($menuList)) { ?>
                    <tbody>
                        <?php foreach ($menuList as $menu) { ?>
                            <?php if (!empty($menu['parent'])) { ?>
                                <tr class="treegrid-<?= $menu['id'] ?> treegrid-parent-<?= $menu['parent'] ?>">
                            <?php } else { ?>
                                <tr class="treegrid-<?= $menu['id'] ?>">
                            <?php } ?>
                                <td>
                                    <a href="<?= $this->url->get('menu/write?id=' . $menu['id']) ?>">
                                        <?= $menu['name'] ?>
                                    </a>
                                </td>
                                <td>
                                    <?php if (!empty($menu['url'])) { ?>
                                        <?= $menu['url'] ?>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if (!empty($menu['category'])) { ?>
                                        <?= $menu['category']['name'] ?>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="menu-sort-block" data-name="sort"
                                       data-url="<?= $this->url->get('menu/savesort') ?>"
                                       data-pk="<?= $menu['id'] ?>" data-type="text"
                                       data-placement="top" data-title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.sort') ?>">
                                        <?= $menu['sort'] ?>
                                    </a>
                                </td>
                                <td><?= $menu['modify_time'] ?></td>  
                                <td>
                                    <a class="btn btn-xs btn-success" href="<?= $this->url->get('menu/write?parentid=' . $menu['id']) ?>">
                                        <i class="icon-plus bigger-120"></i>
                                    </a>
                                    <a class="btn btn-xs btn-info" href="<?= $this->url->get('menu/write?id=' . $menu['id']) ?>">
                                        <i class="icon-edit bigger-120"></i>
                                    </a>
                                    <button class="btn btn-xs btn-danger delete-menu" data-url="<?= $this->url->get('menu/delete?id=' . $menu['id']) ?>">
                                        <i class="icon-trash bigger-120"></i>
                                    </button>
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
    $('.menu-sort-block').editable({
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
            if (response.code == 1) {
                tips_message(response.message, 'success');
            } else {
                tips_message(response.message, 'error');
            }
            return true;
        },
        error:function(response){
            tips_message("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.error-network') ?>");
        },
        display:function(value){
            if(value <= 0 || value > 999){
                value = 999;
            }
            $(this).html(value);
        }
    });

    $('.delete-menu').on('click', function(){
        var dataUrl = $.trim($(this).attr('data-url'));
        if(!window.confirm("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.is-delete-selected') ?>")){
            return false;
        }
        window.location.href = dataUrl;
    });
</script>
