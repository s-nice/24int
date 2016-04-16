<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>技术派</title>
		<script type='text/javascript' src='/static/js/jquery.js?ver=1.12.3'></script>
		<script type='text/javascript' src='/static/js/jquery-migrate.min.js?ver=1.4.0'></script>
		<link type="image/vnd.microsoft.icon" href="/static/images/favicon.png" rel="shortcut icon">
		<link href="/static/style.css" type="text/css" rel="stylesheet"/>
		<!--[if lt IE 9]>
		<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
		<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="main" class="container">
			<div class="pjax">
				<header id="header">
					<div class="container">
						<h1 class="logo">
							<i class="iconfont">&#xe60d;</i><a href="/">技术派</a>
						</h1>
						<nav class="menus">
							<i>
								<div class="menu-top-container">
									<ul id="menu-top" class="menu">
										<?php $catelist = Category::getDropList(1); if ($catelist){ foreach ($catelist as $key => $one){ ?>
										<li><a href="<?php echo Yii::app()->createUrl('blog/index', array('pid' => $key)); ?>"><?php echo $one; ?></a></li>
										<?php }} ?>
									</ul>
								</div>
							</i>
						</nav>
					</div>
				</header>

				<?php echo $content; ?>
				
				<div class="clearer"></div>
				<div class="search">
					<form method="post" action="<?php echo Yii::app()->createUrl('blog/index'); ?>">
						<input class="search_key" name="keyword" autocomplete="off" placeholder="Enter search keywords..." type="text" value="" required="required">
						<button alt="Search" type="submit">搜索</button>
					</form>
				</div>
				
				<footer id="footer">
					<section class="links_adlink">
						友情链接：
						<ul class="container">
							<li><a target="_blank" href="http://www.s-nice.com">s-nice</a></li>

						</ul>
					</section>

					&copy; 2016 <a href="/">技术派</a>

				</footer>
				
				<script type='text/javascript'>
					/* <![CDATA[ */
					var ajaxcomment = {"ajax_url": "https:\/\/www.static.cn\/wp-admin\/admin-ajax.php", "order": "desc", "formpostion": "top"};
					/* ]]> */
				</script>
				
	</body>
</html>