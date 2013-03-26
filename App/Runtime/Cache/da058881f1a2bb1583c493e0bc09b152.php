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
			<div class="news detail">
				<div class="f">
					<a href="__ACTION__" class="">&lt; 返回</a>
				</div>
				<div class="row-fluid">
					<div class="span3">
						<img src="__PUBLIC__/Uploads/News/<?php echo ($nlist[0]["photo"]); ?>" alt="">
						<!-- <img src="__PUBLIC__/images/test/04.jpg" alt=""> -->
					</div>
					<div class="span9">
						<div class="article">
							<h1><?php echo ($nlist[0]["title_cn"]); ?></h1>
							<p>
								<?php echo ($nlist[0]["dateline"]); ?>
							</p>
							<div class="act">
								<?php echo ($nlist[0]["description_cn"]); ?>
								<!-- <p>
									用绘画表达真诚的个人风格
								</p>
								<p>
									诗淇自幼习画，中学时一时兴起曾参加艺术学院考试。当水粉在她面前化开时，第一次接触这种材料的诗淇有些无所适从。看着旁边的学生用水粉画画，她很快学会了，最终在诸多学生中脱颖而出。然而她却没有进入专业的科班学习绘画。反而转向学习表演，曾做过演员、编剧、设计师和制片人。
								</p>
								<p>
									2005年，她在巴黎蒙马尔特看到街头画家作画，从没有学过油画的诗淇，也有了自己动手创作的冲动。第二年，当她的油画处女作诞生时，甚至连母亲都不敢相信，那幅骑白马的裸女是出自诗淇之手。这幅作品构图独特，色彩沉着，笔触果断大胆，诗淇的艺术天赋令人惊叹。
								</p>

								<p>
									2007年，她远赴伦敦中央圣马丁艺术与设计学院接受正规的视觉艺术训练。正如著名评论家李旭所说：“诗淇与绝大多数职业画家不同，她并没有在传统的科班训练中花费漫长的时间，却也幸运地避免了那种漫长训练所带来的副作用。在没有经历大量写生和习作磨练的前提下，她非常直接地开始了个人化风格的创作，锐意而真诚，朴素而动人。”
								</p>

								<p>
									无住无相的跨界生活
								</p>

								<p>
									从“环保”到“心”再到“闪粉”系列，无论是对抽象美感的驾驭，还是对时尚潮流的引导，都在诗淇的作品中得到了统一。这是每个看过诗淇个展的人都留下的深刻印象。折光颜料如宝石般闪耀，Bling-Bling的视觉效果在诗淇的绘画、雕塑、影像作品中都得到充分体现，同时也将现场布置得炫动而美丽。
								</p>
								<p>
									艺术家、设计师、演员、创作人和制作人几个身份，在诗淇看来，都是为美而工作的。不经意中，诗淇的各种经历在她的艺术作品中得到了更全面的体现，实现了一次无住无相间的跨界。
								</p>

								<p>
									诗淇曾投身的影视、时尚业的丰富经历，或许与正统艺术界的艺术家完全不同。而正是影视、时尚行业，巨大地影响了中国近30年来的社会，正是在这个时尚的时代，这些让中国人心中有了激情、浪漫和色彩，诗淇作品的创作价值也正是在于此。
								</p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<script type="text/javascript">
		seajs.use(['jscrollpane', 'jscrollpaneCss', 'mousewheel'], function() {
			$('.act').jScrollPane({
				showArrows : true,
				animateScroll : true
			});

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