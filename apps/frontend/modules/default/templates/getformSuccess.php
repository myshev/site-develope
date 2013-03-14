<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
	<title>Мобильные телефоны с доставкой по всей России напрямую от производителя</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="/css/common.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<script src="/js/jquery.min.js"></script>
	<script src="/js/masked_input.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$(".phone-input").mask("+7 (999) 999-99-99");

			$('.b-btn').click(function () {
				$(this).parent('form').submit();
			});
		});
	</script>
</head>
<body>
	<div class="form-order" style="margin: 0 auto; width: 440px; height: 300px;">
		<h2>Заполните заявку прямо сейчас.</h2>
		<p>Наш менеджер свяжется с Вами и даст</br>бесплатную консультацию</p>
		<br/>
		<form action="<??>" method="post">
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
				<input type="text" name="email" class="phone-input"/>
			</div>
			<a class="b-btn" href="javascript: return void(0);">
				<span class="b-btn__title">Оставить заявку</span>
			</a>
			<input type="hidden" name="is_colorbox" value="1" />
		</form>
	</div>

	<div id="close_button">
		<p class="ok-message">"ok-message"</p>
		<a class="b-btn" href="javascript: return void(0);" onClick="parent.$.fn.colorbox.close();">
			<span class="b-btn__title">Закрыть окно</span>
		</a>
	</div>

</body>
</html>