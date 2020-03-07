<?php

namespace App\Form;

use App\Entity\Tutorat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class TutoratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Date',DateType::class, ['widget' => 'single_text' ,'attr' => ['class' => 'js-datepicker'],])
            ->add('Heure',TimeType::class, [
                'input'  => 'datetime',
                'widget' => 'single_text',])
            ->add('Salle')
            ->add('Batiment')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tutorat::class,
        ]);
    }
}
