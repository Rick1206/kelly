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

	<?php $mnum = '6'; ?>
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
			<h1>Downloads</h1>
			<ul>
				<li>
					<a href="__URL__/index" class="cus">Downloads<s></s></a>
				</li>
			</ul>
		</div>

		<div class="main">
			<p>
				Downloads > Downloads List > Add
			</p>
			<div class="blist">
				<div class="tit">
					<!-- Downloads List<s>Add Downloads</s> -->
					Downloads List
				</div>
				<div class="itm">
					<form action="__URL__/edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
						<table class="tb-02">
							<thead>
								<tr>
									<th colspan="4">基本信息</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="4" height="10"></td>
								</tr>
								<tr>
									<td width="60">日期:</td>
									<td><span class="input01">
										<input type="text" name="dateline" id="smidate" readOnly="true" value="<?php echo ($data[0]["dateline"]); ?>" >
										<span class="icn1"></span></span></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td width="60">顺序:</td>
									<td><span class="input01">
										<input type="text" name="orderby"  value="<?php echo ($data[0]["orderby"]); ?>" />
									</span></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>图片:</td>
									<td><span class="input01">
										<input type="file" name="src" value="<?php echo ($data[0]["photo"]); ?>">
										<input type="hidden" name="photo" value="<?php echo ($data[0]["photo"]); ?>">
											</span></td>
									<td></td>
									<td height="25"></td>
								</tr>
								<!-- <tr>
									<td colspan="2">Show on Homepage? <label> 
										<input type="radio" name="a"/>
										No</label><label>
										<input type="radio"  name="a"/>
										Yes</label></td>
									<td>Thumbnail:</td>
									<td><span class="input01">
										<input type="text" name="">
										<span class="icn2"></span></span></td>
								</tr>
								<tr>
									<td>Tags:</td>
									<td><span class="input01">
										<input type="text" name="">
									</span></td>
									<td>Description:</td>
									<td><span class="input01">
										<input type="text" name="">
									</span></td>
								</tr> -->
								<tr>
									<td colspan="4" height="10"></td>
								</tr>
							</tbody>
						</table>
						<div style="padding:20px 0;">
							<div class="tabs">
								<a href="javascript:void(0);">English</a><a href="javascript:void(0);">Chinese</a>
							</div>
							<div class="panes" >
								<table class="tb-02" style="border-top: none;">
									<tbody>
										<tr>
											<td height="40" width="100" style="text-align:center">Title:</td>
											<td><span class="input01" style="width:480px;">
												<input type="text" name="title_cn" value="<?php echo ($data[0]["title_cn"]); ?>"  style="width:480px;">
											</span></td>
										</tr>
										<!-- <tr>
											<td colspan="2">
											<div class="bd">
												<textarea name="edit"></textarea>
</div>											</td>
										</tr>
										<tr>
											<td height="40" width="100" style="text-align:center">Download:</td>
											<td>
											<input type="file" id="dload" />
											</td>
										</tr> -->
									</tbody>
								</table>
								<table class="tb-02" style="border-top: none;">
									<tbody>
										<tr>
											<td height="40" width="100" style="text-align:center">Title:</td>
											<td><span class="input01" style="width:480px;">
												<input type="text" name="title_en" value="<?php echo ($data[0]["title_en"]); ?>"  style="width:480px;">
											</span></td>
										</tr>
										<!-- <tr>
											<td colspan="2">
											<div class="bd">
												<textarea name="edit"></textarea>
</div>											</td>
										</tr>
										<tr>
											<td height="40" width="100" style="text-align:center">Download:</td>
											<td>
											<input type="file" id="dload" />
											</td>
										</tr> -->
									</tbody>
								</table>
							</div>
						</div>
						<p style="padding-top: 10px">
							<input type="submit" name="" value="保存" class="but1">
							<input type="hidden" name="did" value="<?php echo ($data[0]["did"]); ?>"/>	
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
			$("textarea[name=edit]").cleditor().ready(function() {
				$("div.tabs").tabs("div.panes > table", {
					current : 'active',
					effect : 'fade'
				});
			});
			//$("input:file").fileEveryWhere({});
		});
	</script>
</body>