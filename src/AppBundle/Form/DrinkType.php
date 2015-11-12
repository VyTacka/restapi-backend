<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DrinkType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('imagePath')
            ->add('createdAt')
            ->add('packagingCapacity')
            ->add('packagingAmount')
            ->add('packagingPrice')
            ->add('alcVol')
            ->add('rating')
            ->add('note')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Drink'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_drink';
    }
}
