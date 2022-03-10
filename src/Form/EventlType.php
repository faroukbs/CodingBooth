<?php

namespace App\Form;

use App\Entity\Eventl;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class EventlType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',TextType::class,[ 'label' => 'Le titre de l\'événement'])
            ->add('description',TextType::class,[ 'label' => 'Description de l\'événement'])
            ->add('ville',TextType::class,[ 'label' => 'Ville de l\'événement'])
            ->add('adresse',TextType::class,[ 'label' => 'L\'adresse'])
            ->add('datedebut',DateType::class,[ 'label' => 'Date debut'])
            ->add('photo',FileType::class ,array('data_class' => null))
            ->add('datefin',DateType::class,[ 'label' => 'Date fin'])
            ->add('heure',TextType::class,[ 'label' => 'L\'heure'])
            ->add('view',TextType::class,[ 'label' => 'L\'view'])

->add('evaluation', ChoiceType::class, array(
        'choices' => array('1  ' => '1'
        , ' 2' => '2',
            ' 3' => '3',
            ' 4' => '4'),

        'expanded' => true,
    ))
            ->add('nombreParticipants', NumberType::class, [
                'attr' => ['class' => 'form-control']
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Eventl::class,
        ]);
    }
}
