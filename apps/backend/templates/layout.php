<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php include_http_metas() ?>
		<?php include_metas() ?>
		<?php include_title() ?>
		<link rel="shortcut icon" href="/favicon.ico" />
		<?php include_stylesheets() ?>
		<?php include_javascripts() ?>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>
					<a href="<?php echo url_for('homepage') ?>">
						На главную
					</a>
				</h1>
			</div>
			<div id="menu">
				<hr/>
				<ul>
					<li><?php echo link_to('Клиенты', 'clients'); ?></li>
					<li><?php echo link_to('Наши преимущества', 'benefits') ?></li>
					<li><?php echo link_to('Наши услуги', 'services') ?></li>
					<?if($sf_user->isAuthenticated()) {?>
						<li><?php echo link_to('Выход', 'sf_guard_signout') ?></li>
					<?}?>
				</ul>
				<div class="clear"></div>
				<hr/>
				<br/>
			</div>
			<div id="content">
				<?php echo $sf_content ?>
			</div>
			<div id="footer"></div>
		</div>
	</body>
</html>