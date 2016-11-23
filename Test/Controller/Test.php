<?php
/**
 * Created by PhpStorm.
 * User: mofan
 * Date: 2016/5/24 0024
 * Time: 5:27
 */




class Test_Controller_Test extends Core_Lib_Controller {

    protected static function selfInterceptors() {
    }

    public function indexAction() {
        $this->setLayout(new Test_Layout_Default());
        return $this->render('Test/Index');
    }

    public function jsonAction() {

        return $this->renderJsonCb(['ab'=>'sfds'],200);
    }

    public function hbAction($a='') {
        Core_Lib_App::app()->getResponse()->setHeader('Content-Type', 'text/plain;charset=utf-8');
        return 'test/hbdf/'.$a;
    }

    public function testlogAction() {
        Core_Lib_App::app()->getLogger()->critical('critical message');
        Core_Lib_App::app()->getLogger()->alert('alert message');
        Core_Lib_App::app()->getLogger()->debug('debug message');
        Core_Lib_App::app()->getLogger()->emergency('emergency message');
        Core_Lib_App::app()->getLogger()->error('error message');
        Core_Lib_App::app()->getLogger()->info('info message');
        Core_Lib_App::app()->getLogger()->notice('notice message');
        Core_Lib_App::app()->getLogger()->warning('warning message');
    }
}