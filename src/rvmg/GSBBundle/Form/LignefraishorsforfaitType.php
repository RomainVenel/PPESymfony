<?php

namespace rvmg\GSBBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LignefraishorsforfaitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('datedepense')
            ->add('montant')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'rvmg\GSBBundle\Entity\Lignefraishorsforfait'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rvmg_gsbbundle_lignefraishorsforfait';
    }
}
