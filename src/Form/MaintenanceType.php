<?php

namespace App\Form;

use App\Entity\Maintenance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MaintenanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class, array('label' => 'Titel') )
            ->add('discription',TextType::class, array('label' => 'Beschrijving') )
            ->add('duration',ChoiceType::class, array('label' => 'Tijds duur',
                'choices' => array(
                    '1 uur' => 1,
                    '2 uur' => 2,
                    '4 uur' => 4,
                    '8 uur' => 8,
                )) )
            ->add('price',TextType::class, array('label' => 'Prijs') )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Maintenance::class,
        ]);
    }
}
