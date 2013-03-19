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
            <div class="row-fluid guestbook">
                <div class="span7">
                    <div class="pd">
                        <?php $__FOR_START_20877__=0;$__FOR_END_20877__=5;for($i=$__FOR_START_20877__;$i < $__FOR_END_20877__;$i+=1){ ?><div class="one">
                                <div class="control">
                                    <div class="label">Jay Kim </div>
                                    <div class="label-for"><span>Sex:Boy</span><span>Email:JayKim@126.com</span><span>HomePage:www.Jaykim.com</span></div>
                                </div>
                                <div class="control fz11">
                                    <div class="ti">Message:</div>
                                    <div class="mes">Hi. Kelly! How are you? I’m Dr. Kim from Korea. I was so glad to meet you. I wish to see you again! ^^    (2012-9-15)</div>
                                </div>
                            </div><?php } ?>
                        <div class="page">
                            <a href="#" class="btn">prev</a>
                            <span class="btn">5/10</span>
                            <a href="#" class="btn">next</a>
                        </div>
                    </div>
                </div>
                <div class="span5">
                    <div class="pd2">
                        <form action="">
                            <div class="control">
                                <div class="label"><span>Name :</span></div>
                                <div class="label-for"><input type="text" class="text"></div>
                            </div>
                            <div class="control">
                                <div class="label"><span>Sex :</span></div>
                                <div class="label-for"><label><input type="radio" class="radio">Male</label> <label><input type="radio" class="radio">Female</label></div>
                            </div>
                            <div class="control">
                                <div class="label"><span>E-mail :</span></div>
                                <div class="label-for"><input type="text" class="text"></div>
                            </div>
                            <div class="control">
                                <div class="label"><span>Homepage :</span></div>
                                <div class="label-for"><input type="text" class="text"></div>
                            </div>
                            <div class="control">
                                <div class="label"><span>Message :</span></div>
                                <div class="label-for"><textarea name="" class="in"></textarea></div>
                            </div>
                            <div class="control">
                                <div class="label-for"><a class="btn" href="#">Send</a></div>
                            </div>
                        </form>
                    </div>
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