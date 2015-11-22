<!DOCTYPE html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>24INT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

		<link href="/fineline/css/reset.css" rel="stylesheet">
		<link href="/fineline/css/foundation.css" rel="stylesheet">
		<link href="/fineline/css/font-awesome.min.css" rel="stylesheet">
		
		<link href="/fineline/css/fineliner-init.css" rel="stylesheet">
		<link href="/fineline/css/fineliner-responsive.css" rel="stylesheet">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/fineline/images/favicon.png" />
		
		<script src="/fineline/js/jquery-1.10.2.min.js" type="text/javascript"></script>
		
	</head>

	<body>

		<div id="root-border">
			<div id="root-container">
				<div id="content-container" class="columns-content-width">

					<!-- Page Intro -->
					<div id="intro-wrapper">

						<div id="intro" class="row">
							<div class="large-12 columns">
								<h1>24INT<span>博客</span></h1>
								<p>
									第一件要做的就是马上去做！
								</p>
							</div>
						</div>

						<hr class="layout-divider double-line content-width" />

					</div>
				<?php echo $content; ?>
				</div>
				<!-- End id="content-container" -->
				<hr class="layout-divider content-width">

				<!-- Footer Section -->
				<div id="footer-root-container" class="columns-content-width">
					<!-- Footer Bar -->
					<div id="footer-bar-container">
						
						<div id="footer-bar" class="content row">
							<a id="footer-logo" href="/"><img src="/fineline/images/logo-footer.png" alt="Fineliner" title="Fineliner" /></a>
							<p id="copyright-text">
								© 2015 <a href="/">24INT</a>. All Rights Reserved.
							</p>
						</div>
						
					</div>
					<!-- End id="footer-bar-container" -->

				</div>
				<!-- End id="footer-root-container" -->


			</div>
			<!-- End id="root-container" -->

		</div>
		<!-- End id="root-border" -->

		<img style='display:none;' id="go_to_top" src="/fineline/images/toTop.png" />
		
		<script>
			(function(){
				$('#go_to_top').on('click',function(){
					$('html,body').animate({
						scrollTop : 0
					},500);
				});
			})();
			$(window).scroll(function(){
				//获取窗口的滚动条的垂直位置 
				var s = $(window).scrollTop(); 
				//当窗口的滚动条的垂直位置大于页面的最小高度时，让返回顶部元素渐现，否则渐隐 
				if( s > 100){
				$("#go_to_top").fadeIn(100); 
				}else{
				$("#go_to_top").fadeOut(200); 
				}; 
			});
		</script>
		
	</body>
</html>
