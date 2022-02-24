<?php

namespace App\Form;
use App\Entity\Eventl;
use App\Entity\Participation;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class ParticipationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('dateparticipation')
            ->add('iduser',EntityType::class,[
                'class' => User::class,
                'choice_label'=>'nom',


            ])
            ->add('idevent',EntityType::class,[
                'class' =>Eventl::class,
                'choice_label'=>'titre',


            ])
            ->add('Valider',SubmitType::class);
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participation::class,
        ]);
    }
}
