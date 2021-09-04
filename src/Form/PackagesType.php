<?php

namespace App\Form;

use App\Entity\Package;
use Doctrine\DBAL\Types\TextType;
use SebastianBergmann\CodeCoverage\Report\Text;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PackagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null,
                [
                    'attr'=>
                        ['class'=>'form-control form-control-solid', 'placeholder'=>'نام پکیج', 'name'=>'name_package']
                    , 'label' =>false])
            ->add('price', null,
                [
                    'attr'=>
                        ['class'=>'form-control form-control-solid ps-12', 'placeholder'=>'قیمت پکیج', 'name'=>'price']
                , 'label' =>false])
            ->add('limit_report', null,
                [
                    'attr'=>
                        ['class'=>'form-control form-control-solid ps-12', 'placeholder'=>'تعداد مجاز گزارش', 'name'=>'limit_report']
                    , 'label' =>false])
            ->add('number_app', null, [
                'attr'=>
                    ['class'=>'form-control form-control-solid', 'placeholder'=>'ویژگی های نرم افزار', 'name'=>'numberApp']
                , 'label' =>false])
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Package::class,
        ]);
    }
}
