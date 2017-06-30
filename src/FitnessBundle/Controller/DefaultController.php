<?php

namespace FitnessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FitnessBundle:Default:index.html.twig');
    }
}
