<?php

namespace App\Form;

use App\Entity\Gagnants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class GagnantsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Rate',TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => '1..10'],

            ])
            ->add('nomGagnant', TextType::class,[
                'attr' => ['class' => 'form-control', 'placeholder' => 'NAME'],

            ])
            ->add('prenomGagnant',TextType::class, [
        'attr' => ['class' => 'form-control', 'placeholder' => 'Second name '],

    ])
            ->add('adresseGagnant',TextType::class, [
        'attr' => ['class' => 'form-control', 'placeholder' => 'email'],

    ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gagnants::class,
        ]);
    }
}
