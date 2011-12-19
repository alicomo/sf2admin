<?php

namespace Acme\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('author')
            ->add('body')
        ;
    }

    public function getName()
    {
        return 'acme_testbundle_commenttype';
    }
}
