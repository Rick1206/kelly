<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo (($title)?($title):'Kelly'); ?></title>
    <link rel="stylesheet" href="__PUBLIC__/css/style.css">
    <!--<link rel="stylesheet/less" type="text/css"  href="__PUBLIC__/less/style.less">-->
    <!--<script type="text/javascript" src="__PUBLIC__/js/less.js"></script>-->
    <script type="text/javascript" src="__PUBLIC__/js/sea/sea.js" data-config="__PUBLIC__/js/sea/config"></script>
</head>
<body>
<div class="all">

    <div class="header">
        <div class="nav">
            <div class="clearfix">
                <div class="logo"><a href="#"><img src="__PUBLIC__/images/logo.png" alt="Kelly"></a></div>
                <ul class="nav-list">
                    <li <?php if(($nav == 1)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/kelly/index.php">Home</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 2)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/kelly/index.php/Index/about">About</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 3)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/kelly/index.php/Index/work">Work</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 4)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/kelly/index.php/Index/downloads">Downloads</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 5)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/kelly/index.php/Index/contact">Contact</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 6)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/kelly/index.php/Index/guestbook">Guestbook</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 7)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/kelly/index.php/Index/news">News</a></li>
                </ul>
            </div>
            <?php if(($nav == 2)): ?><div class="sub">
                <div class="sub-inner">
                    <a href="__ROOT__/index.php/Index/about"  <?php if(($subNav == 1)): ?>class="selected"<?php endif; ?> >Information</a>
                    <a href="__ROOT__/index.php/Index/portfolo"  <?php if(($subNav == 2)): ?>class="selected"<?php endif; ?> >Portfolio</a>
                </div>
            </div><?php endif; ?>
        </div>
    </div>

<div class="content">
    <div class="banner" id="newBanner">
        <img src="__PUBLIC__/images/banner/01.jpg" alt="">
        <img src="__PUBLIC__/images/banner/02.jpg" alt="">
        <img src="__PUBLIC__/images/banner/03.jpg" alt="">
        <img src="__PUBLIC__/images/banner/04.jpg" alt="">
    </div>
    <a href="javascript:;" id="prev" class="png"></a>
    <a href="javascript:;" id="next" class="png"></a>
    <div id="pag"></div>

    <script type="text/javascript">
        seajs.use("carouFredSel",function(){
            $("#newBanner").carouFredSel({
                responsive:true,
                auto:true,
                scroll:{
                    visible:1,
                    fx : "crossfade",
                    timeoutDuration:4000,
                    duration:600
                },
                next:"#next",
                prev:"#prev",
                pagination:{
                    container:"#pag",
                    anchorBuilder:function(nr){
                        return "<b></b>";
                    }
                }
            });
        })
    </script>

    <div class="vd">
        <div class="container pt1">
            <div class="entry">
                <div class="title t1"><a href="#" title="News"></a></div>
                <div class="p">
                    <p>2012-06-17 <br>
                        <a href="#">毛一青 阚诗淇 原弓 一个梦能把你降落到哪里？</a></p>
                    <p>2012-06-17 <br>
                        <a href="#">毛一青 阚诗淇 原弓 一个梦能把你降落到哪里？</a></p>
                    <p>2012-06-17 <br>
                        <a href="#">毛一青 阚诗淇 原弓 一个梦能把你降落到哪里？</a></p>
                </div>
                <div class="title t2"><a href="#" title="Comment"></a></div>
                <div class="p">
                    <p>
                        2012-06-17  <br>
                        诗淇画册之序
                    </p>　
                    <p>
                        2012-06-17  <br>
                        诗淇画册之序
                    </p>　
                    <p>
                        2012-06-17  <br>
                        诗淇画册之序
                    </p>　　
                </div>
            </div>
        </div>
    </div>

</div>



    <div class="footer">
        <div class="container">
            <ul class="fn-left">
                <li><p>Copyright © 2012 Kelly Kan. All rights reserved. </p></li>
                <!--<li><a href="#">Home</a></li>-->
                <!--<li><a href="#">Sitemap</a></li>-->
            </ul>
            <div class="fn-right">
                <div class="share fn-left">
                    <a href="#" class="c1" onclick="jiathis_sendto('fb');return false;"></a>
                    <a href="#" class="c2" onclick="jiathis_sendto('tsina');return false;"></a>
                    <a href="#" class="c3" onclick="jiathis_sendto('tqq');return false;"></a>
                    <a href="#" class="c4 jiathis jiathis_txt jtico jtico_jiathis" id="moreShare"></a>
                </div>
                <div class="fn-left">
                </div>
            </div>
        </div>
    </div>
    <!-- <script type="text/javascript" src="http://v2.jiathis.com/code/jia.js"></script> -->

</div>
</body>
</html>