<?php

namespace GSB\VisiteurBundle\Controller;

use GSB\VisiteurBundle\Form\fiche_fraisType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GSB\VisiteurBundle\Entity\fiche_frais;
use GSB\VisiteurBundle\Entity\visiteur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Security;


class FicheFraisController extends Controller
{
    public function addAction(Request $request, Session $session)
    {
        $fiche_frais = new fiche_frais() ;
        $form = $this->createForm(fiche_fraisType::class , $fiche_frais);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            $id = $session->get('idVisiteur');
            $ff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:fiche_frais')->getByMois($fiche_frais->getMois(), $id);
            if($ff == null){
                if($form->isValid()){
                    $em = $this->getDoctrine()->getManager();

                    $visiteur = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:visiteur')->getLeVisiteur($id);
                    $fiche_frais->setIdVisiteur($visiteur);
                    $em->persist($fiche_frais);
                    $em->flush();
                    $request->getSession()->getFlashBag()->add('notice', 'Visiteur bien enregistre.');
                    return $this->redirectToRoute('gsb_visiteur_fiche_frais-register');
                }
            }
        }

        return $this->render( 'GSBVisiteurBundle:FicheFrais:ajout.html.twig', array('form' =>$form->createView()));
    }

    public function  registerAction(){
        return $this->render("GSBVisiteurBundle:FicheFrais:register.html.twig");
    }

    public function indexAction(Session $session)
    {
        $nomMois = array( "Janvier" , "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" );
        $id = $session->get('idVisiteur');
        $ff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:fiche_frais')->getFF($id);
        return $this->render('GSBVisiteurBundle:FicheFrais:index.html.twig', array('ff'=>$ff, 'mois'=>$nomMois));
    }

    public function updateAction(Request $request, $id)
    {
        $ff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:fiche_frais')->getUnFF($id);
        $fiche_frais = new fiche_frais() ;
        $form = $this->createForm(fiche_fraisType::class , $fiche_frais);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                return $this->render( 'GSBVisiteurBundle:FicheFrais:registerUpdate.html.twig');
            }
        }
        return $this->render( 'GSBVisiteurBundle:FicheFrais:update.html.twig', array('form' =>$form->createView(), 'ff'=>$ff));
    }

    public function selectMoisAction(Request $request)
    {
        $fiche_frais = new fiche_frais();
        $form = $this->createForm(fiche_fraisType::class, $fiche_frais, array('form_mois' => true));
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $mois = $fiche_frais->getMois();
                return $this->redirectToRoute('gsb_visiteur_fiche_frais-listMois', array('mois'=>$mois));
            }

        }
        return $this->render('GSBVisiteurBundle:FicheFrais:selectMois.html.twig', array('form' => $form->createView()));
    }

    public function listMoisAction(Session $session, $mois)
    {
        $nomMois = array( "Janvier" , "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" );
        $id = $session->get('idVisiteur');
        $ff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:fiche_frais')->getByMois($mois, $id);
        return $this->render('GSBVisiteurBundle:FicheFrais:listMois.html.twig', array('ff'=>$ff, 'mois'=>$nomMois[$mois-1]));
    }

    public function  syntheseMoisAction(Request $request){
        $fiche_frais = new fiche_frais();
        $form = $this->createForm(fiche_fraisType::class, $fiche_frais, array('form_mois' => true));
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $mois = $fiche_frais->getMois();
                return $this->redirectToRoute('gsb_visiteur_fiche_frais-synthese', array('mois'=>$mois));
            }
        }
        return $this->render('GSBVisiteurBundle:FicheFrais:syntheseMois.html.twig', array('form' => $form->createView()));
    }

    public function syntheseAction(Session $session, $mois)
    {
        $ff = new fiche_frais();
        $nomMois = array( "Janvier" , "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" );
        $id = $session->get('idVisiteur');
        $ff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:fiche_frais')->getByMois($mois, $id);
        if($ff == null){
            return $this->render('GSBVisiteurBundle:FicheFrais:synthese.html.twig', array(
                'montantValide' => 0,
                'totalLFHF' => 0,
                'totalLFF' => 0,
                'total' => 0,
                'error' => 1,
                'mois' => $nomMois[$mois - 1]
            ));
        }
        $lff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:ligne_frais_forfait')->getLFFSynth($id, $mois);
        $lfhf = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:ligne_frais_hors_forfait')->getLFHFSynt($mois, $id);
        $totalLFHF = 0;
        foreach($lfhf as $unFHF){
            $totalLFHF = $unFHF->getMontant() + $totalLFHF;
        }
        $totalLFF = 0;
        foreach($lff as $unFF){
            $totalLFF = ($unFF->getFraisForfais()->getMontant() * $unFF->getQuantite()) + $totalLFF;
        }
        $total = $totalLFHF + $totalLFF;
        $montantValid = $ff->getMontantValide();
        return $this->render('GSBVisiteurBundle:FicheFrais:synthese.html.twig', array(
            'montantValide' => $montantValid,
            'totalLFHF' => $totalLFHF,
            'totalLFF' => $totalLFF,
            'total' => $total,
            'error' => 0,
            'mois' => $nomMois[$mois - 1]
        ));
    }

}
