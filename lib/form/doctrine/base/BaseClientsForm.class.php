<?php

/**
 * Clients form base class.
 *
 * @method Clients getObject() Returns the current form's model object
 *
 * @package    site-develope
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClientsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'phone'          => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'what_next'      => new sfWidgetFormTextarea(),
      'description'    => new sfWidgetFormTextarea(),
      'price'          => new sfWidgetFormInputText(),
      'start_dev_date' => new sfWidgetFormDateTime(),
      'stop_dev_date'  => new sfWidgetFormDateTime(),
      'ip_address'     => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 255)),
      'phone'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'what_next'      => new sfValidatorString(array('required' => false)),
      'description'    => new sfValidatorString(array('required' => false)),
      'price'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'start_dev_date' => new sfValidatorDateTime(array('required' => false)),
      'stop_dev_date'  => new sfValidatorDateTime(array('required' => false)),
      'ip_address'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('clients[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clients';
  }

}
