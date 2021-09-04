<?php

namespace App\Form;

use App\Entity\Package;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddPackageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'attr'=> ['class'=>"form-control form-control-solid"]
                ,'label'=>false
            ])
            ->add('price',null, [
                'attr'=> ['class'=>'form-control form-control-solid']
                ,'label'=>false
            ])
            ->add('limit_report', null, [
                'attr'=> ['class'=>'form-control form-control-solid'],
                'label'=>false
            ])
            ->add('number_app', null, [
                'attr'=> ['class'=>'form-control form-control-solid']
                ,'label'=>false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Package::class,
        ]);
    }
}
