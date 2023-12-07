<?php

namespace App\Form;

use App\Entity\Equipements;
use App\Entity\Gites;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class AddGitesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $option): void
    {
        $builder
            ->add('localisation')
            ->add('region')
            ->add('departement')
            ->add('surfacehHabitable')
            ->add('nombreChambres')
            ->add('nombreCouchage')
            ->add('accepteAnimaux')
            ->add('gite', Choice::class, [
                'choices' =>  $option['equipements_list'],
                'multiple' => true,
                'expanded' => true, // Si vous voulez afficher les choix en tant que boutons radio ou cases à cocher
                'label' => 'Equipement',
                'mapped' => false, 
            ])
            ->add('contact', ContactType::class)
            ->add('proprietaires', ProprietairesType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gites::class,
        ]);
    }
}
