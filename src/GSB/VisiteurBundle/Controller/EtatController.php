<?php

namespace GSB\VisiteurBundle\Controller;

use GSB\VisiteurBundle\Form\etatType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GSB\VisiteurBundle\Entity\etat;
use Symfony\Component\HttpFoundation\Request;


class EtatController extends Controller
{
    public function addAction(Request $request, Session $session)
    {
        $etat = new etat() ;

        //$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $etat) ;


        $form = $this->createForm(etatType::class , $etat);

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($etat);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Etat bien enregistre.');
                return $this->redirectToRoute('gsb_visiteur_etat-register');
            }

        }

        return $this->render( 'GSBVisiteurBundle:Etat:ajout.html.twig', array('form' =>$form->createView()));
    }

    public function  registerAction(){
        return $this->render("GSBVisiteurBundle:Etat:register.html.twig");
    }

    public function indexAction()
    {
        $etats = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:etat')->allEtat();
        return $this->render('GSBVisiteurBundle:Etat:index.html.twig', array('etats'=>$etats));
    }

}
