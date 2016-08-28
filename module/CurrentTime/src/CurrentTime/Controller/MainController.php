<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CurrentTime\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MainController extends AbstractActionController
{



    public function indexAction()
    {
        $clock = date("H:i:s");
        $date =  date("d-M-Y");

        $view = new ViewModel();
        $view->date = $date;
        $view->clock = $clock;

       return $view;
    }


}
