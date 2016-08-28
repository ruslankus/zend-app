<?php
/**
 * Created by PhpStorm.
 * User: ruslankus
 * Date: 28/08/16
 * Time: 20:50
 */
namespace  Users\Form;

use Zend\InputFilter\InputFilter;
use Zend\Validator\EmailAddress;

class RegisterFilter extends InputFilter
{

    public function __construct()
    {
        $this->add(array(
            'name' => 'email',
            'required' => true,
            'validators' => array(

                array(
                    'name' => 'EmailAddress',
                    'options' => array(
                        'domain' => true
                    )

                )
            )

        ));


        $this->add(array(
            'name' => 'name',
            'required' => true,
            'filters' => array(
                array(
                    'name' => 'StripTags'
                )
            ),
            'validators' => array(

                array(

                    'name' => 'StringLength',
                    'option' => array(
                        'encoding' => 'UTF-8',
                        'min' => 2,
                        'max' => 140
                    )
                )
            )

        ));

        $this->add(array(
            'name' => 'password',
            'required' => true
        ));

        $this->add(array(
            'name' => 'confirm_password',
            'required' => true
        ));




    }

}