<?php

class FrontendClientsForm extends ClientsForm {
	public function configure() {
		parent::configure();

		$this->validatorSchema['name']		= new sfValidatorString(
			array('required'	=> true),
			array('required'	=> 'Обязательно для заполнения')
		);

		$this->widgetSchema['phone']		= new sfWidgetFormInput(
			array(),
			array('class'	=> 'phone-input')
		);

		$this->validatorSchema['phone']		= new sfValidatorString(
			array('required'	=> true),
			array('required'	=> 'Обязательно для заполнения')
		);

		$this->validatorSchema['email']		= new sfValidatorEmail(
			array('required'	=> true),
			array(
				'invalid'	=> 'Некорректно введен E-mail',
				'required'	=> 'Обязательно для заполнения'
			)
		);

		$this->useFields(
			array(
				'name',
				'phone',
				'email'
			)
		);
	}

	public function doBind(array $values) {
		if($values['phone'] != '') {
			$this->validatorSchema['email']->setOption('required', false);
		}

		if($values['email'] != '') {
			$this->validatorSchema['phone']->setOption('required', false);
		}
		parent::doBind($values);
	}
}