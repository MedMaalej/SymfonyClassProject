<?php

namespace Formation\FormationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormateurType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFormateur')
            ->add('prenomFormateur')
            ->add('mailFormateur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Formation\FormationBundle\Entity\Formateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'formation_formationbundle_formateur';
    }
}
