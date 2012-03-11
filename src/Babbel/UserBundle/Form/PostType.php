<?php

namespace Babbel\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('text')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    public function getName()
    {
        return 'babbel_userbundle_posttype';
    }
}
