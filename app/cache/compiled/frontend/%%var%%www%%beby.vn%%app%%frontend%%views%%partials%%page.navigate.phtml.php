<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPTZG8S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h1>
                    <a class="logo-top" href="/du-an/<?= $data['page']['alias']; ?>.html" title="">
                        <?php if(isset($data['page']['logo'])): ?>
                        <img id="logo" src="<?= $data['page']['logo']; ?>">
                        <?php endif; ?>
                    </a>
                </h1>
            </div>
            <div class="col-sm-8">
                <div id="call">
                    <?php if(isset($data['page']['phone'])): ?>
                        <p id="call-text">
                            Liên hệ PKD
                            <a href="tel:<?= $data['page']['phone']; ?>">
                                <span id="num">
                                    <?= $data['page']['phone']; ?>
                                </span>
                            </a>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>