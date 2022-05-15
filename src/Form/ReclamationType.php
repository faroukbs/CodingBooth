<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class)
            ->add('email', TextType::class)
            ->add('subject', TextType::class)
            ->add('message', TextareaType::class)
            ->add('type', ChoiceType::class, [
                'choices' => [
                    "" =>"",
                    "fraud" => "fraud",
                    "Racism" => "Racism",
                    "POLICYVIOLATION" => "POLICYVIOLATION",
                    "VIOLENCE" => "VIOLENCE",
                    "HARASSEMENT" => "HARASSEMENT"
                ],
                'multiple' => false,
                'expanded' => false
            ])
            ->add('idCommande')
        

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
