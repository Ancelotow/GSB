<?php

namespace GSB\VisiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Session\Session;
use GSB\VisiteurBundle\Entity\visiteur;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class DefaultController extends Controller
{
    public function indexAction(Session $session)
    {
        $idUser = $this->getUser()->getId();
        $idVisiteur = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:visiteur')->getVisiteur($idUser);
        if( $idVisiteur != null ){
            $session->set('idVisiteur', $idVisiteur->getId());
            $session->set('nomVisiteur', $idVisiteur->getNom());
            $session->set('prenomVisiteur', $idVisiteur->getPrenom());
        }
        return $this->render('GSBVisiteurBundle:Default:index.html.twig');
    }
    public function deconnexionAction(Session $session)
    {
        $session->invalidate();
        return $this->redirect('/logout');
    }

}
