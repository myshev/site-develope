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
			<?/*if($this->session->flashdata('message_no_send')) {?>
						<p class="error"><?=$this->session->flashdata('message_no_send')?></p>
					<?}?>
					<?if($this->session->flashdata('message_send')) {?>
						<p class="ok-message"><?=$this->session->flashdata('message_send')?></p>
					<?}*/?>
			<?include_partial('default/client_form', array('clientForm'	=> $clientForm, 'router'	=> 'homepage'));?>
		</div>
	</div>
	<div class="seporator-bottom"></div>
</div>
<div id="content">
	<div style="width: 100%; height: 10px;"></div>
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
			<?/*if($this->session->flashdata('message_no_send')) {?>
						<p class="error"><?=$this->session->flashdata('message_no_send')?></p>
					<?}?>
					<?if($this->session->flashdata('message_send')) {?>
						<p class="ok-message"><?=$this->session->flashdata('message_send')?></p>
					<?}*/?>
			<?include_partial('default/client_form', array('clientForm'	=> $clientForm, 'router'	=> 'homepage'));?>
		</div>
	</div>
	<div class="seporator-bottom"></div>
</div>