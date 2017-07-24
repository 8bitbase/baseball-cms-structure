<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('banners/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.banners') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('banners/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.banners') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('info-change') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#users" data-toggle="tab"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.banner') ?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="banners">
                <form action="<?= $this->url->get('banners/publish') ?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="save-banners-form">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.name') ?></label>
                        <div class="col-sm-5">
                            <input type="text" autocomplete="off" <?php if (!empty($banners->name)) { ?>value="<?= $banners->name ?>" <?php } ?> class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="url" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.url') ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="url" value="<?php if (!empty($banners->url)) { ?><?= $banners->url ?><?php } ?>" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.position') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                    <select class="form-control" id="position" name="position">
                                    <?php foreach ($positions as $index => $position) { ?>
                                        <option value="<?= $index ?>" <?php if (!empty($banners->position) && $banners->position == $index) { ?> selected <?php } ?>><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_($position) ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="radio form-group">
                        <div class="col-sm-1 col-sm-offset-2">
                            <label>
                                <input id="input_file" name="check-banner" <?php if (!empty($banners->banner) || empty($banners->banner) && empty($banners->html)) { ?>checked<?php } ?> type="radio" class="ace"/>
                                <span class="lbl"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.banner') ?></span>
                            </label>
                        </div>
                        <div class="col-sm-1">
                            <label>
                                <input id="input_html" name="check-banner" <?php if (!empty($banners->html)) { ?>checked<?php } ?> type="radio" class="ace" />
                                <span class="lbl"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.html') ?></span>
                            </label>
                        </div>
                    </div>
                    <div id="group_html" class="form-group" <?php if (!empty($banners->banner) || empty($banners->banner) && empty($banners->html)) { ?>style="display:none"<?php } ?>>
                        <label for="html" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.html') ?></label>
                        <div class="col-sm-5 has-success">
                            <textarea id="html" name="html" class="tinymce autosize-transition form-control" autocomplete="off"><?php if (!empty($banners->html)) { ?><?= $banners->html ?><?php } ?></textarea>
                            <div class="help-block col-xs-12 col-sm-reset">
                                Width = 100%
                            </div>
                        </div>
                    </div>
                    <div id="group_file" class="form-group" <?php if (!empty($banners->html)) { ?>style="display:none"<?php } ?>>
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.banner') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3 has-success">
                                    <label>
                                        <input name="banner" id="banner" class="ace ace-switch ace-switch-4 btn-flat" type="file" accept="image/*" />
                                        <div class="help-block col-xs-12 col-sm-reset">
                                            File size max: 2MB
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="display:none" id="review">
                        <label for="archive-name" class="col-sm-2 control-label"></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>
                                        <img id="review-banner" src="#" alt="Banner" class="img-responsive" />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.random') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label>
                                        <input name="is_fixed" id="is_fixed" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if ((!empty($banners->is_fixed) && $banners->is_fixed == 1) || empty($banners->id)) { ?> checked="checked"<?php } ?> />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.fixed') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label>
                                        <input name="fixedtime" id="fixedtime" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="0" <?php if (!empty($banners->start_fixed)) { ?> checked="checked" <?php } ?> />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group fixedtime-input" <?php if ((!empty($banners->is_fixed) && $banners->is_fixed == 1) || empty($banners->id)) { ?> style="display:none" <?php } ?>>
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-5">
                            <div class="col-sm-6">
                                <input type="text" name="starttime" value="<?php if (!empty($banners->start_fixed)) { ?><?= $banners->start_fixed ?><?php } ?>" class="form-control" id="starttime" autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" readonly="readonly" name="endtime" value="<?php if (!empty($banners->end_fixed)) { ?><?= $banners->end_fixed ?><?php } ?>" class="form-control" id="endtime" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.status') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label>
                                        <input name="status" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($banners->status) && $banners->status == 1) { ?>checked="checked"<?php } ?> />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <input type="hidden" <?php if (!empty($banners->id)) { ?> value="<?= $banners->id ?>" <?php } ?> class="form-control" name="id" id="id">
                            <button type="submit" id="save-banners-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="<?= $this->url->getStatic('tagsinput/jquery.tagsinput.css?_v=') . $assetsVersion ?>" />
<script src="<?= $this->url->getStatic('tagsinput/jquery.tagsinput.js?_v=') . $assetsVersion ?>"></script>
<script src="<?= $this->url->getStatic('my97datepicker/WdatePicker.js?_v=') . $assetsVersion ?>"></script>
<script>
    $('.fixedtime-input').on('click', function(){
        WdatePicker({
            dateFmt:'yyyy-MM-dd HH:mm'
        });
    });
    $('#fixedtime').on('change', function () {
        var fixedtime = $('#fixedtime')[0].checked;
        $('#is_fixed').attr('checked', !fixedtime);
        if (!fixedtime) {
            $('.fixedtime-input').hide();
        } else {
            $('.fixedtime-input').show();
        }
    });

    $('#is_fixed').on('change', function () {
        var is_fixed = $('#is_fixed')[0].checked;
        $('#fixedtime').attr('checked', !is_fixed);
        if (is_fixed) {
            $('.fixedtime-input').hide();
            $('input[name=starttime], input[name=endtime]').val('');
        }
    });

    function review_banner(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#review-banner').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            $('#review').show();
        } else {
            $('#review').hide();
        }
    };

    $('#banner').change(function(){
        review_banner(this);
    });

    $('#input_file').on('click', function(){
       $('#group_file').show()
       $('#group_html').hide();
       $('#html').val('');
    });
    
    $('#input_html').on('click', function(){
       $('#group_file').hide();
       $('#group_html').show();
       $('input[type=file]').val('');
       $('#review').hide();
    });
</script>
