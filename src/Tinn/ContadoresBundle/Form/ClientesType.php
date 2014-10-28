<?php

namespace Tinn\ContadoresBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nacionalidad')
            ->add('cedula')
            ->add('nombre')
            ->add('apellido')
            ->add('telefono')
            ->add('profesion')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tinn\ContadoresBundle\Entity\Clientes'
        ));
    }

    public function getName()
    {
        return 'tinn_contadoresbundle_clientes';
    }
}
