<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>hello <?php echo ($name); ?></title>
	</head>
	<body>
		hello, <?php echo ($name); ?>!

		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["banner_til"]); ?>
			<br/><?php endforeach; endif; else: echo "" ;endif; ?>
	</body>
</html>