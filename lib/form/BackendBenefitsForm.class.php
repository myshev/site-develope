<?php

class BackendBenefitsForm extends BenefitsForm {
	public function configure() {
		parent::configure();

		$this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
			'file_src'  => '/uploads/benefits/'.$this->getObject()->getImage(),
			'is_image'  => true,
			'edit_mode' => !$this->isNew(),
			'template'  =>  '<div>'.($this->getObject()->getImage() ? '%file%' : '') .'<br />%input%<br />%delete% %delete_label%</div>',
		));

		$this->validatorSchema['image']	= new sfValidatorFile(
			array(
				'max_size'		=> '2000000',
				'mime_types'	=> 'web_images',
				'path'			=> sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . 'benefits',
				'required'    => false
			)
		);

		$this->validatorSchema['image_delete'] = new sfValidatorPass();

		$this->useFields(
			array(
				'title',
				'text',
				'image'
			)
		);
	}
}