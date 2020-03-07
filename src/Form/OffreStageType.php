<?php

namespace App\Form;

use App\Entity\Offredestage;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class OffreStageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('date_publication',DateType::class, ['widget' => 'single_text' ,'attr' => ['class' => 'js-datepicker','readonly'=>'true'],])
            ->add('description')
            ->add('description_detail',CKEditorType::class)
            ->add('Nom_Entreprise')
            ->add('ville')
            ->add('annee')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Offredestage::class,
        ]);
    }
}
