<?php

namespace GSB\VisiteurBundle\Form;

use GSB\VisiteurBundle\Repository\fiche_fraisRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\NumberType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class ligne_frais_forfaitType extends AbstractType
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
                  ->add('fraisForfais', EntityType::class, array('class' => 'GSBVisiteurBundle:frais_forfait', 'choice_label' => 'FF', 'label' => "Frais Forfait"))
                  ->add('quantite', NumberType::class, array('label'=>"Quantité"))
                  ->add('valid',     SubmitType::class, array('label'=>"Ajouter")) ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSB\VisiteurBundle\Entity\ligne_frais_forfait',
            'id' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gsb_visiteurbundle_ligne_frais_forfait';
    }


}
