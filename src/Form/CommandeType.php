<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Date',DateType::class)
            ->add('nom_client',TextType::class)
            ->add('prenom_client',TextType::class)
            ->add('telephone',TextType::class)
            ->add('adresse',TextType::class)
            ->add('montant')

            ->add('mode_paiement',ChoiceType::class,[
                'choices' => [
                    "Par Carte" => 0,
                    "Par Cash"  => 1,
                ]
            ])
            ->add('etat_commande',ChoiceType::class,[
                'choices' => [
                    "Non Payée" => 0,
                    "Payée"  => 1,
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
