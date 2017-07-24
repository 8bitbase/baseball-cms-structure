<!--Start main-content-post -->
<div class="main-content-post container">
   <?php if (!empty($category)) { ?>
   <ol class="breadcrumb margin-top15">
      <?php foreach ($category['parents'] as $item) { ?>
         <li class="breadcrumb-item"><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'categoryNews') ?>"><?= $item['name'] ?></a></li>
      <?php } ?>
      <li class="breadcrumb-item"><?= $category['name'] ?></li>
   </ol>
   <?php } ?>
   <div class="row">
      <div class="col-md-12">
         <!--Start content left -->
         <div class="col-md-9 content-post">
            <div class="row">
               <h4 class="title-catelogy"><?= $article['title'] ?></h4>
               <p><span><?= $article['create_time'] ?></span> - Người đăng: <b><?= $article['username'] ?></b></p>
               <p><?= $article['introduce'] ?></p>
               <!-- Start tin tức khác -->
               <?php if (!empty($articlesLink)) { ?>
               <ul style="margin:0;" class="list-img ulpadding-left25">
                  <?php foreach ($articlesLink as $item) { ?>
                  <li><b><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>" alt="<?= $item['title'] ?>"><?= $item['title'] ?></a></b></li>  
                  <?php } ?>
               </ul>
               <?php } ?>
               <!-- End tin tức khác -->
               <!-- Start nội dung chính của bài viết -->
               <div class="margin-top15">
                  <?= $article['content'] ?>
               </div>
               <!-- End nội dung chính của bài viết -->
               <!-- Start nội dung quảng cáo 1 -->
               <div class="col-md-12">
                  <?php if (!empty($advertiseContent1)) { ?>
                     <?= $advertiseContent1[0]['html'] ?>
                  <?php } ?>
               </div>
               <!-- End nội dung quảng cáo 1 -->
               <!-- Start tin tức khác -->
               <?php if (!empty($articlesLink)) { ?>
               <div class="col-md-12">
                  <div class="row">
                     <h4 class="title-catelogy">Tin tức khác</h4>
                  </div>
               </div>
               <div class="row margin-bottom">
                  <?php foreach ($articlesLink as $index => $item) { ?>
                     <?php if ($index < 3) { ?>
                     <div class="col-md-4">
                        <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>">
                           <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>" width="100%">
                           <p class="title"><a href="#"><?= $item['title'] ?></a></p>
                        </a>
                     </div>  
                     <?php } ?>
                  <?php } ?>
               </div>
               <div class="row margin-bottom">
                  <div class="col-md-6">
                     <ul class="ulpadding-left15">
                        <?php if (!empty($articlesLink[3])) { ?>
                           <?php foreach ($articlesLink as $index => $item) { ?>
                              <?php if ($index > 2 && $index < 6) { ?>
                              <li><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>"><?= $item['title'] ?></a></li>
                              <?php } ?>
                           <?php } ?>
                        <?php } ?>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <ul class="ulpadding-left15">
                        <?php if (!empty($articlesLink[6])) { ?>
                           <?php foreach ($articlesLink as $index => $item) { ?>
                              <?php if ($index > 5 && $index < 9) { ?>
                              <li><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>"><?= $item['title'] ?></a></li>
                              <?php } ?>
                           <?php } ?>
                        <?php } ?>
                     </ul>
                  </div>
               </div>
               <?php } ?>
               <!-- End tin tức khác --> 
               <!-- Start tin tức danh mục khác -->
               <div class="col-md-12">
                  <div class="row">
                     <h4 class="title-catelogy">Tin tức danh mục khác</h4>
                  </div>
               </div>
               <div class="row margin-bottom">
                  <div class="col-md-6">
                     <ul class="ulpadding-left15">
                        <?php if (!empty($articlesCategoryOther)) { ?>
                           <?php foreach ($articlesCategoryOther as $index => $item) { ?>
                              <?php if ($index < 3) { ?>
                              <li><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>"><?= $item['title'] ?></a></li>
                              <?php } ?>
                           <?php } ?>
                        <?php } ?>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <ul class="ulpadding-left15">
                        <?php if (!empty($articlesCategoryOther[3])) { ?>
                           <?php foreach ($articlesCategoryOther as $index => $item) { ?>
                              <?php if ($index > 2) { ?>
                              <li><a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>"><?= $item['title'] ?></a></li>
                              <?php } ?>
                           <?php } ?>
                        <?php } ?>
                     </ul>
                  </div>
               </div>
               <!-- End tin tức danh mục khác -->
            </div>
         </div>
         <!--Start main-content-post right -->
         <aside class="col-md-3 padding-right0 padding-mobileleft0">
            <!--Start tin nổi bất-->
            <div class="row margin-bottom">
               <div class="col-md-12">
                  <h4 class="yellow margin0">Tin nổi bật</h4>
               </div>
            </div>
            <div class="news-nb row">
               <div class="col-md-12">
                  <?php foreach ($specialFirst as $item) { ?>
                  <div class="col-md-12 margin-bottom">
                     <div class="row">
                        <div class="col-md-4 col-xs-12 padding0">
                           <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>">
                           <img src="<?= $item['image'] ?>" alt="hình" width="100%">
                           </a>
                        </div>
                        <p class="col-md-8 col-xs-12 title-mobile">
                        <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>">
                           <?= $item['title'] ?>
                        </a></p>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
            <!--End tin nổi bất-->
            <!-- Start quảng cáo -->
            <!-- End quảng cáo -->
            <?php if (!empty($advertiseRight1)) { ?>
            <div class="margin-bottom row">
               <div class="banner col-md-12">
                  <a href="<?= $advertiseRight1[0]['url'] ?>">
                  <img src="<?= $advertiseRight1[0]['banner'] ?>" alt="<?= $advertiseRight1[0]['name'] ?>" width="100%">
                  </a>
               </div>
            </div>
            <?php } ?>
            <!-- End quảng cáo -->
            <!-- Start quảng cáo -->
            <?php if (!empty($advertiseRight2)) { ?>
            <div class="margin-bottom row">
               <div class="banner col-md-12">
                  <?php if (!empty($advertiseRight2[0]['html'])) { ?>
                     <?= $advertiseRight2[0]['html'] ?>
                  <?php } else { ?>
                     <a href="<?= $advertiseRight2[0]['url'] ?>">
                        <img src="<?= $advertiseRight2[0]['banner'] ?>" alt="<?= $advertiseRight2[0]['name'] ?>" width="100%">
                     </a>
                  <?php } ?>
               </div>
            </div>
            <?php } ?>
            <!-- End quảng cáo -->
            <!--Start tin nổi bất-->
            <div class="row margin-bottom">
               <div class="col-md-12">
                  <h4 class="green margin0">Tin được đọc nhiều</h4>
               </div>
            </div>
            <div class="news-nb row">
               <div class="col-md-12">
                  <?php foreach ($specialMost as $item) { ?>
                  <div class="col-md-12 margin-bottom">
                     <div class="row">
                        <div class="col-md-4 col-xs-12 padding0">
                           <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'news') ?>">
                           <img src="<?= $item['image'] ?>" alt="hình" width="100%">
                           </a>
                        </div>
                        <p class="col-md-8 col-xs-12 title-mobile">
                        <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>">
                           <?= $item['title'] ?>
                        </a></p>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
            <!--End tin đọc nhiều-->
            <!-- Start quảng cáo -->
            <?php if (!empty($advertiseRight3)) { ?>
            <div class="margin-bottom row">
               <div class="banner col-md-12">
                  <?php if (!empty($advertiseRight3[0]['html'])) { ?>
                     <?= $advertiseRight3[0]['html'] ?>
                  <?php } else { ?>
                     <a href="<?= $advertiseRight3[0]['url'] ?>">
                        <img src="<?= $advertiseRight3[0]['banner'] ?>" alt="<?= $advertiseRight3[0]['name'] ?>" width="100%">
                     </a>
                  <?php } ?>
               </div>
            </div>
            <?php } ?>
            <!-- End quảng cáo -->
            <!--Start tin nổi bất-->
            <div class="row margin-bottom">
               <div class="col-md-12">
                  <h4 class="yellow margin0">Tin nổi bật</h4>
               </div>
            </div>
            <div class="news-nb row">
               <div class="col-md-12">
                  <?php foreach ($specialSecond as $item) { ?>
                  <div class="col-md-12 margin-bottom">
                     <div class="row">
                        <div class="col-md-4 col-xs-12 padding0">
                           <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>">
                           <img src="<?= $item['image'] ?>" alt="hình" width="100%">
                           </a>
                        </div>
                        <p class="col-md-8 col-xs-12 title-mobile">
                        <a href="<?= \Lcd\App\Helpers\UrlHelper::getUrl($item['slug'] . '', '' . $item['id'] . '', 'article') ?>">
                           <?= $item['title'] ?>
                        </a></p>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
            <!--End tin nổi bất-->
            <!-- Start quảng cáo -->
            <?php if (!empty($advertiseRight4)) { ?>
            <div class="margin-bottom row">
               <div class="banner col-md-12">
                  <?php if (!empty($advertiseRight4[0]['html'])) { ?>
                     <?= $advertiseRight4[0]['html'] ?>
                  <?php } else { ?>
                     <a href="<?= $advertiseRight4[0]['url'] ?>">
                        <img src="<?= $advertiseRight4[0]['banner'] ?>" alt="<?= $advertiseRight4[0]['name'] ?>" width="100%">
                     </a>
                  <?php } ?>
               </div>
            </div>
            <?php } ?>
            <!-- End quảng cáo -->
         </aside>
         <!--End content-post right --> 
      </div>
   </div>
</div>
<!--End main-content-post -->
<!-- Start quảng cáo banner hình ảnh -->
<?php if (!empty($advertiseFoot1)) { ?>
<div class="container margin-bottom">
   <div class="row">
      <?php foreach ($advertiseFoot1 as $item) { ?>
      <div class="col-md-6 margin-bottom-mobile-10">
         <?php if (!empty($item['html'])) { ?>
            <?= $item['html'] ?>
         <?php } else { ?>
            <a href="<?= $item['url'] ?>">
               <img src="<?= $item['banner'] ?>" alt="<?= $item['name'] ?>" width="100%">
            </a>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</div>
<?php } ?>
<!-- End Quảng cáo banner hình ảnh -->
<!-- Start tin tức quảng cáo loại 2 -->
<?php if (!empty($advertiseFoot2)) { ?>
      <?= $advertiseFoot2['html'] ?>
<?php } ?>
<!-- End Tin tức quảng cáo loại 2 -->
<!--End main-content -->
<!-- Start tin tức quảng cáo loại 3 -->
<?php if (!empty($advertiseFoot3)) { ?>
      <?= $advertiseFoot3['html'] ?>
<?php } ?>
<!-- End Tin tức quảng cáo loại 3 -->
<!-- Start tin tức quảng cáo loại 4 -->
<?php if (!empty($advertiseFoot4)) { ?>
      <?= $advertiseFoot4['html'] ?>
<?php } ?>
<!-- End Tin tức quảng cáo loại 4 -->
