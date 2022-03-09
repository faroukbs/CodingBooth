<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Ticket;
use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Quantity')
            ->add('datereser')
            ->add('iduser',EntityType::class,[
                'class' => Utilisateur::class,
                'choice_label'=>'email',
            ])
            ->add('idticket',EntityType::class,[
                'class' => Ticket::class,
                'choice_label'=>'idticket',
            ])
            ->add('Valider',SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
