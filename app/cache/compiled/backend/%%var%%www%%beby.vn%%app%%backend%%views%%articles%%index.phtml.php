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
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('article-list') ?>
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
                            <a href="<?= $this->url->get('articles/write') ?>" class="btn btn-success btn-sm" role="button"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.add') ?></a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table tree-grid table-striped table-bordered table-condensed table-hover" id="tblData">
                    <thead>
                        <tr>
                            <th class="no-sort"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.id') ?></th>
                            <th class="no-sort" width="20%"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.title') ?></th>
                            <th class="no-sort" width="10%"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.category') ?></th>
                            <th class="no-sort"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.status') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.created') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.updated') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.read') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.author') ?></th>
                            <th class="no-sort" width="15%">&nbsp;</th>
                        </tr>
                    </thead>
                    <?php if (!empty($articles)) { ?>
                        <tbody>
                            <?php foreach ($articles as $article) { ?>
                                <tr>
                                    <td>
                                        <?= $article['id'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= $this->url->get('articles/write?id=' . $article['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <?= $article['title'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php foreach ($article['categories'] as $ck => $cv) { ?>
                                            <?php if ($ck == 0) { ?>
                                                <a href="<?= $this->url->get('articles/index?id_category=' . $cv['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.view') ?>">
                                                    <?= $cv['name'] ?>
                                                </a>
                                            <?php } else { ?>
                                                ,<a href="<?= $this->url->get('articles/index?id_category=' . $cv['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.view') ?>">
                                                    <?= $cv['name'] ?>
                                                </a>
                                            <?php } ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($article['status'] == 1) { ?>
                                            <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.public') ?>
                                        <?php } elseif ($article['status'] == -1) { ?>
                                            <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.private') ?>
                                        <?php } else { ?>
                                            <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.disable') ?>
                                        <?php } ?>
                                    </td>
                                    <td data-order="<?php echo strtotime($article['create_time']); ?>"><?= $article['create_time'] ?></td>
                                     <td data-order="<?php echo strtotime($article['modify_time']); ?>"><?= $article['modify_time'] ?></td>
                                    <td><?= $article['view_number'] ?></td>
                                    <td><?= $userinfo['realname'] ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="/tin/<?= $article['slug'] ?>-<?= $article['id'] ?>.html/review" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.view') ?>" target="_blank">
                                            <i class="fa fa-eye bigger-120"></i>
                                        </a>
                                        <a class="btn btn-xs btn-info" href="<?= $this->url->get('articles/write?id=' . $article['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <i class="icon-edit bigger-120"></i>
                                        </a>
                                        <?php if ($article['is_top'] == 1) { ?>
                                            <a class="btn btn-xs btn-success" href="<?= $this->url->get('articles/top?type=0&id=' . $article['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.unpin-top') ?>">
                                                <i class="icon-arrow-down"></i>
                                            </a>
                                        <?php } else { ?>
                                            <a class="btn btn-xs btn-success" href="<?= $this->url->get('articles/top?type=1&id=' . $article['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.pin-top') ?>">
                                                <i class="icon-arrow-up"></i>
                                            </a>
                                        <?php } ?>
                                        <?php if ($article['is_recommend'] == 1) { ?>
                                            <a class="btn btn-xs btn-primary" href="<?= $this->url->get('articles/recommend?type=0&id=' . $article['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.unpin-recommend') ?>">
                                                <i class="icon-heart"></i>
                                            </a>
                                        <?php } else { ?>
                                            <a class="btn btn-xs btn-primary" href="<?= $this->url->get('articles/recommend?type=1&id=' . $article['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.pin-recommend') ?>">
                                                <i class="icon-heart-empty"></i>
                                            </a>
                                        <?php } ?>
                                        <button class="btn btn-xs btn-danger delete-articles" data-url="<?= $this->url->get('articles/delete?id=' . $article['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.delete') ?>">
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
            </div>
        </div>
    </div>
</div>
<link href="/backend/ace/css/datatable.css?v=1" rel="stylesheet"/>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tblData').DataTable({
            "order": [[ 4, "desc" ]],
            "iDisplayLength": 50,
            "bLengthChange": false,
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            "language": {
                "sProcessing":   "Đang xử lý...",
                "sLengthMenu":   "Xem _MENU_ mục",
                "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
                "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
                "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                "sInfoPostFix":  "",
                "sSearch":       "Tìm:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Đầu",
                    "sPrevious": "Trước",
                    "sNext":     "Tiếp",
                    "sLast":     "Cuối"
                }
            }
        });
    } );
</script>

<script>
    $('.delete-articles').on('click', function(){
        var dataUrl = $.trim($(this).attr('data-url'));
        if(!window.confirm("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.is-delete-selected') ?>")){
            return false;
        }
        window.location.href = dataUrl;
    });
</script>