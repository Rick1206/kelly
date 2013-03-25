<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Kelly - cms</title>
		<link href="__PUBLIC__/css/base2012.css" type="text/css" rel="stylesheet">
		<link href="__PUBLIC__/css/login.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="header">
			<div class="wrap">
				<div class="logo1" style="height: 67">
					<a href=""></a>
				</div>
			</div>
		</div>
		<div class="content">
			<h1>Login</h1>
			<form action="__APP__/Index/islogin" method="post" accept-charset="utf-8">
				<div class="loginbox">
					<ul>
						<li>
							<label><span class="txt">Username:</span><span class="input01">
									<input type="text" name="adname">
								</span></label>
						</li>
						<li>
							<label><span class="txt">Password:</span><span class="input01">
									<input type="password" name="adpassword">
								</span></label>
						</li>
						<li>
							<input type="submit" name="" class="but" value="Enter"/>
						</li>
					</ul>
					<div class="img"></div>
				</div>
			</form>

		</div>
		<div class="footer">
			<div class="wrap">
				<p>
					&copy;2013 Powered by <a href=""></a>
				</p>
			</div>
		</div>
	</body>
</html>