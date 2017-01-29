<?php
namespace rvmg\GSBBundle\Formulaires\Type;

use rvmg\GSBBundle\Formulaires\Data\FollowClass;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use rvmg\GSBBundle\Entity\FichefraisRepository;

/**
 * Description of FollowType
 *
 * @author Romain Venel & Maxime Genevier
 */
class FollowType extends AbstractType{
    
    private $visitors;
    private $state;
    
    function __construct($visitors, $state) {
        $this->visitors = $visitors;
        $this->state = $state;
    }

    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $visitors = $this->visitors;
        $state = $this->state;
        
        $builder
                ->add('fichefrais', 'entity', array(
                    'class'=>'rvmgGSBBundle:Fichefrais',
                    'property'=>'idFichefrais',
                    'label'=>'Fiche frais',
                    'query_builder' => $this->getQueryBuilder($state, $visitors)

                ));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'rvmg\GSBBundle\Formulaires\Data\FollowClass'));
    }
    
    public function getName(){
        return 'FollowForm';
    }
    
    public function getQueryBuilder($state, $visitors){
        return function(FichefraisRepository $er) use ($state, $visitors) {
                            return $er->findByStateAndVisitor($state, $visitors);
        };
    }
   
}
