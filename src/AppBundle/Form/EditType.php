<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditType
 *
 * @author shivraj
 */
class EditType extends AbstractType {


    public function buildForm(FormBuilderInterface $builder, array $options) {        

        $builder->add('name')
                ->add('roles', ChoiceType::class, array(
                        'choices'  => array(
                            'ROLE_USER' => 'ROLE_USER',
                            'ROLE_ADMIN' => 'ROLE_ADMIN',
                            'ROLE_SUPER_ADMIN' => 'ROLE_SUPER_ADMIN'
                    ),
                     'multiple' => true
                    ))
                ->remove('current_password');
    }

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix() {
        return 'app_user_profile';
    }

    // For Symfony 2.x
    public function getName() {
        return $this->getBlockPrefix();
    }

}
