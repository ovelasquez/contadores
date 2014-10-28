<?php

namespace Tinn\ContadoresBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CertificacionesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ingreso')
            ->add('emision')
            ->add('desde')
            ->add('hasta')
            ->add('hojaSeguridad')
            ->add('dirigido')
            ->add('cliente')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tinn\ContadoresBundle\Entity\Certificaciones'
        ));
    }

    public function getName()
    {
        return 'tinn_contadoresbundle_certificaciones';
    }
}
