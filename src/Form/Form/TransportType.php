<?php

namespace App\Form;

use App\Entity\Transport;
use phpDocumentor\Reflection\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Prix_tr',TextType::class,[
                'label'=>'Prix Transport',
                'attr'=>[
                    'placeholder'=>'Merci de definir le prix',
                    'calss'=>'prix'
                ]

            ])
            ->add('Type_tr')
            ->add('Disponibilite_tr')
            ->add('Id_groupe_tr')
            ->add('Destination_tr')
            ->add('Stock_tr')
            ->add('Image_tr', FileType::class , array('data_class'=>null, 'required'=>false))


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transport::class,
        ]);
    }



}
