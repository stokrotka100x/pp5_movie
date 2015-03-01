<?php

namespace Graucho\MoviesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
		$builder->add('email');
        $builder->add('username');
		$builder->add('plainPassword');
		$builder->add('plainPassword_second');
    }

    public function getName()
    {
        return 'graucho_movies_registration';
    }
}