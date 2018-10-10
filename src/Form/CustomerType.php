<?php

namespace App\Form;

use App\Entity\Customer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname',TextType::class, array('label' => 'Voornaam') )
            ->add('lastname',TextType::class, array('label' => 'Achternaam') )
            ->add('name_prefix',TextType::class, array('label' => 'Tussenvoegsel') )
            ->add('street',TextType::class, array('label' => 'Straatnaam') )
            ->add('house_number',TextType::class, array('label' => 'Huisnummer') )
            ->add('post_code',TextType::class, array('label' => 'Post code') )
            ->add('city',TextType::class, array('label' => 'Woonplaats') )
            ->add('phone',TextType::class, array('label' => 'Telefoonnummer') )
            ->add('email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Customer::class,
        ]);
    }
}
