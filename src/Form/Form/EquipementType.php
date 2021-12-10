<?php

namespace App\Form;

use App\Entity\Equipement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class EquipementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProduit',TextType::class,[
                'attr' => ['class' => 'form-control','placeholder' => 'Produit'],
            ])
            ->add('marqueProduit',TextType::class,[
                'attr' => ['class' => 'form-control','placeholder' => 'marque'],
            ])
            ->add('categorieProduit',TextType::class,[
                'attr' => ['class' => 'form-control','placeholder' => 'categorie'],
            ])
            ->add('prixProduit',TextType::class,[
                'attr' => ['class' => 'form-control','placeholder' => 'prix'],
            ])
            ->add('descProduit',TextareaType::class,[
                'attr' => ['class' => 'text-area form-control','placeholder' => 'description'],
            ])

            ->add('souscategory',TextType::class,[
                'attr' => ['class' => 'form-control','placeholder' => 'souscategory'],
            ])
            ->add('nombre',IntegerType::class,[
                'attr' => ['class' => 'form-control','placeholder' => 'nombre'],
            ])
            ->add('stockdisponible',IntegerType::class,[
                'attr' => ['class' => 'form-control','placeholder' => 'Stock'],
            ])

            ->add('image', FileType::class, array('data_class' => null,'label' => 'Image d equipement  (PDF/png/Jpeg file)','attr'=>[
                'class' => 'form-control'
            ]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Equipement::class,
        ]);
    }
}
