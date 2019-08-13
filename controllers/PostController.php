<?php
/**
 * Created by PhpStorm.
 * User: Aldan
 * Date: 11.08.2019
 * Time: 17:43
 */

namespace app\controllers;

use Yii;
class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex(){
        if (Yii::$app->request->isAjax){
            $this->debug($_GET);
            return 'test';
        }
       return $this->render('test');
    }

    public function actionShow(){
//        $this->layout='basic';
        return $this->render('show');
    }
}