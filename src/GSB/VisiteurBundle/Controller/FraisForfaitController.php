<?php

namespace GSB\VisiteurBundle\Controller;

use GSB\VisiteurBundle\Form\frais_forfaitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GSB\VisiteurBundle\Entity\frais_forfait;
use Symfony\Component\HttpFoundation\Request;


class FraisForfaitController extends Controller
{
    public function addAction(Request $request)
    {
        $frais_forfait = new frais_forfait() ;
        $form = $this->createForm(frais_forfaitType::class , $frais_forfait);

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($frais_forfait);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Frais Forfait bien enregistre.');
                return $this->redirectToRoute('gsb_visiteur_frais_forfait-register');
            }

        }

        return $this->render( 'GSBVisiteurBundle:FraisForfait:ajout.html.twig', array('form' =>$form->createView()));
    }

    public function  registerAction(){
        return $this->render("GSBVisiteurBundle:FraisForfait:register.html.twig");
    }

    public function indexAction()
    {
        $ff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:frais_forfait')->getFF();
        return $this->render('GSBVisiteurBundle:FraisForfait:index.html.twig', array('ff'=>$ff));
    }
}
