<?php
namespace UsuariosBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;

use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;

class DefaultController extends BaseController

{
    public function indexAction()
    {
        return $this->render('UsuariosBundle:Default:index.html.twig');
    }
    
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
