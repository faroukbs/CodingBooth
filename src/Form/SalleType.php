<?php

namespace App\Form;

use App\Entity\Salle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class SalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomsalle',TextType::class,[ 'label' => 'nom de la salle'])
            ->add('description',TextType::class,[ 'label' => 'description de la salle'])
            ->add('materiel' , ChoiceType::class,[
                'label' => 'materiel de la salle',
                'choices' => [
                    'aucun'=> null ,
                    'bicyclette' => 'bicyclette',
                    'tapis roulante' => 'tapis roulante',
                    
                ],
          // 'multiple' => true ,
        ],   
        
        )
        ->add('image',FileType::class,[
            'mapped'=> false,
            'label'=>' please upload a image'
            
        ]);
   }

//LISTE DEROULANTE MATERIEL

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Salle::class,
        ]);
    }
}
