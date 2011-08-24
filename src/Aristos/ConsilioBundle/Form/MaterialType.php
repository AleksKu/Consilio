<?php

namespace Aristos\ConsilioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MaterialType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('type')
            ->add('lang')
            ->add('commentsCount')
            ->add('membersCount')
            ->add('viewsCount')
            ->add('bookmarksCount')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('tagsCount')
            ->add('author')
            ->add('category')
        ;
    }

    public function getName()
    {
        return 'aristos_consiliobundle_materialtype';
    }
}
