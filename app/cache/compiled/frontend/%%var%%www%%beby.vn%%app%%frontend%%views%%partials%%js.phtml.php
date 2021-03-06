<script type="text/javascript" src="/frontend/bootstrap/js/bootstrap.min.js?v=<?= $assetsVersion ?>"></script>
<script type="text/javascript" src="/frontend/js/owl.carousel.js?v=<?= $assetsVersion ?>"></script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    },
    navText: ["<a class='left carousel-control'><span class='glyphicon glyphicon-chevron-left'></span></a>","<a class='right carousel-control'><span class='glyphicon glyphicon-chevron-right'></span></a>"]
});

function FloatTopDiv() {
    startLX = ((document.body.clientWidth - MainContentW) / 2) - LeftBannerW - LeftAdjust + 5, startLY = TopAdjust + 80;
    startRX = ((document.body.clientWidth - MainContentW) / 2) + MainContentW + RightAdjust - 5, startRY = TopAdjust + 80;
    var d = document;

    function ml(id) {
        var el = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
        el.sP = function(x, y) {
            this.style.left = x + 'px';
            this.style.top = y + 'px';
        };
        el.x = startRX;
        el.y = startRY;
        return el;
    }

    function m2(id) {
        var e2 = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
        e2.sP = function(x, y) {
            this.style.left = x + 'px';
            this.style.top = y + 'px';
        };
        e2.x = startLX;
        e2.y = startLY;
        return e2;
    }
    window.stayTopLeft = function() {
        if (document.documentElement && document.documentElement.scrollTop) var pY = document.documentElement;
        else if (document.body) var pY = document.body;
        if (document.body.scrollTop > 30) {
            startLY = 3;
            startRY = 3;
        } else {
            startLY = TopAdjust;
            startRY = TopAdjust;
        };
        ftlObj.y += (pY + startRY - ftlObj.y) / 16;
        ftlObj.sP(ftlObj.x, ftlObj.y);
        ftlObj2.y += (pY + startLY - ftlObj2.y) / 16;
        ftlObj2.sP(ftlObj2.x, ftlObj2.y);
        setTimeout("stayTopLeft()", 1);
    }
    ftlObj = ml("divAdRight");
    //stayTopLeft();
    ftlObj2 = m2("divAdLeft");
    stayTopLeft();
}

function ShowAdDiv() {
    var objAdDivRight = document.getElementById("divAdRight");
    var objAdDivLeft = document.getElementById("divAdLeft");
    if (document.body.clientWidth < 1000) {
        objAdDivRight.style.display = "none";
        objAdDivLeft.style.display = "none";
    } else {
        objAdDivRight.style.display = "block";
        objAdDivLeft.style.display = "block";
        FloatTopDiv();
    }
}
</script>
<script>
    document.write("<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 5;RightAdjust = 5;TopAdjust = 10;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=264033967363458";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59463938940c54a3"></script> 