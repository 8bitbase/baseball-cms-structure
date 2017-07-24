<header class="container">
    <div class="banner-top">
        <?php if (!empty($bannerTopHeader)) { ?>
        <a href="<?= $bannerTopHeader['url'] ?>">
            <img src="<?= $bannerTopHeader['banner'] ?>" alt="banner top" width="100%" style="max-width: 1250px; max-height: 135px;" />
        </a>
        <?php } ?>
    </div>
    <div class="logo row">
        <div class="col-md-2 col-xs-6">
            <div style="text-align:center;">
                <a href="<?= $siteUrl ?>" title="<?= $siteTitle ?>">
                    <img src="<?= $siteLogo ?>" alt="<?= $siteTitle ?>"/>
                </a>
            </div>
        </div>
        <div class="col-md-10">
            <?php if (!empty($menuList[1])) { ?>
            <ul class="menu-top col-md-3 col-xs-6">
                <li role="presentation" class="dropdown tile-main">
                    <div href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>  DANH MỤC</div>
                    <ul class="dropdown-menu tile-sub">
                        <!--<li role="separator" class="divider"></li>-->
                        <?php foreach ($menuList as $menu) { ?>
                            <?php if ($menu['parent'] == 1) { ?>
                                <li><a href="<?= $menu['url'] ?>"><?= $menu['name'] ?></a></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
            <?php } ?>
        </div>
    </div>
    <nav>
        <div class="navbar-header col-md-12">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        </div>
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse gray dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <?php if($menuList[2]): ?>
            <ul id="menu-master" class="nav navbar-nav">
                <?php 
                    foreach ($menuList as $menu): 
                        if ($menu['parent'] == 2):
                ?>
                    <?php
                        $sub = '';
                        foreach($menuList as $subMenu) {
                            if ($subMenu['parent'] == $menu['id']) {
                                $sub = '<li><a href="' . $subMenu['url'] . '">' . $subMenu['name'] . '</a></li>';
                            }
                        }
                    ?>
                <li itemscope="itemscope" class="menu-item">
                    <a href="<?= $menu['url'] ?>" <?php if ($sub != ''):?>class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" <?php endif; ?>><?= $menu['name'] ?></a>
                    <?php if ($sub != ''):?>
                    <ul class="dropdown-menu tile-sub">
                        <?= $sub; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php
                        endif;
                    endforeach;
                ?>
            </ul>
            <?php endif; ?>
        </div>
    </nav>
</header>
