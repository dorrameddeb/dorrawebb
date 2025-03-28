<?php

namespace App\Form;

use App\Entity\Reponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Date_reponse', null, [
                'widget' => 'single_text',
            ])
            ->add('Montant_demande')
            ->add('Revenus_bruts')
            ->add('Taux_interet')
            ->add('Mensualite_credit')
            ->add('Potentiel_credit')
            ->add('Duree_remboursement')
            ->add('Montant_autorise')
            ->add('Assurance')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
        ]);
    }
}
