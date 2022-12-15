<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('body', TextareaType::class, [
                'attr'=>['class'=>"", 'name'=>"contenu", 'id'=>"contenu", 'data-title'=>"Le contenu de l'article est obligatoire"],
                'label'=>'بدنه مقاله',
                'required'=>false
            ])
            ->add('title', TextType::class, [
                'attr'=>[
                    'type'=>"text",  'class'=>"form-control",  'id'=>"title", 'placeholder'=>"موضوع را وارد کنید"
                ],
                'label'=>'title'
            ])
            ->add('image', FileType::class, [
                'label'=>'عکس پیش زمینه',
                'data_class' => null,
                'attr' => ['class'=>'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
