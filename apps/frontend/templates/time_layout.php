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
						закажи звонок<br/>
						по любому вопросу
					</p>
				</div>
				<a href="<?=url_for('getform')?>" rel="cb_link" title="Оставить заявку">
					<img src="/uploads/old/514b3ddd0b547cbf55edbf3bcb514bb4.png" />
				</a>
			</div>
		</div>
		<div id="header-bottom">
			<div class="seporator-top"></div>
			<div id="connecting_people"></div>
			<div class="clear"></div>
			<ul class="header-middle-counter">
				<li class="item-edge">
					<img src="/uploads/old/19cfa5fd330fb75f5d81148a578f5340.png" />
				</li>
				<li>
					<img class="image2head-middle" src="/uploads/old/2ab57fd95965ceff227d45c5efdaa6d5.png" />
				</li>
				<li>
					<img class="image2head-middle" src="/uploads/old/fefe9c91d4e0c8263b49c9e7d9818410.png" />
				</li>
				<li class="item-edge">
					<img src="/uploads/old/264356ce9296037c6ecdaf863d40007e.png" />
				</li>
			</ul>
			<div class="slider-bloc">
				<div class="slider" id="slider">
					<ul>
						<li>
							<div class="slider-image-item">
								<img src="/uploads/old/aeb767aa5904f35ce49f3009c75a6eb7.jpg"/>
							</div>
						</li>
						<li>
							<div class="slider-image-item">
								<img src="/uploads/old/aeb767aa5904f35ce49f3009c75a6eb7.jpg"/>
							</div>
						</li>
						<li>
							<div class="slider-image-item">
								<img src="/uploads/old/aeb767aa5904f35ce49f3009c75a6eb7.jpg"/>
							</div>
						</li>
					</ul>
				</div>
				<div class="form-order">
					<h2>Заполните заявку прямо сейчас.</h2>
					<p>Мы обязательно свяжемся с Вами и дадим бесплатную консультацию</p>
					<?/*if($this->session->flashdata('message_no_send')) {?>
						<p class="error"><?=$this->session->flashdata('message_no_send')?></p>
					<?}?>
					<?if($this->session->flashdata('message_send')) {?>
						<p class="ok-message"><?=$this->session->flashdata('message_send')?></p>
					<?}*/?>
					<form action="<?/*=site_url('main/orderCall');*/?>" method="post">
						<div>
							<span>Имя:</span>
							<br/>
							<input type="text" name="name" />
						</div>
						<div>
							<span>Телефон:</span>
							<br/>
							<input type="text" name="phone" class="phone-input"/>
						</div>
						<div>
							<span>E-mail:</span>
							<br/>
							<input type="text" name="email"/>
						</div>
						<a class="b-btn" href="javascript: return void(0);">
										<span class="b-btn__title">
											  Оставить заявку
										</span>
						</a>
					</form>
				</div>
			</div>
			<div class="seporator-bottom"></div>
		</div>
		<div id="content">
			<div style="width: 100%; height: 10px;"></div>
			<?php echo $sf_content ?>
			<div style="width: 100%; height: 10px;"></div>
		</div>
		<div id="footer-top">
			<div class="seporator-top"></div>
			<div style="width: 100%; height: 40px;"></div>
			<div class="slider-bloc">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div>
								<img src="/uploads/old/aeb767aa5904f35ce49f3009c75a6eb7.jpg"/>
							</div>
						</li>
						<li>
							<div>
								<img src="/uploads/old/aeb767aa5904f35ce49f3009c75a6eb7.jpg"/>
							</div>
						</li>
					</ul>
				</div>
				<div class="form-order">
					<h2>Заполните заявку прямо сейчас.</h2>
					<p>Мы обязательно свяжемся с Вами и дадим бесплатную консультацию</p>
					<?/*if($this->session->flashdata('message_no_send')) {?>
						<p class="error"><?=$this->session->flashdata('message_no_send')?></p>
					<?}?>
					<?if($this->session->flashdata('message_send')) {?>
						<p class="ok-message"><?=$this->session->flashdata('message_send')?></p>
					<?}*/?>
					<form action="<?/*=site_url('main/orderCall');*/?>" method="post">
						<div>
							<span>Имя:</span>
							<br/>
							<input type="text" name="name" />
						</div>
						<div>
							<span>Телефон:</span>
							<br/>
							<input type="text" name="phone" class="phone-input"/>
						</div>
						<div>
							<span>E-mail:</span>
							<br/>
							<input type="text" name="email"/>
						</div>
						<a class="b-btn" href="javascript: return void(0);">
										<span class="b-btn__title">
											  Оставить заявку
										</span>
						</a>
					</form>
				</div>
			</div>
			<div class="seporator-bottom"></div>
		</div>
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
						закажи звонок<br/>
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
