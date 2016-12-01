<?php

namespace rvmg\GSBBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichefraisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mois')
            ->add('nbjustificatifs')
            ->add('montantvalide')
            ->add('datemodif')
            ->add('idetat')
            ->add('idvisiteur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'rvmg\GSBBundle\Entity\Fichefrais'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rvmg_gsbbundle_fichefrais';
    }
}
