<?php
    $js = '/sale-page/assets/js/';
    $css = '/sale-page/assets/css/';
    $cssver = '1.3.0';
    $front = '/sale-page/';
    $img = '/sale-page/assets/images/';
    $jsver = '3.2.4';
?>

<div aria-labelledby="myModalLabel" class="modal fade" id="showMessage" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-popup">
                <div class="row">
                    <div class="btn-close-popup">
                        <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" data-dismiss="modal">
                        </span>
                    </div>
                    <div class="col-xs-12 popup-message" id="loadMessage" style="text-align: center;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if(!empty($data['page']['is_popup']) && $data['page']['is_popup'] == 1): ?>
<div aria-labelledby="myModalLabel" class="modal fade" id="showPopup" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-popup">
                <div class="row">
                    <div class="btn-close-popup">
                        <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" data-dismiss="modal">
                        </span>
                    </div>
                    <!-- <span class="background-absolute hidden-xs">
                    </span> -->
                    <div class="col-md-8 col-sm-6 hidden-xs">
                        <img src="<?= $data['page']['popup_image']; ?>" style="width: 100%;background: #000;min-height: 550px;border: none;"/>
                    </div>
                    <div class="col-sm-6 col-md-4 popup-form row hidden-xs">
                        <div class="clearfix">
                        </div>
                        <div class="popup_discription">
                            <?php echo $data['page']['popup_description']; ?>
                        </div>
                        <div class="message_form">
                            <?php //echo $this->load->view('masterlayout/realtor/form_vertical_popup', $data['page'], true)?>
                            <?= $this->partial('partials/page.form_vertical_popup') ?>
                        </div>
                        <div class="error_message text-danger col-sm-12" style="display: none;"></div>
                    </div>
                    <div class="col-xs-12 hidden-sm hidden-md hidden-lg popup-form">
                        <div class="clearfix">
                        </div>
                        <div class="popup_discription">
                            <?php echo $data['page']['popup_description']; ?>
                        </div>
                        <div class="message_form">
                            <?php //echo $this->load->view('masterlayout/realtor/form_vertical_popup', $data['page'], true)?>
                            <?= $this->partial('partials/page.form_vertical_popup') ?>
                        </div>
                        <div class="error_message text-danger col-sm-12" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<footer class="site-footer">
                <div class="wrap">
                    <div id="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="sites">
                                        <?php if(!empty($data['menuProject'])): ?>
                                            <?php foreach ($data['menuProject'] as $key => $item): ?>
                                                <a href="<?= $item['url']; ?>">
                                                    <?= $item['name']; ?>
                                                </a>
                                                <?php if($key+1 < count($data['menuFooter'])): ?>
                                                <span class="sep">|</span>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </p>
                                    <p class="text">
                                        <?= $data['page']['copyright'] ?>
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <ul id="social-links">
                                        <?php if(!empty($data['page']['link_linkedin'])): ?>
                                        <li>
                                            <a href="<?= $data['page']['link_linkedin'] ?>" id="link-linkedin" rel="nofollow" title="Linkedin">
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(!empty($data['page']['link_facebook'])): ?>
                                        <li>
                                            <a href="<?= $data['page']['link_facebook'] ?>" id="link-facebook" rel="follow" title="facebook">
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(!empty($data['page']['link_twitter'])): ?>
                                        <li>
                                            <a href="<?= $data['page']['link_twitter'] ?>" id="link-twitter" rel="nofollow" title="twitter">
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(!empty($data['page']['link_google'])): ?>
                                        <li>
                                            <a href="<?= $data['page']['link_google'] ?>" id="link-google" rel="nofollow" title="google">
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(!empty($data['page']['link_youtube'])): ?>
                                        <li>
                                            <a href="<?= $data['page']['link_youtube'] ?>" id="link-youtube" rel="nofollow" title="youtube">
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <?php if(isset($data['page']['phone'])): ?>
                <a href="tel:<?= $data['page']['phone']; ?>" class="btn_phone">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                    <?= $data['page']['phone']; ?>
                </a>
            <?php endif; ?>
        </div>
        <link href="<?=$front?>assets/plugins/gravityforms/css/formreset.min21f2.css?ver=<?= $jsver; ?>" id="gforms_reset_css-css" media="all" rel="stylesheet" type="text/css"/>
        <link href="<?=$front?>assets/plugins/gravityforms/css/formsmain.min21f2.css?ver=<?= $jsver; ?>" id="gforms_formsmain_css-css" media="all" rel="stylesheet" type="text/css"/>
        <link href="<?=$front?>assets/plugins/gravityforms/css/readyclass.min21f2.css?ver=<?= $jsver; ?>" id="gforms_ready_class_css-css" media="all" rel="stylesheet" type="text/css"/>
        <link href="<?=$front?>assets/plugins/gravityforms/css/browsers.min21f2.css?ver=<?= $jsver; ?>" id="gforms_browsers_css-css" media="all" rel="stylesheet" type="text/css"/>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?=$js?>bootstrap.min55a0.js?ver=<?= $jsver; ?>" type="text/javascript">
        </script>
        <script src="<?=$js?>master.js?ver=<?= $jsver; ?>" type="text/javascript">
        </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/589c75d66398130aabc780b7/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '264033967363458',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    </body>
</html>