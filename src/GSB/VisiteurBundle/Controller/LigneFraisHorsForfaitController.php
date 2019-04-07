<?php

namespace GSB\VisiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GSB\VisiteurBundle\Entity\ligne_frais_hors_forfait;
use GSB\VisiteurBundle\Form\ligne_frais_hors_forfaitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class LigneFraisHorsForfaitController extends Controller
{
    public function addAction(Request $request, Session $session)
    {
        $ligne_frais_hors_forfait = new ligne_frais_hors_forfait() ;

        //$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $ligne_frais_hors_forfait);

        $id = $session->get('idVisiteur');
        $form = $this->createForm(ligne_frais_hors_forfaitType::class, $ligne_frais_hors_forfait, array('id'=>$id));

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($ligne_frais_hors_forfait);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Ligne Frais Hors Forfait bien enregistre.');
                return $this->redirectToRoute('gsb_visiteur_ligne_frais_hors_forfait-register');
            }

        }

        return $this->render( 'GSBVisiteurBundle:LigneFraisHorsForfait:ajout.html.twig', array('form' =>$form->createView()));
    }

    public function  registerAction(){
        return $this->render("GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig");
    }

    public function indexAction(Session $session){
        $id = $session->get('idVisiteur');
        $lfhf = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:ligne_frais_hors_forfait')->getLFHF($id);
        return $this->render('GSBVisiteurBundle:LigneFraisHorsForfait:index.html.twig', array('lfhf'=>$lfhf));
    }
}
