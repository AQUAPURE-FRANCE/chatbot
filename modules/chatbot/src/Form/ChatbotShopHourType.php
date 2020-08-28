<?php

namespace Chatbot\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChatbotShopHourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isAvailable', CheckboxType::class, [
                'mapped' => true,
                'required' => false,
                'label' => false
            ])
            ->add('timeStart', TimeType::class, [
                'mapped' => true,
                'required' => false,
                'widget' => 'single_text',
                'attr'=> [
                    'placeholder' => 'Heure ouverture'
                ]
            ])
            ->add('timeEnd', TimeType::class, [
                'mapped' => true,
                'required' => false,
                'widget' => 'single_text',
                'attr'=> [
                    'placeholder' => 'Heure fermeture'
                ]
            ])
            ->add('defaultMessage', TextareaType::class, [
                'mapped' => true,
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
