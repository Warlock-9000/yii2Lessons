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

    public function beforeAction($action)
    {
//        return parent::beforeAction($action);
        if ($action->id == 'index'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex(){
        if (Yii::$app->request->isAjax){
//            $this->debug($_POST);
            $this->debug(Yii::$app->request->post());
            return 'test';
        }
       return $this->render('test');
    }

    public function actionShow(){
//        $this->layout='basic';
        $this->view->title='Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords','content'=> 'Ключевые, слова']);
        $this->view->registerMetaTag(['name' => 'description','description'=> 'Описание страницы/Description']);
        return $this->render('show');
    }
}