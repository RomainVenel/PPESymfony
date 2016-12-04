<?php

namespace rvmg\GSBBundle\Formulaires\Type;

use rvmg\GSBBundle\Formulaires\Data\ConnexionClass;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of ConnexionFormType
 *
 * @author eleve
 */
class ConnexionFormType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('login', 'text')
                ->add('mdp', 'password')
                ->add('profil', 'choice', array('choices'=>array('Visiteur'=>'Visiteur',
                                                                 'Comptable'=>'Comptable'), 'expanded'=>true),
                                                           array('required'=>true));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'rvmg\GSBBundle\Formulaires\Data\ConnexionClass'));
    }
    
    public function getName(){
        return 'connexion';
    }
    
}
