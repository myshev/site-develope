<?php

/**
 * default actions.
 *
 * @package    site-develope
 * @subpackage default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions
{
	var $_flash_message				= 'Ваши контакты сохранены. Скоро мы с Вами свяжемся.';
	var $_flash_message_error		= 'Вы допустили ошибку при заполнении полей формы. Попробуйте еще раз.';

	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request)
	{
		$this->clientForm			= new FrontendClientsForm();

		$this->oBenefits 			= BenefitsTable::getInstance()->findAll();
		$this->oServices 			= ServicesTable::getInstance()->findAll();

		if($request->getPostParameter($this->clientForm->getName())) {
			$this->processFormClient($this->clientForm, $request->getPostParameter($this->clientForm->getName()), 'homepage');
		}
	}

	public function executeGetform(sfWebRequest $request) {
		$this->clientForm			= new FrontendClientsForm();

		if($request->getPostParameter($this->clientForm->getName())) {
			$this->processFormClient($this->clientForm, $request->getPostParameter($this->clientForm->getName()), 'getform');
		}

		$this->setLayout('time_form_layout');
	}

	private function processFormClient($oForm, $oData, $redirectRouter = '') {
		$oForm->bind($oData);
		if($oForm->isValid()) {
			$obClient	= $oForm->save();

			mailHelper::send(
				sfConfig::get('app_mail_moderator'),
				'Новая заявка. Site-develope.ru',
				'client_apply',
				array(
					'obClient' => $obClient
				)
			);

			$obClient->setIpAddress($_SERVER['REMOTE_ADDR']);
			$obClient->save();

			$this->getUser()->setFlash('notice', sprintf($this->_flash_message));
			if($redirectRouter != '')
				$this->redirect($redirectRouter);
		}
	}
}
