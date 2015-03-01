<?php

namespace Graucho\MoviesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecenzjaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tytul', 'text', array('label' => 'Tytuł recenzji'))
            ->add('tresc', 'textarea', array('label' => 'Treść recenzji'))
            ->add('dataUtworzenia', 'date', array(
                'label' => 'Data utworzenia recenzji', 
                'widget' => 'single_text',
                'data' => new \DateTime("now")
                ))
            /*->add('movie', 'text', array(
                'class' => 'GrauchoMoviesBundle:Movie',
                'property' => 'name',
                'label' => 'Film do którego odnosi się recenzja',
                ))*/
            ->add('save', 'submit', array(
                'label' => 'Prześlij recenzje', 
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
            'data_class' => 'Graucho\MoviesBundle\Entity\Recenzja'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'graucho_moviesbundle_recenzja';
    }
}
