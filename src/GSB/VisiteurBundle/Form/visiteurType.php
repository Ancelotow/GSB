<?php

namespace GSB\VisiteurBundle\Form;

use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use GSB\VisiteurBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use GSB\VisiteurBundle\Repository\UserRepository;



class visiteurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];
        $id = $user->getId();
        $builder->add('nom',     TextType::class, array('label'=>"Nom :"), array('placeholder'=>"Votre Nom"))
                ->add('prenom',     TextType::class, array('label'=>"Prenom :"), array('placeholder'=>"Votre Prenom"))
                ->add('adresse',     TextType::class, array('label'=>"Adresse :"), array('placeholder'=>"Votre Adresse"))
                ->add('ville',     TextType::class, array('label'=>"Ville :"), array('placeholder'=>"Votre Ville"))
                ->add('cp',     NumberType::class, array('label'=>"CP:"), array('placeholder'=>"Votre Code Postal"))
                ->add('date_embauche',     DateType::class, array('label'=>"Date Embauche :"), array('placeholder'=>"Votre Date embauche"))
                ->add('valid',     SubmitType::class, array('label'=>'Ajouter')) ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'user' => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gsb_visiteurbundle_visiteur';
    }


}
