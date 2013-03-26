<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kelly - cms</title>
<link href="__PUBLIC__/css/base2012.css" type="text/css" rel="stylesheet">
<link href="__PUBLIC__/css/common.css" type="text/css" rel="stylesheet">
<link href="__PUBLIC__/css/jquery.cleditor.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/jquery.calendar.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/jquery.calendar.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/jquery.selectStyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.cleditor.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/fileEveryWhere.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/cal.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.select.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/tabs.js"></script>
</head>

<body id="index" onload="">

	<?php $mnum = '5'; ?>
	<div class="header">
	<div class="wrap">
		<div class="logo2">
			<a href="" style="display: block;height: 67px;"></a>
			<p class="user">
				Hello,admin <a href="__APP__/Index/logout">Login out ></a><a href="__ROOT__/index.php"  target='_blank' >Index ></a>
			</p>
			<s></s>
		</div>
		<ul class="nav">
			<li>
				<a href="#" class="<?php if(($mnum==1)): ?>a-active<?php endif; ?>" >System</a>
			</li>
			<li>
				<a href="__APP__/Banner/index" class="<?php if(($mnum==2)): ?>a-active<?php endif; ?>">BANNERS</a>
			</li>
			<li>
				<a href="__APP__/News/index" class="<?php if(($mnum==3)): ?>a-active<?php endif; ?>">NEWS</a>
			</li>
			<li>
				<a href="__APP__/Comments/index" class="<?php if(($mnum==4)): ?>a-active<?php endif; ?>">COMMENTS</a>
			</li>
			<li>
				<a href="__APP__/Work/index" class="<?php if(($mnum==5)): ?>a-active<?php endif; ?>">WORK</a>
			</li>
			<li>
				<a href="__APP__/Downloads/index" class="<?php if(($mnum==6)): ?>a-active<?php endif; ?>">DOWNLOADS</a>
			</li>
		</ul>
	</div>
</div>

	<div class="content fn-clear">
		<div class="leftmenu">
			<h1>Work</h1>
			<ul>
				<li>
					<a href="__APP__/Work/category" class="cus">Work Category<s></s></a>
				</li>
				<li>
					<a href="__APP__/Work/index" class="cus">Work<s></s> </a>
				</li>
			</ul>
		</div>
		<div class="main">
			<p>
				Work> WorkList
			</p>
			<div class="blist">
				<div class="tit">
					WorkList <s><a href="__URL__/addworks">Add Work</a></s>
				</div>
				<form action="__URL__/wrefresh" method="post" accept-charset="utf-8">
					<div class="itm">
						<table class="tb-01">
							<thead>
								<tr>
									<th width="40">All</th>
									<th width="115">Type</th>
									<th width="100">Title</th>
									<th width="100">Time</th>
									<th width="85">Edit</th>
								</tr>
							</thead>
							<tbody>
								
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
										<td>
										<input type="checkbox" name="cho[]" value='<?php echo ($vo["wid"]); ?>'/>
										</td>
										<td><?php echo ($vo["category_name"]); ?></td>
										<td> <?php echo ($vo["title_cn"]); ?> | <?php echo ($vo["title_en"]); ?> </td>
										<td><?php echo ($vo["dateline"]); ?></td>
										<td><a href="__URL__/editworks/wid/<?php echo ($vo["wid"]); ?>"><s class="s1"></s></a></td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								
								<!-- <tr>
								<td colspan=6>还没有任何记录</td>
								</tr> -->
							</tbody>

							<tbody>
								<tr>
									<td height="25" colspan="6" id="page" class="page"> <?php echo ($page); ?> </td>
								</tr>
							</tbody>
						</table>

						<p style="padding:5px;text-align:right;">
							<input type="submit" class="but2" name="" value="Delete">
							<input type="submit" name="" value="Refresh" class="but2">
						</p>
					</div>
				</form>
			</div>

		</div>
	</div>
	<div class="footer">
	<div class="wrap">
		<p>
			&copy;2013 Powered by <a href=""></a>
		</p>
	</div>
</div>

</body>