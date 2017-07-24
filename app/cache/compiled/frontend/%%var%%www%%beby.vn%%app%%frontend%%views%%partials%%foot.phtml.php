<footer>
    <div class="container">
        <div class="col-md-12 yellow">
            <div class="row">
                <div class="col-md-4">
                    <?php if (!empty($menuList[3])) { ?>
                    <h4 class="h4margin-bottom0"><?= $menuList[3]['name'] ?></h4>
                    <ul class="no-list ulpadding-left10">
                        <?php foreach ($menuList as $menu) { ?>
                            <?php if ($menu['parent'] == 3) { ?>
                            <li>
                                <a href="<?= $menu['url'] ?>"><?= $menu['name'] ?></a>
                            </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>
                <div class="col-md-4">
                    <?php if (!empty($menuList[4])) { ?>
                    <h4 class="h4margin-bottom0"><?= $menuList[4]['name'] ?></h4>
                    <ul class="no-list ulpadding-left10">
                        <?php foreach ($menuList as $menu) { ?>
                            <?php if ($menu['parent'] == 4) { ?>
                            <li>
                                <a href="<?= $menu['url'] ?>"><?= $menu['name'] ?></a>
                            </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>
                <div class="col-md-4">
                    <?php if (!empty($menuList[5])) { ?>
                    <h4 class="h4margin-bottom0"><?= $menuList[5]['name'] ?></h4>
                    <ul class="no-list ulpadding-left10">
                        <?php foreach ($menuList as $menu) { ?>
                            <?php if ($menu['parent'] == 5) { ?>
                            <li>
                                <a href="<?= $menu['url'] ?>"><?= $menu['name'] ?></a>
                            </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12" style="text-align:center;background:#eee;padding:10px 0 0px 0;color:#848484;">
            <p>@<?= date('Y') ?> - bản quyền của công ty Logo</p>
        </div>
    </div>
</footer>