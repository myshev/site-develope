<h2>Заполните заявку прямо сейчас.</h2>
<?if (!$sf_user->hasFlash('notice')) {?>
	<p>Мы обязательно свяжемся с Вами и дадим бесплатную консультацию</p>
<?} else {?>
	<p class="ok-message"><?=$sf_user->getFlash('notice');?></p>
<?}?>

<form action="<?=url_for($router);?>" method="post">
	<div>
		<span>Имя:</span><?=$clientForm['name']->renderError();?>
		<br/>
		<?=$clientForm['name'];?>
	</div>
	<div>
		<span>Телефон:</span><?=$clientForm['phone']->renderError();?>
		<br/>
		<?=$clientForm['phone'];?>
	</div>
	<div>
		<span>E-mail:</span><?=$clientForm['email']->renderError();?>
		<br/>
		<?=$clientForm['email'];?>
	</div>
	<a class="b-btn" href="javascript: return void(0);">
		<span class="b-btn__title">Оставить заявку</span>
	</a>
	<?=$clientForm->renderHiddenFields();?>
</form>