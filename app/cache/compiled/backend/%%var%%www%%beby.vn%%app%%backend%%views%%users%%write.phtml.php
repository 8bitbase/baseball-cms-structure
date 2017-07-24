<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?= $this->url->get('dashboard/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?></a>
        </li>
        <li>
            <a href="<?= $this->url->get('users/users') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.users') ?></a>
        </li>
    </ul>
</div>
<div class="page-content">
    <div class="page-header">
        <h1>
            <a href="<?= $this->url->get('categorys/index') ?>"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.users') ?></a>
            <small>
                <i class="icon-double-angle-right"></i>
                <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('info-change') ?>
            </small>
        </h1>
    </div>
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#users" data-toggle="tab"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.users') ?></a>
            </li>
            <li>
                <a href="#password" data-toggle="tab"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.change-password') ?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="users">
                <form action="<?= $this->url->get('users/publish') ?>" method="post" class="form-horizontal" id="save-users-form">
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.username') ?></label>
                        <div class="col-sm-5">
                            <input type="text" <?php if (!empty($users->username)) { ?>value="<?= $users->username ?>" readonly="" <?php } ?> class="form-control" id="username" name="username">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="realname" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.realname') ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="realname" value="<?php if (!empty($users->realname)) { ?><?= $users->realname ?><?php } ?>" class="form-control" id="realname" autocomplete="off">
                            <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.realname') ?> <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.alpha_numeric_dash') ?></span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="phone" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.phone') ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="phone" value="<?php if (!empty($users->phone)) { ?><?= $users->phone ?><?php } ?>"
                                   class="form-control" id="phone" autocomplete="off">
                            <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('message.phone') ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user-email" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.email') ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="email" value="<?php if (!empty($users->email)) { ?><?= $users->email ?><?php } ?>"
                                   class="form-control" id="user-email" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('email') ?>" autocomplete="off" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.status') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label>
                                        <input name="status" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" value="1" <?php if (!empty($users->status) && $users->status == 1) { ?>checked="checked"<?php } ?> />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="archive-name" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.profile') ?></label>
                        <div class="controls col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-3">
                                    <select class="form-control" id="id_profile" name="id_profile">
                                        <?php if (!empty($profile)) { ?>
                                            <?php foreach ($profile as $profile) { ?>
                                                <option value="<?= $profile['id'] ?>" <?php if (!empty($users->id_profile) && $profile->id == $users->id_profile) { ?> selected <?php } ?>><?= $profile['name'] ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <input type="hidden" <?php if (!empty($users->uid)) { ?> value="<?= $users->uid ?>" <?php } ?> class="form-control" name="usersID" id="usersID">
                            <button type="submit" id="save-users-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="password">
                <form action="<?= $this->url->get('users/savepwd') ?>" method="post" class="form-horizontal" id="save-password-form">
                    <div class="form-group">
                        <label for="new-password" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('new-passwd') ?></label>
                        <div class="col-sm-5">
                            <input type="password" name="newpwd" class="form-control" id="new-password" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('new-passwd') ?>" autocomplete="off" />
                            <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.suggest-length') ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password" class="col-sm-2 control-label"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('confirm-passwd') ?></label>
                        <div class="col-sm-5">
                            <input type="password" name="confirmpwd" class="form-control" id="confirm-password" placeholder="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('confirm-passwd') ?>" autocomplete="off" />
                            <span class="form-tips"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.suggest-correct-pw') ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <input type="hidden" <?php if (!empty($users->uid)) { ?> value="<?= $users->username ?>" <?php } ?> class="form-control" name="username" id="username">
                            <button type="submit" id="save-password-btn" class="btn btn-info btn-sm"><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('change-password') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#save-password-btn').on('click', function(){

        var newpwd = $.trim($('#new-password').val());
        if(newpwd == '' || newpwd == false){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate') ?>');
            return false;
        }
        if(newpwd.length < 6 || newpwd.length > 20){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.suggest-length') ?>');
            return false;
        }

        var confirmpwd = $.trim($('#confirm-password').val());
        if(newpwd != confirmpwd){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.confirm_passwd') ?>');
            return false;
        }

        $('#save-password-form').submit();
    });

    $('#save-users-btn').on('click', function(){
        var realname = $.trim($('#realname').val());
        var realnamePattern = /^[\u4e00-\u9fa5\w-]{2,20}$/i;
        if(!realnamePattern.test(realname)){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.username') ?>');
            return false;
        }

        var email = $.trim($('#user-email').val());
        var emailPattern = /^[_a-z0-9-\.]+@([-a-z0-9]+\.)+[a-z]{2,}$/i;
        if(!emailPattern.test(email)){
            tips_message('<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('validate.correct') ?>');
            return false;
        }

        $('#save-users-form').submit();
    });
</script>