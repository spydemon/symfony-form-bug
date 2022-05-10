<?php

namespace App\Form;

use App\Entity\OrderEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('shippingAddress', AddressForm::class);
        $builder->add('billingAddress', AddressForm::class);
        $builder->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);
        $resolver->setDefault('attr', ['novalidate' => 'novalidate']);
        $resolver->setDefault('data_class', OrderEntity::class);
    }
}