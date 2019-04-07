<?php

namespace GSB\VisiteurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


use GSB\VisiteurBundle\Entity\fiche_frais;
use GSB\VisiteurBundle\Entity\visiteur;
use GSB\VisiteurBundle\Repository\visiteurRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class fiche_fraisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if($options['form_mois']){
            $builder->add('mois', ChoiceType::class, array('choices' => array('Janvier' => 1, 'Février' => 2, 'Mars' => 3, 'Avril' => 4, 'Mai' => 5, 'Juin' => 6, 'Juillet' => 7, 'Août' => 8, 'Septembre' => 9, 'Octobre' => 10, 'Novembre' => 11, 'Décembre' => 12 )))
                ->add('valid', SubmitType::class, array('label' => "Rechercher"));
        }
        else {
            $builder->add('mois', ChoiceType::class, array('choices' => array('Janvier' => 1, 'Février' => 2, 'Mars' => 3, 'Avril' => 4, 'Mai' => 5, 'Juin' => 6,
                'Juillet' => 7, 'Août' => 8, 'Septembre' => 9, 'Octobre' => 10, 'Novembre' => 11, 'Décembre' => 12)))
                ->add('nbJustificatifs', NumberType::class, array('label' => "Nombre de justificatifs:"))
                ->add('montantValide', NumberType::class, array('label' => "Montant valide:", "scale" => 7))
                ->add('dateNotif', DateType::class, array('label' => "Date de notification :"))
                ->add('etat', EntityType::class, array('class' => 'GSBVisiteurBundle:etat', 'choice_label' => 'libelle', 'label' => "Etat"))
                ->add('valid', SubmitType::class, array('label' => "Ajouter"));
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSB\VisiteurBundle\Entity\fiche_frais',
            'form_mois' => false
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gsb_visiteurbundle_fiche_frais';
    }


}
