<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?//php include_http_metas() ?>
	<?//php include_metas() ?>
	<?//php include_title() ?>
	<link rel="shortcut icon" href="/favicon.ico" />
	<?//php include_stylesheets() ?>
	<?//php include_javascripts() ?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="/css/old/common.css" rel="stylesheet">
	<link href="/css/old/main.css" rel="stylesheet">
	<link href="/css/old/colorbox.css" rel="stylesheet">
	<link href="/css/old/flexslider.css" rel="stylesheet">
	<link href="/css/old/screen.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="/js/old/jquery.min.js"></script>
	<script src="/js/old/jquery.colorbox.js"></script>
	<script src="/js/old/masked_input.js"></script>
	<script src="/js/old/easySlider1.7.js"></script>
	<script src="/js/old/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#slider").easySlider({
				auto: false,
				continuous: true
			});

			$('.flexslider').flexslider({
				animation: "slide",
				slideshow: false,
				animationSpeed: 1000
			});

			$(".phone-input").mask("+7 (999) 999-99-99");

			$('.b-btn').click(function () {
				$(this).parent('form').submit();
			});

			$("a[rel='cb_link']").colorbox({width:"600", height:"400", iframe:true, transition:"fade"});
			$("a[rel='cb_link_footer']").colorbox({width:"600", height:"400", iframe:true, transition:"fade"});
		});
	</script>
</head>
<body>
<?php echo $sf_content ?>
</body>
</html>
