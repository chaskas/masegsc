<?php

class ContactForm extends BaseForm
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormInputText(array('label' => 'Nombre')),
      'email'        => new sfWidgetFormInputText(array('label' => 'Email')),
      'message'      => new sfWidgetFormTextarea(array('label' => 'Mensaje')),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorString(array('required'=>true)),
      'email'       => new sfValidatorEmail(array('required'=>true)),
      'message'     => new sfValidatorString(array('required'=>true)),
    ));
    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    $this->widgetSchema->setFormFormatterName('table');
  }
}
