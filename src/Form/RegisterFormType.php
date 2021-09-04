<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',null,['label'=>false,'attr'=> ['class'=>"form-control pl-5","required"=>"","name"=>"user_name", "placeholder"=>"وارد کنید"]])
            ->add('email', EmailType::class,['label'=>false, 'attr'=> ['class'=>"form-control pl-5","required"=>"","name"=>"user_name", "placeholder"=>"وارد کنید"]])
            ->add('password', PasswordType::class,
                array('label'=>false, 'attr'=> ['class'=>"form-control pl-5","required"=>"","name"=>"user_name", "placeholder"=>"وارد کنید"]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
