<?php

namespace App\Form;

use App\Entity\Equipements;
use App\Entity\Gites;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipementsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('laveVaiselle')
            ->add('laveLinge')
            ->add('climatisation')
            ->add('television')
            ->add('terrasse')
            ->add('bbq')
            ->add('piscinePrivee')
            ->add('piscinePublic')
            ->add('tennis')
            ->add('pingPong')
            ->add('gites', EntityType::class, [
                'class' => Gites::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipements::class,
        ]);
    }
}
