<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\Ticket;
use App\Entity\Eventl;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder

            ->add('typeticket',
                ChoiceType::class, [
                    'choices' => [
                        'vip' => 'vip',
                        'classeB' => 'classeB',
                        'classec' => 'classec'

                    ],

                ])
            ->add('prix')
            ->add('description')
            ->add('idevent',EntityType::class,[
                'class' => Eventl::class,
                'choice_label'=>'idevent',


            ])
            ->add('image',FileType::class ,array('data_class' => null))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
