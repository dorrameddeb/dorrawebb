<?php

namespace App\Form;

use App\Entity\Pret;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PretType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Montant_pret')
            ->add('Date_pret', DateType::class, [ // Utilisez DateType au lieu de null
                'widget' => 'single_text', // Cette option est valide pour DateType
            ])
            ->add('TMM')
            ->add('Taux')
            ->add('Revenus_bruts')
            ->add('Age_employe')
            ->add('duree_remboursement')
            ->add('Categorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pret::class,
        ]);
    }
}
