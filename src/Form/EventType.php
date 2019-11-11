<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('date',DateType::class, ['widget' => 'single_text' ,'attr' => ['class' => 'js-datepicker'],])
            ->add('heure',TimeType::class, [
                'input'  => 'datetime',
                'widget' => 'single_text',])
            ->add('adresse')
            ->add('prixadherent',MoneyType ::class, [
                'required'   => true,'attr'=>["step"=>"0.01"]
            ])
            ->add('prixnonadherent',MoneyType ::class, [
                'required'   => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
