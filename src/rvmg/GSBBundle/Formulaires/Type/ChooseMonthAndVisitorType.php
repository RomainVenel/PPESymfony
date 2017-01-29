<?php

namespace rvmg\GSBBundle\Formulaires\Type;

use rvmg\GSBBundle\Formulaires\Data\ChooseMonthAndVisitorClass;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use rvmg\GSBBundle\Entity\VisiteurRepository;

/**
 * Description of ChooseMonthAndVisitorType
 *
 * @author Romain Venel & Maxime Genevier
 */
class ChooseMonthAndVisitorType extends AbstractType{
    
    private $comptable;
    
    function __construct($comptable) {
        
        $this->comptable = $comptable;
        
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $comptable = $this->comptable;
        $builder
                ->add('visitor', 'entity', array(
                    'class'=>'rvmgGSBBundle:Visiteur',
                    'property'=>'getCompleteName',
                    'label'=>'Visiteur',
                    'query_builder' => function(VisiteurRepository $er) use ($comptable) {
                            return $er->findByComptable($comptable);
                        },

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
