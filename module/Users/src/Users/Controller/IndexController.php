<?php
/**
 * Created by PhpStorm.
 * User: ruslankus
 * Date: 27/08/16
 * Time: 23:53
 */
    namespace Users\Controller;

    use Zend\Mvc\Controller\AbstractActionController;
    use Zend\View\Model\ViewModel;
    use Users\Form\LoginForm;

    class IndexController extends AbstractActionController
    {

         public function indexAction()
         {
             $view = new ViewModel();
             return $view;
         }


         public function registerAction()
         {
             $view = new ViewModel();
             $view->setTemplate('users/index/new-user');
             return $view;
         }



         public function loginAction()
         {
             $form = new LoginForm();


             $view = new ViewModel(array('form' => $form));
             $view->setTemplate('users/index/login');
             return $view;

         }


    }
