<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Разработка сайтов - от визиток до корпоративных порталов</title>
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

			<?if ($sf_user->hasFlash('notice')) {?>
				alert('<?=$sf_user->getFlash('notice');?>');
			<?}?>
		});
	</script>
</head>
<body>

	<div id="wrapper">
		<div id="header-top">
			<div class="logo">
				<img src="/uploads/old/696471df36f919c4bbcceac5ca0d6316.png" />
			</div>
			<div class="phone">
				<div class="phone-text">
					<p class="phone-number">
						+7(904) 349-64-41
					</p>
					<p class="phone-slogan">
						закажите звонок<br/>
						по любому вопросу
					</p>
				</div>
				<a href="<?=url_for('getform')?>" rel="cb_link" title="Оставить заявку">
					<img src="/uploads/old/514b3ddd0b547cbf55edbf3bcb514bb4.png" />
				</a>
			</div>
		</div>
		<?php echo $sf_content ?>
		<div id="footer-bottom">
			<div style="width: 100%; height: 10px;"></div>
			<div class="footer-bottom-image">
				<?/*if(isset($footer_image) && $footer_image->image != '' && file_exists($_SERVER['DOCUMENT_ROOT'].'/upload/data_image/'.$footer_image->image)) {?>
					<img src="/upload/data_image/<?=$footer_image->image;?>" />
				<?}*/?>
			</div>
			<div style="width: 100%; height: 15px;"></div>
			<div class="logo">
				<img src="/uploads/old/696471df36f919c4bbcceac5ca0d6316.png" />
			</div>
			<div class="phone">
				<div class="phone-text">
					<p class="phone-number">
						8 (8634) 69-17-09
					</p>
					<p class="phone-slogan">
						закажите звонок<br/>
						по любому вопросу
					</p>
				</div>
				<a href="<?=url_for('getform')?>" rel="cb_link_footer" title="Оставить заявку">
					<img src="/uploads/old/514b3ddd0b547cbf55edbf3bcb514bb4.png" />
				</a>
			</div>
		</div>
	</div>
</body>
</html>
