<?php
/**
 * Основной почтовый шаблон для сайта
 * @author		Roman Kudlay (Roman.Kudlay@softline.ru)
 * @since		05.07.11
 * @see			https://prj.slweb.ru/issues/33272
 * @copyright	Softline, 2011
 */
?>
Здравствуйте!

<?php echo sfOutputEscaper::unescape($content); ?>

Это письмо создано автоматически и не требует ответа.
<? /* Если Вы хотите связаться со службой поддержки, сделайте это на странице обратной связи [link] или напишите по адресу
 <a href="mailto:<?=sfConfig::get('app_mail_support')?>"><?=sfConfig::get('app_mail_support')?></a>.
 Ответы на часто задаваемые вопросы можно посмотреть здесь[link].<br/> */ ?>

--
С уважением,
Администрация AKIRI.RU