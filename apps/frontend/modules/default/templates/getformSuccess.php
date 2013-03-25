<?if ($sf_user->hasFlash('notice')) {?>
	<div id="close_button">
		<p class="ok-message"><?=$sf_user->getFlash('notice') ?></p>
		<a class="b-btn" href="javascript: return void(0);" onClick="parent.$.fn.colorbox.close();">
			<span class="b-btn__title">Закрыть окно</span>
		</a>
	</div>
<?} else {?>
	<div class="form-order" style="margin: 0 auto; width: 440px; height: 300px;">
		<?include_partial('default/client_form', array('clientForm'	=> $clientForm, 'router'	=> 'getform'));?>
	</div>
<?}?>