<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('forms_submit/forms_submit') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('forms_submit') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('categorys/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('forms_submit') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('info-change') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#forms_submit" data-toggle="tab"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('forms_submit') ?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="forms_submit">
                <form action="<?= $this->url->get('forms-submit/publish') ?>" method="post" class="form-horizontal" id="save-forms_submit-form">
                    <div class="form-group">
                        <label for="fullname" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.fullname') ?></label>
                        <div class="col-sm-5">
                            <input type="text" <?php if (!empty($formsSubmit)) { ?>value="<?= $formsSubmit['fullname'] ?>" <?php } ?> class="form-control" id="fullname" name="fullname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.email') ?></label>
                        <div class="col-sm-5">
                            <input type="text" <?php if (!empty($formsSubmit)) { ?>value="<?= $formsSubmit['email'] ?>" <?php } ?> class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.phone') ?></label>
                        <div class="col-sm-5">
                            <input type="text" <?php if (!empty($formsSubmit)) { ?>value="<?= $formsSubmit['phone'] ?>" readonly="" <?php } ?> class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.address') ?></label>
                        <div class="col-sm-5">
                            <input type="text" <?php if (!empty($formsSubmit)) { ?>value="<?= $formsSubmit['address'] ?>" readonly="" <?php } ?> class="form-control" id="address" name="address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.link') ?></label>
                        <div class="col-sm-5">
                            <input type="text" <?php if (!empty($formsSubmit)) { ?>value="<?= $formsSubmit['link'] ?>" readonly="" <?php } ?> class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.browser') ?></label>
                        <div class="col-sm-5">
                            <input type="text" <?php if (!empty($formsSubmit)) { ?>value="<?= $formsSubmit['browser'] ?>" readonly="" <?php } ?> class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.ip') ?></label>
                        <div class="col-sm-5">
                            <input type="text" <?php if (!empty($formsSubmit)) { ?>value="<?= $formsSubmit['ip'] ?>" readonly="" <?php } ?> class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.device') ?></label>
                        <div class="col-sm-5">
                            <input type="text" <?php if (!empty($formsSubmit)) { ?>value="<?= $formsSubmit['device'] ?>" readonly="" <?php } ?> class="form-control">
                        </div>
                    </div>

                    <?php if (!empty($formsSubmit['plus'])) { ?>
                        <?php foreach ($formsSubmit['plus'] as $item) { ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?= $item['key'] ?></label>
                                <div class="col-sm-5">
                                    <input type="text" <?php if (!empty($item['value'])) { ?>value="<?= $item['value'] ?>" readonly="" <?php } ?> class="form-control">
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <!-- <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <input type="hidden" <?php if (!empty($formsSubmit->id)) { ?> value="<?= $formsSubmit->id ?>" <?php } ?> class="form-contro   l" name="id" id="id">
                            <button type="submit" id="save-forms_submit-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('save') ?></button>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#save-forms_submit-btn').on('click', function(){
        var email = $.trim($('#full_name').val());
        if(!full_name){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.correct') ?>');
            return false;
        }

        $('#save-forms_submit-form').submit();
    });
</script>