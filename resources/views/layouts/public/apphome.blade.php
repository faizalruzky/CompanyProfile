<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Home - ChanShin Indonesia</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Awesome Bubble Navigation with jQuery" />
    <meta name="keywords" content="jquery, circular menu, navigation, round, bubble"/>
    <link rel="stylesheet" href="assets/public/custom/nav/css/style.css" type="text/css" media="screen"/>

    <!-- bg -->
    <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
    <link rel="stylesheet" type="text/css" href="assets/public/custom/bgslide/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/public/custom/bgslide/css/style2.css" />
    <script type="text/javascript" src="assets/public/custom/bgslide/js/modernizr.custom.86080.js"></script>

    <style>
    *{
        margin:0;
        padding:0;
    }
    body{
        font-family:Arial;
        /*background:#fff url(assets/public/custom/nav/images/bg.png) no-repeat top left;*/
    }
    .title{
        width:548px;
        height:119px;
        position:absolute;
        top:400px;
        left:150px;
        background:transparent url(assets/public/custom/nav/title.png) no-repeat top left;
    }
    a.back{
        background:transparent url(assets/public/custom/nav/back.png) no-repeat top left;
        position:fixed;
        width:150px;
        height:27px;
        outline:none;
        bottom:0px;
        left:0px;
    }
    #content{
        margin:0 auto;
    }


</style>
</head>

<body id="page">


 @yield('content-home')


</body>
<!-- The JavaScript -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="assets/public/custom/nav/jquery.easing.1.3.js"></script>
<script type="text/javascript">
$(function() {
    $('#nav > div').hover(
        function () {
            var $this = $(this);
            $this.find('img').stop().animate({
                'width'     :'199px',
                'height'    :'199px',
                'top'       :'-25px',
                'left'      :'-25px',
                'opacity'   :'1.0'
            },500,'easeOutBack',function(){
                $(this).parent().find('ul').fadeIn(700);
            });

            $this.find('a:first,h2').addClass('active');
        },
        function () {
            var $this = $(this);
            $this.find('ul').fadeOut(500);
            $this.find('img').stop().animate({
                'width'     :'52px',
                'height'    :'52px',
                'top'       :'0px',
                'left'      :'0px',
                'opacity'   :'0.1'
            },5000,'easeOutBack');

            $this.find('a:first,h2').removeClass('active');
        }
        );
});
</script>
</html>