<?php

namespace App\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Commande;
use App\Entity\Lignecommande;
use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LignecommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantite')

            ->add('idcommande',EntityType::class,[
                'class' => Commande::class,
                'choice_label'=>'idcommande',


            ])
            ->add('id_produit',EntityType::class,[
                'class' =>Product::class,
                'choice_label'=>'nom_produit',



            ])
            ->add('Valider',SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lignecommande::class,
        ]);
    }

}
