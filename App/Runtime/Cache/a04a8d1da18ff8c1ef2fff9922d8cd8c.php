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
                    <li <?php if(($nav == 1)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/index.php">Home</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 2)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/index.php/Index/about">About</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 3)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/index.php/Index/work">Work</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 4)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/index.php/Index/downloads">Downloads</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 5)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/index.php/Index/contact">Contact</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 6)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/index.php/Index/guestbook">Guestbook</a></li>
                    <li class="separate">|</li>
                    <li <?php if(($nav == 7)): ?>class="selected"<?php endif; ?> ><a href="__ROOT__/index.php/Index/news">News</a></li>
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
            <div class="news">
                <ul class="newlist">
                    <?php $__FOR_START_24386__=0;$__FOR_END_24386__=6;for($i=$__FOR_START_24386__;$i < $__FOR_END_24386__;$i+=1){ ?><li class="row-fluid">
                            <div class="span5">
                                <img src="__PUBLIC__/images/test/02.jpg" alt="">
                            </div>
                            <div class="span7 ml">
                                <h1>阚诗淇随“心”展现“无住无相”跨界艺术</h1>
                                <p><a href="__SELF__?id=1">艺术家、设计师、演员、创作人、制片人，几个看似并不相关的身份，在阚诗淇身上却实现了统一……</a></p>
                                <p>2010-07-04 14:43:29 </p>
                            </div>
                        </li><?php } ?>
                </ul>
                <div class="page" style="padding-left:20px;">
                    <a href="#"> &lt;上一页</a>
                    <span>5/10</span>
                    <a href="#">下一页 &gt; </a>
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