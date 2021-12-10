<?php

namespace App\Form;
use App\Entity\search;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('maxUser', IntegerType::class,[
                'required' =>false,
                'label' =>false,
                'attr' => [ 'placeholder' => 'max try Gagnant'],

            ])
            ->add('submit', submitType::class,[

                'label' =>false,
                'attr' => ['class' => "btn btn-primary", 'label'=>'search'],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => search::class,
            'method'=>'get',
            'crsf_protection'=>false

        ]);
    }
}
