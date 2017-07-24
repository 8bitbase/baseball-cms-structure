<!-- Banner quảng cáo 2 bên-->

<div id="divAdRight" style="display: block; position: fixed; top: 0px;">
<?php if (!empty($bannerRightHeader)) { ?>
    <?php foreach ($bannerRightHeader as $banner) { ?>
        <p><a href="<?= $banner['url'] ?>"><img src="<?= $banner['banner'] ?>" width="125" /></a></p>
    <?php } ?>
<?php } ?>
</div>
<div id="divAdLeft" style="display: block; position: fixed; top: 0px;">
<?php if (!empty($bannerLeftHeader)) { ?>
    <?php foreach ($bannerLeftHeader as $banner) { ?>
        <p><a href="<?= $banner['url'] ?>"><img src="<?= $banner['banner'] ?>" width="125" /></a></p>
    <?php } ?>
<?php } ?>
</div>
