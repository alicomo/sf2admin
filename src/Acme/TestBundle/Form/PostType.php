<?php

namespace Acme\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
        ;
    }

    public function getName()
    {
        return 'acme_testbundle_posttype';
    }
}
