<?php
namespace FitnessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * AdminController
 */
class AdminController extends Controller
{
    /**
     * Lists all actividad entities.
     *
     */
    public function indexAction()
    {
        
        return $this->render('FitnessBundle:admin:index.html.twig');
    }
}