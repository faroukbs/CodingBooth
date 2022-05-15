<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Entity\Salle;
use App\Entity\Categorie;
use App\Entity\Calendar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('image',FileType::class,[
                'mapped'=> false,
                'label'=>' please upload a image'
                
                ])
            ->add('idcategorie',EntityType::class,[
                'class' => Categorie::class,
                'choice_label'=>'nomcategorie',
                
                ])
                ->add('idcoach',EntityType::class,[
                    'class' => Utilisateur::class,
                    'choice_label'=>'nom',
                    
                    ]) 
                ->add('idsalle',EntityType::class,[
                    'class' => Salle::class,
                    'choice_label'=>'nomsalle',
                    
                    ])
            ->add('start', DateTimeType::class, [
                'date_widget' =>'single_text'
            ])
            ->add('end', DateTimeType::class, [
                'date_widget' =>'single_text'
            ])
            ->add('description')
            ->add('all_day')
            ->add('background_color', ColorType::class)
            ->add('border_color', ColorType::class)
            ->add('text_color', ColorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
        ]);
    }
}
