<?php

namespace App\Form;

use App\Entity\Cours;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomcours',TextType::class,[ 'label' => 'nom du cours'])
            ->add('descriptioncours',TextType::class,[ 'label' => 'description du cours', ])
            ->add('dateheure')
            ->add('image',FileType::class,[
                'mapped'=> false,
                'label'=>' please upload a image'
                
                ])
            ->add('idcategory',EntityType::class,[
                'class' => Category::class,
                'choice_label'=>'nomcategory',
                

       ]) ;
   }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
