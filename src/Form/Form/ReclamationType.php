<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType ;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidCaptcha;


class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomReclam', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'NAME'],

            ])

            ->add('prenomReclam', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'SECOND NAME'],
            ])
            ->add('adresseReclam', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'EXEMPLE@esprit.tn'],
            ])
            ->add('Reclam', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Message'],
            ])

           ->add('captchaCode', CaptchaType::class, array(
        'captchaConfig' => 'Reclamation',
        'constraints' => [
            new ValidCaptcha([
                'message' => 'Invalid captcha, please try again',
            ]),
        ],
    ));

    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);

    }




}
