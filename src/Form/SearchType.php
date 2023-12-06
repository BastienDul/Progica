<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('laveVaiselle', CheckboxType::class, [
            'required' => false,
            'label' => 'Lave-vaisselle',
        ])
        ->add('laveLinge', CheckboxType::class, [
            'required' => false,
            'label' => 'Lave-linge',
        ])
        ->add('climatisation', CheckboxType::class, [
            'required' => false,
            'label' => 'Climatisation',
        ])
        ->add('television', CheckboxType::class, [
            'required' => false,
            'label' => 'Télévision',
        ])
        ->add('terrasse', CheckboxType::class, [
            'required' => false,
            'label' => 'Térrasse',
        ])
        ->add('bbq', CheckboxType::class, [
            'required' => false,
            'label' => 'Barbecue',
        ])
        ->add('piscinePrivee', CheckboxType::class, [
            'required' => false,
            'label' => 'Piscine privé',
        ])
        ->add('piscinePublic', CheckboxType::class, [
            'required' => false,
            'label' => 'Piscine public',
        ])
        ->add('tennis', CheckboxType::class, [
            'required' => false,
            'label' => 'Tennis',
        ])
        ->add('pingPong', CheckboxType::class, [
            'required' => false,
            'label' => 'Ping-pong',
        ])
        // Ajoutez d'autres équipements ici selon vos besoins
        ->add('search', SubmitType::class, [
            'label' => 'Rechercher',
        ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
