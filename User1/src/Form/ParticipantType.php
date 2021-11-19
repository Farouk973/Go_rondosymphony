<?php

namespace App\Form;

use App\Entity\Participant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParticipantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cinPar')
            ->add('nomPar')
            ->add('prenomPar')
            ->add('sexePar')
            ->add('agePar')
            ->add('usernamePar')
            ->add('mdpPar')
            ->add('numtelPar')
            ->add('adressPar')
            ->add('mailPar')
            ->add('idGroup')
            ->add('dateInscri')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
        ]);
    }
}
