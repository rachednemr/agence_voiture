<?php

namespace Tuto\AnimeauxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class voitureType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('model')
            ->add('gamme')
            ->add('date')
        ;
    }

    public function getName()
    {
        return 'tuto_animeauxbundle_voituretype';
    }
}
