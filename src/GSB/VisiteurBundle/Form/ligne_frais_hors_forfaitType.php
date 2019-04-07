<?php

namespace GSB\VisiteurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use GSB\VisiteurBundle\Repository\fiche_fraisRepository;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ligne_frais_hors_forfaitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $id = $options['id'];
        $builder  ->add('ficheFrais', EntityType::class, array('class' => 'GSBVisiteurBundle:fiche_frais', 'choice_label' => 'FF', 'label' => "Fiche Frais", 'query_builder' => function(fiche_fraisRepository $r) use ($id) {
            return $r->createQueryBuilder('ff')
                ->where('ff.idVisiteur = :id')
                ->orderBy('ff.dateNotif')
                ->setParameter('id', $id);
        },))
                  ->add('date', DateType::class, array('label'=>"Date"))
                  ->add('montant', NumberType::class, array('label'=>"Montant", "scale"=>7))
                  ->add('libelle', TextType::class, array('label'=>"Libelle"))
                  ->add('valid',     SubmitType::class, array('label'=>'Ajouter')) ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSB\VisiteurBundle\Entity\ligne_frais_hors_forfait',
            'id' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gsb_visiteurbundle_ligne_frais_hors_forfait';
    }


}
