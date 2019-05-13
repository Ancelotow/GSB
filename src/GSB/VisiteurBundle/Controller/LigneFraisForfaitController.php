<?php

namespace GSB\VisiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GSB\VisiteurBundle\Entity\ligne_frais_forfait;
use Symfony\Component\HttpFoundation\Request;
use GSB\VisiteurBundle\Form\ligne_frais_forfaitType;
use Symfony\Component\HttpFoundation\Session\Session;

class LigneFraisForfaitController extends Controller
{
    public function addAction(Request $request, Session $session)
    {
        $ligne_frais_forfait = new ligne_frais_forfait() ;
        $id = $session->get('idVisiteur');
        $form = $this->createForm(ligne_frais_forfaitType::class, $ligne_frais_forfait, array('id'=>$id) );


        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($ligne_frais_forfait);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Ligne Frais Forfait bien enregistre.');
                return $this->redirectToRoute('gsb_visiteur_ligne_frais_forfait-register');
            }

        }

        return $this->render( 'GSBVisiteurBundle:LigneFraisForfait:ajout.html.twig', array('form' =>$form->createView()));
    }

    public function  registerAction(){
        return $this->render("GSBVisiteurBundle:LigneFraisForfait:register.html.twig");
    }

    public function indexAction(Session $session){
        $id = $session->get('idVisiteur');
        $lff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:ligne_frais_forfait')->getLFF($id);
        return $this->render('GSBVisiteurBundle:LigneFraisForfait:index.html.twig', array('lff'=>$lff));
    }

    public function updateAction(Request $request, Session $session, $id){
        $ligne_frais_forfait = new ligne_frais_forfait() ;
        $ligne_frais_forfait = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:ligne_frais_forfait')->getUnLFF($id);
        $idS = $session->get('idVisiteur');
        $form = $this->createForm(ligne_frais_forfaitType::class, $ligne_frais_forfait, array('id'=>$idS) );
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Ligne Frais Forfait bien modifier.');
                return $this->redirectToRoute('gsb_visiteur_ligne_frais_forfait-index');
            }
        }
        return $this->render( 'GSBVisiteurBundle:LigneFraisForfait:update.html.twig', array(
            'form' =>$form->createView(),
            'lff'=>$ligne_frais_forfait
        ));
    }

}
