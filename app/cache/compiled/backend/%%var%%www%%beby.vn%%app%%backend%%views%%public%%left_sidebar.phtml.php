<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <a class="btn btn-success" href="<?= $this->url->get('dashboard/index') ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?>">
            <i class="icon-signal"></i>
        </a>
        <a class="btn btn-info" href="<?= $this->url->get('articles/write') ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('article-management') ?>">
            <i class="icon-pencil"></i>
        </a>
        <a class="btn btn-warning" href="<?= $this->url->get('users/index') ?>" title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('users') ?>">
            <i class="icon-group"></i>
        </a>
        <a class="btn btn-danger" href="<?= $this->url->get('options/base') ?>"title="<?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('site-setting') ?>">
            <i class="icon-cogs"></i>
        </a>
    </div>
    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>
        <span class="btn btn-info"></span>
        <span class="btn btn-warning"></span>
        <span class="btn btn-danger"></span>
    </div>
</div>
<ul class="nav nav-list" id="sidebar-box">
    <?php if (!empty($userinfo['access'][1]) || $userinfo['id_profile'] == 1) { ?>
    <li>
        <a href="<?= $this->url->get('dashboard/index') ?>">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('dashboard') ?> </span>
        </a>
    </li>
    <?php } ?>
    <li>
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text"> <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('content-management') ?> </span>
            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?= $this->url->get('categories/index') ?>">
                    <i class="icon-double-angle-right"></i>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('category-management') ?>
                </a>
            </li>
            <li>
                <a href="<?= $this->url->get('articles/index') ?>">
                    <i class="icon-double-angle-right"></i>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('article-management') ?>
                </a>
            </li>
            <li>
                <a href="<?= $this->url->get('sale-pages/index') ?>">
                    <i class="icon-double-angle-right"></i>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('sale-page-management') ?>
                </a>
            </li>
            <li>
                <a href="<?= $this->url->get('tags/index') ?>">
                    <i class="icon-double-angle-right"></i>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('tag-management') ?>
                </a>
            </li>
            <li>
                <a href="<?= $this->url->get('menu/index') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('menu-management') ?>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon ace-icon fa fa-certificate"></i>
            <span class="menu-text"> <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('digital-marketing') ?> </span>
            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?= $this->url->get('banners/index') ?>">
                    <i class="icon-double-angle-right"></i>
                    <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('banner-management') ?>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('forms') ?> </span>
            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <?php if (!empty($userinfo['access'][2]) || $userinfo['id_profile'] == 1) { ?>
            <li>
                <a href="<?= $this->url->get('forms/index') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('forms-management') ?> 
                </a>
            </li>
            <?php } ?>
            <?php if (!empty($userinfo['access'][3]) || $userinfo['id_profile'] == 1) { ?>
            <li>
                <a href="<?= $this->url->get('forms-submit/index') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('forms-submit-management') ?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text"> <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('users') ?> </span>
            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <?php if (!empty($userinfo['access'][11]) || $userinfo['id_profile'] == 1) { ?>
            <li>
                <a href="<?= $this->url->get('profile/index') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('profile-management') ?>
                </a>
            </li>
            <?php } ?>
            <?php if (!empty($userinfo['access'][12]) || $userinfo['id_profile'] == 1) { ?>
            <li>
                <a href="<?= $this->url->get('users/index') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('users-management') ?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </li>
    <?php if (!empty($userinfo['access'][9]) || $userinfo['id_profile'] == 1) { ?>
    <li>
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-cogs"></i>
            <span class="menu-text"> <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('site-config') ?> </span>
            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?= $this->url->get('options/base') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('site-setting') ?>
                </a>
            </li>
            <li>
                <a href="<?= $this->url->get('options/mail') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('mail-setting') ?>
                </a>
            </li>
            <li>
                <a href="<?= $this->url->get('options/api') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('api-setting') ?>
                </a>
            </li>
            <li>
                <a href="<?= $this->url->get('options/read') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('view-setting') ?>
                </a>
            </li>
            <li>
                <a href="<?= $this->url->get('modules/index') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('modules') ?>
                </a>
            </li>
            <li>
                <a href="<?= $this->url->get('widget-page/index') ?>">
                    <i class="icon-double-angle-right"></i><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('label.widget-page-management') ?>
                </a>
            </li>
        </ul>
    </li>
    <?php } ?>
</ul>
<div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
</div>
<script type="text/javascript">
    $('#sidebar-box a').each(function(){
        var href = $.trim($(this).attr('href'));
        if(href == window.location.pathname){
            $(this).parent("li").parent("ul").parent("li").addClass("active").addClass("open");
            $(this).parent("li").addClass("active");
            return false;
        }
    });
</script>
