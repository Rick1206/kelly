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
        <img src="<?php echo ($bgUrl); ?>" alt="">
    </div>
    <div class="vd">
        <div class="container pt2">
            <h1 class="page-title"><?php echo ($title); ?></h1>
            <div class="img-box">
                <div class="menu">
                    <?php if($nav == "3" OR $nav == "2" ): ?><a href="#" class="selected">Life</a>
                        <a href="#">Work</a><?php endif; ?>
                </div>
                <div class="imgs">
                    <div class="imgs-inner">
                        <ul>
                            <li><a class="item" href="javascript:;"><img src="__PUBLIC__/images/test/01.jpg" alt="Kelly Ken"><div class="alt">Kelly Ken</div></a></li>
                            <li><a class="item" href="javascript:;"><img src="__PUBLIC__/images/test/01.jpg" alt="Kelly Ken"><div class="alt">Kelly Ken</div></a></li>
                            <li><a class="item" href="javascript:;"><img src="__PUBLIC__/images/test/01.jpg" alt="Kelly Ken"><div class="alt">Kelly Ken</div></a></li>
                            <li><a class="item" href="javascript:;"><img src="__PUBLIC__/images/test/01.jpg" alt="Kelly Ken"><div class="alt">Kelly Ken</div></a></li>
                            <li><a class="item" href="javascript:;"><img src="__PUBLIC__/images/test/01.jpg" alt="Kelly Ken"><div class="alt">Kelly Ken</div></a></li>
                            <li><a class="item" href="javascript:;"><img src="__PUBLIC__/images/test/01.jpg" alt="Kelly Ken"><div class="alt">Kelly Ken</div></a></li>
                            <li><a class="item" href="javascript:;"><img src="__PUBLIC__/images/test/01.jpg" alt="Kelly Ken"><div class="alt">Kelly Ken</div></a></li>
                            <li><a class="item" href="javascript:;"><img src="__PUBLIC__/images/test/01.jpg" alt="Kelly Ken"><div class="alt">Kelly Ken</div></a></li>
                        </ul>
                    </div>
                    <a href="javascript:;" class="prev"></a>
                    <a href="javascript:;" class="next"></a>
                </div>
                <?php if($art): ?><div class="article">
                    <p>
                        <?php echo ($art); ?>
                    </p>
                </div><?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div id="alert-img">
    <a href="javascript:;" class="close popClose"></a>
    <div class="big-pic">
        <img src="__PUBLIC__/images/test/01.jpg" alt="" width="550" height="400">
       <div style="padding-top:10px;">
           <div class="title">Kelly Ken</div>
           <?php if($nav == '4' ): ?><a href="#" class="btn-download">Download</a><?php endif; ?>
       </div>
    </div>
</div>

    <script type="text/javascript">
        seajs.use(['jscrollpane','jscrollpaneCss','mousewheel','lightbox'],function(){
            var imgs = $('.imgs-inner');
            imgs.animate({opacity:1},600);
            var imgsLi = imgs.find('li');
            imgs.find('ul').width(imgsLi.length * imgsLi.innerWidth() );
            imgs.jScrollPane({ showArrows: true, animateScroll: true });
            var api = imgs.data('jsp');
            $('.imgs .prev').bind('click',function(){
                api.scrollBy(-( imgsLi.innerWidth() ),0);
            });
            $('.imgs .next').bind('click',function(){
                api.scrollBy( imgsLi.innerWidth() ,0);
            });
            $('.jspScrollable').removeAttr('tabindex');
            imgsLi.hover(function(){
                $(this).find('.item').animate({top:-20},200,function(){
                    $(this).find('.alt').fadeIn();
                });
            },function(){
                $(this).find('.item').animate({top:0},200,function(){
                    $(this).find('.alt').hide();
                });
            });
            imgsLi.each(function(){
                $(this).click(function(){
                    $.lightBox('#alert-img');
                })
            })
        })
    </script>





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