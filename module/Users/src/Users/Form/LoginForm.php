<?php
/**
 * Created by PhpStorm.
 * User: ruslankus
 * Date: 28/08/16
 * Time: 20:06
 */
namespace  Users\Form;

use Zend\Form\Form;

class LoginForm extends Form
{


    public function __construct($name=null)
    {
        parent::__construct("Login");


        $this->add(array(

            'name' => 'email',
            'attributes' => array(
                'type' => 'email',
                'class' => 'form-control col-md-4'
            ),
            'options' => array(
                'label' => 'Your email'

            )

        ));


        $this->add(array(

            'name' => 'password',
            'attributes' => array(
                'type' => 'password',
                'class' => 'form-control col-md-4'
            ),
            'options' => array(
                'label' => 'Your password'
            )

        ));


        $this->add(array(

            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'label' => 'Login',
                'class'=> "btn btn-default"
            ),
            'options' => array(

                'label' => 'Login'
            ),


        ));

    }

}

