<?php
namespace UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('documento');
        $builder->add('nombre');
        $builder->add('apellido');
        $builder->add('direccion');
        $builder->add('celular');
        $builder->add('telefono');
        $builder->add('fechanacimiento');
        $builder->add('facebook');
        $builder->add('instagram');
        $builder->add('social');
        
        $builder->remove("social");
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
    
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}