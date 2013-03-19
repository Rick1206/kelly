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
             <div class="row-fluid text-box">
                 <div class="span6">
                     <div class="text-pd">
                         <p>阚诗淇毕业于伦敦著名艺术学院CENTRAL SAINT MARTINS，学习创意艺术，视觉艺术，时装设计等，并且研修心理学的，集艺术家，创作人，设计师，制片人于一身。此次展览还特邀了她的好友，新民晚报的美术评论家林明杰，星相学专家英格丽·张以等等，好友的捧场无疑使得活动当天气氛格外活跃。诗淇是个天蝎座，“天蝎座对于生命的追求，不局限于世俗的层面，不会满足于外表的现象，天蝎座的风格渗透于她的人和画中。” 英格丽·张如是评价。</p>

                         <p>继去年圣菱画廊的展出，这一次空间效果非常不同，阚诗淇坦言，“大的空间会有点严肃，有种冷的感觉，而选择白金湾展出，就是不想把艺术束之高阁，艺术回归家庭环境，比较温暖，更能烘托一种温馨的气氛，磁场也会比较强烈。”</p>

                         <p>此次系列取名［云裳］顾名思义就是云的衣裳。云，它朦胧，含蓄却又变化，灵动。诗淇认为这种状态是中国文化中是一种很高的艺术状态。中国文化中有祥云，代表吉祥。中国有如意，其实就是一朵云，云纹早在中国古代就作为一种纹饰，被用在服装和家具上。在诗淇看来，意大利是时尚之都，那么中国在古代的时候，云就已经是非常时尚的符号了。她说道，“云在我看来在某种意义上代表着时尚、代表着吉祥、代表着艺术的内涵和美。”</p>

                         <p>诗淇并不求每个人都能读懂她的画，“每个人都有自己的感悟，每个人看的是不一样的。”入口处挂着的作品《无相》 ，一个孩子看到的可能是三根棒棒糖，一个虔诚的教徒看到的却是西方三圣。午后时分，抱着淡然的心态，去品读诗淇的画最适合不过。</p>
                     </div>
                 </div>
                 <div class="span6">
                     <div class="text-pd2">
                         姓名：阚诗淇 <br>
                         英文名:Kelly Kan  <br>
                         艺名：柯颖        <br>
                         籍贯：浙江        <br>
                         国籍：中国香港      <br>
                         身高：170CM           <br>
                         眼睛：黑色            <br>
                         发色：黑色            <br>
                         语言：普通话、广东话、上海话、英语、法语 <br>
                         人生目标：享受生活 谨慎工作     <br>
                         性格：亲和、坚韧             <br>
                         特长：艺术创作              <br>
                         家庭成员：父母              <br>
                         最喜欢的娱乐方式：旅游、看书、电影 <br>
                         最喜欢的运动：游泳、高尔夫         <br>
                         最喜欢的电影：《Gone with the wind》 <br>
                         最喜欢的一本书：《金刚经说什么》   <br>
                         最喜欢的音乐风格：看心情       <br>
                         最喜欢的歌手Marich Carey        <br>
                         最喜欢的数字：1                 <br>
                         最喜欢的小动物：我养的宠物          <br>
                         最喜欢的服装风格：在适合的场合穿适合的衣服 <br>
                         最喜欢的食物：法国菜、日本菜、广东汤、点心
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