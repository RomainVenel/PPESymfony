<?php

namespace rvmg\GSBBundle\Formulaires\Type;

use rvmg\GSBBundle\Formulaires\Data\ChooseMonthAndVisitorClass;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of ChooseMonthAndVisitorType
 *
 * @author Romain Venel & Maxime Genevier
 */
class ChooseMonthAndVisitorType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('visitor', 'entity', array(
                    'class'=>'rvmgGSBBundle:Visiteur',
                    'property'=>'getCompleteName',
                    'label'=>'Visiteur'
                ))
                ->add('month', 'date', array(
                    'widget'=>'choice',
                    'label'=>'Mois'
                ));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'rvmg\GSBBundle\Formulaires\Data\ChooseMonthAndVisitorClass'));
    }
    
    public function getName(){
        return 'chooseMonthAndVisitor';
    }
    
}
