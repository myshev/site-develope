<?php

class BackendClientsForm extends ClientsForm {
	public function configure() {
		parent::configure();

		$this->widgetSchema['email']				= new sfWidgetFormInput();
		$this->validatorSchema['email']				= new sfValidatorEmail();

		$this->widgetSchema['start_dev_date']		= new sfWidgetFormDateJQueryUI(
			array(
				"change_month" => true,
				"change_year" => true
			)
		);
		$this->widgetSchema['stop_dev_date']		= new sfWidgetFormDateJQueryUI(
			array(
				"change_month" => true,
				"change_year" => true
			)
		);

		unset(
			$this['created_at'],
			$this['updated_at']
		);
	}
}