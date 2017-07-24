<div class="navbar-container" id="navbar-container">
    <div class="navbar-header pull-left">
        <a href="<?= $this->url->get('dashboard/index') ?>" class="navbar-brand">
            <small>
                <i class="icon-leaf"></i>
                <?= $title ?>
            </small>
        </a>
    </div>

    <div class="navbar-header pull-right" role="navigation">
        <ul class="nav ace-nav">
            <li class="light-blue">
                <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                    <span class="user-info">
                        <small><?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('welcome') ?>,</small>
                        <?= $userinfo['username'] ?>
                    </span>
                    <i class="icon-caret-down"></i>
                </a>
                <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                    <li>
                        <a href="<?= $this->url->get('account/profile') ?>">
                            <i class="icon-user"></i>
                            <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('profile') ?>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?= $this->url->get('passport/logout') ?>">
                            <i class="icon-off"></i>
                            <?= \Lcd\App\Helpers\LangHelper::getTranslation()->_('logout') ?>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>