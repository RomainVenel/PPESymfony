<?php

namespace rvmg\GSBBundle\Formulaires\Type;

use rvmg\GSBBundle\Formulaires\Data\ChangeMdpClass;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of ConnexionFormType
 *
 * @author eleve
 */
class ChangeMdpType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                ->add('ancienMdp', 'password')
                ->add('nouveauMdp', 'repeated', array(
    'type' => 'password',
    'invalid_message' => 'Les mots de passe doivent être identiques',
    'options' => array('attr' => array('class' => 'password-field')),
    'required' => true,
    'first_options'  => array('label' => 'Ecrivez votre nouveau mot de passe'),
    'second_options' => array('label' => 'Ecrivez encore une fois votre nouveau mot de passe'),
    ));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'rvmg\GSBBundle\Formulaires\Data\ChangeMdpClass'));
    }
    
    public function getName(){
        return 'modifMDP';
    }
    
}