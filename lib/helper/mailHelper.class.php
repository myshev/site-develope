<?php

class mailHelper {

	static function send($to_email, $subject, $template, $params=array()) {
		$context = sfContext::getInstance();
		$context->getConfiguration()->loadHelpers(array('Partial'));
		$mailer = $context->getMailer();
		if (is_array($to_email)) { // Если имя пользователя передается в виде массива, то извлекаем из него email и имя
			$usernames = array_values($to_email);
			$username = array_shift($usernames);
		} else {
			$username = false;
		}

		// Подготовка письма к отправке
		$message = Swift_Message::newInstance()
			->setFrom(sfConfig::get('app_mail_from', 'from@noreply.com'),sfConfig::get('app_mail_fromname'))
			->setTo($to_email)
			->setSubject($subject);
		//->setBody(get_partial())
		//->setContentType('text/html');
		$content_html = get_partial("mail/{$template}.html", $params);
		$message->addPart(get_partial('mail/template.html', array('content' => $content_html, 'username'=>$username)), 'text/html');
		$content_plain = get_partial("mail/{$template}.plain", $params);
		$message->addPart(get_partial('mail/template.plain', array('content' => $content_plain, 'username'=>$username)), 'text/plain');
		// Отправка письма
		$mailer->send($message);
		//$mc = memcache_connect('localhost');
	}

	static function checkEmail($sEmail) {
		// Проверка на существование такого пользователя в базе
		if ($oUser = Doctrine_Core::getTable('sfGuardUser')->findOneByEmailAddress($sEmail)) {
			$controller = sfContext::getInstance()->getController();
			// Проверка статуса пользователя
			if ($oUser->getStatus() == 'NEW') {
				$arResult = array(
					'status'	=> 'confirm',
					'message'	=> 'Вам уже было отправлено письмо для завершения регистрации.<br/>Eсли вы не получили письмо, то перейдите по <a href="'.$controller->genUrl("@registration_step2?repeat=$sEmail").'">ссылке</a> для повторной отправки письма',
					'allowed'	=> false,
				);
			} else {
				$arResult = array(
					'status'	=> 'exists',
					'message'	=> 'Данный email уже используется в системе. Если это ваш email, <a href="'.$controller->genUrl('sf_guard_signin').'">войдите в вистему</a>',
					'allowed'	=> false
				);
			}
			// Проверка формата
		} elseif(!preg_match('/^([^\s]+)((?:[-a-z0-9]+\.)+[a-z]{2,})$/i', $sEmail)) {
			$arResult = array(
				'status'	=> 'invalid',
				'message'	=> 'Неправильный адрес',
				'allowed'	=> false
			);
		} else {
			// Проверка на существования домена
			list ($Username, $Domain) = explode("@",$sEmail);
			if (getmxrr ($Domain, $MXHost) && @fsockopen (array_shift($MXHost), 25, $errno, $errstr, 30))	{
				$arResult = array(
					'status'	=> 'avalibe',
					'message'	=> 'Адрес доступен',
					'allowed'	=> true
				);
			} else {
				$arResult = array(
					'status'		=> 'domain does not exists',
					'message'		=> 'Такой домен не существует',
					'allowed'		=> false
				);
			}
		}
		return $arResult;
	}
}