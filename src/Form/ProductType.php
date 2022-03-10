<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nomprod',TextType::class, [
            'constraints' => [
                     new Length([
                    'min' => 4,
                    'minMessage' => 'Votre nom produit doit contenir au moins {{ limit }} caractères.',
                ]),
                            ],
               ]) 
        ->add('description',TextType::class)
        ->add('prix',MoneyType::class)
        ->add('quantity',IntegerType::class)
        ->add('CategoryProd',EntityType::class,[
                'class' => Category::class,
                'choice_label'=> 'nom',
                'label' => 'Category'
        ])
        
       
            ->add('image',FileType::class,[
                'mapped'=> false,
                'label'=>' please upload a image'
                
                ])
                ->add('add',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
