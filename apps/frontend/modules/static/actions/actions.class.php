<?php

/**
 * static actions.
 *
 * @package    masegsc
 * @subpackage static
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class staticActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }
  public function executeServicios(sfWebRequest $request)
  {
  }
  public function executeCorretaje(sfWebRequest $request)
  {
  }
  public function executeQuienessomos(sfWebRequest $request)
  {
  }
  public function executeDondeestamos(sfWebRequest $request)
  {
  }
  public function executeContacto(sfWebRequest $request)
  {
    $this->form = new ContactForm();
  }
  public function executeError404(sfWebRequest $request)
  {
  }
  public function executeSendmail(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('POST'));

    $name     = $request->getParameter('name');
    $email    = $request->getParameter('email');
    $phone  = $request->getParameter('phone');
    $pre_message  = $request->getParameter('message');

    $message = "Don(a): ".$name."\nCorreo: ".$email."\nFono: ".$phone."\n\nEscribió:\n\n".$pre_message."\n\n\n\nNO RESPONDER A ESTE CORREO\n(notreply@mielycanela.cl)";

    $mensaje = Swift_Message::newInstance()
      ->setFrom(array('notreply@masegsc.cl' => 'Contacto MASEG'))
      ->setTo(array('contacto@masegsc.cl')) //CAMBIAR AL CORREO DE DESTINO DEFINITIVO
      ->setBcc(array('admin@webdevel.cl'))
      ->setSubject('Nuevo mensaje desde www.masegsc.cl')
      ->setBody($message)
    ;

    $this->getMailer()->send($mensaje);

    $this->getResponse()->setContent('El mensaje ha sido enviado satisfactoriamente...');

    return sfView::NONE;
  }
}
