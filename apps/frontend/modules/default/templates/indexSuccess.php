<?if($oBenefits->count()) {?>
	<div class="news_list">
		<div class="body_text">5 ключевых проблем, с которыми сталкиваются 95% клиентов</div>
		<?foreach($oBenefits as $benefit) {?>
			<div class="news_line">
				<div class="news_image">
					<?if($benefit->getImage() != '' && file_exists($_SERVER['DOCUMENT_ROOT'].'/uploads/benefits/'.$benefit->getImage())) {?>
						<img src="/uploads/benefits/<?=$benefit->getImage();?>" />
					<?}?>
				</div>
				<h3><?=$benefit->getTitle();?></h3>
				<span><?=$benefit->getText();?></span>

				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<? }?>
	</div>
<?}?>

<?if($oServices->count()) {?>
	<div class="news_list">
		<div class="body_text">Почему клиенты довольны нашей работой и рекомендуют нас своим партнерам</div>
		<?foreach($oServices as $service) {?>
			<div class="news_line">
				<div class="news_image">
					<?if($service->getImage() != '' && file_exists($_SERVER['DOCUMENT_ROOT'].'/uploads/services/'.$service->getImage())) {?>
						<img src="/uploads/services/<?=$service->getImage();?>" />
					<?}?>
				</div>
				<h3><?=$service->getTitle();?></h3>
				<span><?=$service->getText();?></span>

				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		<?}?>
	</div>
<?}?>