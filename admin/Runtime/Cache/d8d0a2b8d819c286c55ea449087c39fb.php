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
			<h1>Category</h1>
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
				Category > Category List > Add
			</p>
			<div class="blist">
				<div class="tit">
					Category List
				</div>
				<div class="itm">
					<form action="__URL__/addc" method="post" accept-charset="utf-8" enctype="multipart/form-data">
						<table class="tb-02">
							<thead>
								<tr>
									<th colspan="4">Information</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="4" height="10"></td>
								</tr>
								<tr>
									<td width="60">Date:</td>
									<td><span class="input01">
										<input type="text" name="dateline" id="smidate" readOnly="true" >
										<span class="icn1"></span></span></td>
										<td></td>
										<td></td>
								</tr>
								<tr>
									<td width="60">Order:</td>
									<td><span class="input01">
										<input type="text" name="orderby">
									</span></td>
									<td></td>
									<td></td>
								</tr>
								
								<tr>
									<td colspan="4" height="10"></td>
								</tr>
							</tbody>
						</table>
						<div style="padding:20px 0;">
							<div class="tabs">
								<!-- <a href="javascript:void(0);">English</a><a href="javascript:void(0);">Chinese</a> -->
							</div>
							<div class="panes" >
								<table class="tb-02" style="border-top: none;">
									<tbody>
										<tr>
											<td height="40" width="100" style="text-align:center">Title:</td>
											<td><span class="input01" style="width:480px;">
												<input type="text" name="category_name"  style="width:480px;">
											</span></td>
										</tr>
										<tr>
											<td colspan="2">
											<div class="bd">
												<textarea class="txtedit" name="description"></textarea>
											</div></td>
										</tr>
										
									</tbody>
								</table>
								
							</div>
						</div>
						<p style="padding-top: 10px">
							<input type="submit" name="" value="保存" class="but1">
							<!-- <input type="submit" class="but2" name="" value="Delete"> -->
						</p>
					</form>
				</div>
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


	<script type="text/javascript">
		$(function() {
			$('#smidate').simpleDatepicker({
				startdate : 2008,
				enddate : 2032
			});
			$("select").sSelect();
			$(".txtedit").cleditor().ready(function() {
				$("div.tabs").tabs("div.panes > table", {
					current : 'active',
					effect : 'fade'
				});
			});
			//$("input:file").fileEveryWhere({});
		});
	</script>
</body>