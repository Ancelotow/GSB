<?php

namespace GSB\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSBAccueilBundle:Default:index.html.twig');
    }

    public function comptableAction()
    {
        return $this->render('GSBAccueilBundle:Default:comptable.html.twig');
    }

}
