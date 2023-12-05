<?php

namespace App\Form;

use App\Entity\Gites;
use App\Entity\TarifLocation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TarifLocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('periodeDebut')
            ->add('periodeFin')
            ->add('tarifHebdomadaire')
            ->add('gites', EntityType::class, [
                'class' => Gites::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TarifLocation::class,
        ]);
    }
}
