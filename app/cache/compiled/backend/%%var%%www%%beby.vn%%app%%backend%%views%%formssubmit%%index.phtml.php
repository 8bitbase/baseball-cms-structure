<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('forms-submit/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('forms-submit-management') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('forms-submit/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('forms-submit-management') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('list') ?>
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form class="form-horizontal" role="form">
                <div class="form-group">
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
                </div>
            </form>
            <div class="table-responsive">
                <table class="table tree-grid table-striped table-bordered table-condensed table-hover" id="test-table">
                    <thead>
                        <tr>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.id') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.fullname') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.email') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.phone') ?></th>
                            <th><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.ip') ?></th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <?php if (!empty($formsSubmit)) { ?>
                        <tbody>
                            <?php foreach ($formsSubmit as $formsSubmit) { ?>
                                <tr>
                                    <td>
                                        <?= $formsSubmit['id'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= $this->url->get('forms-submit/write?id=' . $formsSubmit['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <?= $formsSubmit['fullname'] ?>
                                        </a>
                                        
                                    </td>
                                    <td>
                                        <?= $formsSubmit['email'] ?>
                                    </td>
                                    <td>
                                        <?= $formsSubmit['phone'] ?>
                                    </td>
                                    <td>
                                        <?= $formsSubmit['ip'] ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="<?= $this->url->get('forms-submit/write?id=' . $formsSubmit['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.edit') ?>">
                                            <i class="fa fa-eye bigger-120"></i>
                                        </a>
                                        <button class="btn btn-xs btn-danger delete-formsSubmit" data-url="<?= $this->url->get('forms-submit/delete?id=' . $formsSubmit['id']) ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.delete') ?>">
                                            <i class="icon-trash bigger-120"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    <?php } else { ?>
                        <tbody>
                        <tr>
                            <td colspan="6"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.no-data') ?></td>
                        </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <?php if (!empty($formsSubmit)) { ?>
                    <?= $this->partial('public/paginator') ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
    $('.delete-formsSubmit').on('click', function(){
        var dataUrl = $.trim($(this).attr('data-url'));
        if(!window.confirm("<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('alert.is-delete-selected') ?>")){
            return false;
        }
        window.location.href = dataUrl;
    });
</script>