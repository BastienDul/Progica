<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            // EQUIPEMENT
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

            // REGION
            ->add('region', ChoiceType::class, [
                'required' => false,
                'label' => 'Régions',
                'choices' => [
                    'Pays De La Loire' => 'Pays De La Loire',
                    'Poitou-Charentes' => 'Poitou-Charentes',
                    'Provence-Alpes-Côte d\'Azur' => 'Provence-Alpes-Côte d\'Azur',
                ],
                'placeholder' => '-- Choississez une région --',
            ])

            // departement
            ->add('departement', ChoiceType::class, [
                'required' => false,
                'label' => 'Département',
                'choices' => [
                    'Maine et Loire' => 'Maine et Loire',
                    'Vienne' => 'Vienne',
                    'Bouches Du Rhône' => 'Bouches Du Rhône',
                ],
                'placeholder' => '-- Choississez un département --',
            ])


            // VILLES
            ->add('localisation', ChoiceType::class, [
                'required' => false,
                'label' => 'Ville',
                'choices' => [
                    'Blaison-Saint-Sulpice' => 'Blaison',
                    'Angers' => 'Angers',
                    'Saumur' => 'Saumur',
                    'Poitier' => 'Poitier',
                    'Martigné' => 'Martigné',
                    'Marseille' => 'Marseille',
                ],
                'placeholder' => '-- Choississez une ville --',
            ])


            



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
