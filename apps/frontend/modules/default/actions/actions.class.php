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
	var $_flash_message		= 'Ваши контакты сохранены. Скоро мы с Вами свяжемся.';

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
			$this->clientForm->bind($request->getPostParameter($this->clientForm->getName()));
			if($this->clientForm->isValid()) {
				$this->clientForm->save();
				$this->getUser()->setFlash('notice', sprintf($this->_flash_message));
				$this->redirect('homepage');
			}
		}
	}

	public function executeGetform(sfWebRequest $request) {
		$this->clientForm			= new FrontendClientsForm();

		if($request->getPostParameter($this->clientForm->getName())) {
			$this->clientForm->bind($request->getPostParameter($this->clientForm->getName()));
			if($this->clientForm->isValid()) {
				$this->clientForm->save();
				$this->getUser()->setFlash('notice', sprintf($this->_flash_message));
				$this->redirect('getform');
			}
		}

		$this->setLayout('time_form_layout');
	}
}
