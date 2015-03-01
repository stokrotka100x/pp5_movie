<?php

namespace Graucho\MoviesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class KoszykType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tytul', 'text', array('label' => 'Tytuł filmu'))
            ->add('tresc', 'textarea', array('label' => 'Cena nabycia'))
            ->add('dataUtworzenia', 'date', array(
                'label' => 'Data zamówienia', 
                'widget' => 'single_text',
                'data' => new \DateTime("now")
                ))
            ->add('movie', 'entity', array(
                'class' => 'GrauchoMoviesBundle:Movie',
                'property' => 'tytul',
                'label' => 'Wybierz film do nabycia',
                ))
            ->add('save', 'submit', array(
                'label' => 'Prześlij zamówienie', 
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Graucho\MoviesBundle\Entity\Koszyk'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'graucho_moviesbundle_koszyk';
    }
}
