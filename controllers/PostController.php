<?php
/**
 * Created by PhpStorm.
 * User: Aldan
 * Date: 11.08.2019
 * Time: 17:43
 */

namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\TestForm;
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
            $this->debug(Yii::$app->request->post());
            return 'test';
        }


        $model = new TestForm();
        if ($model->load(Yii::$app->request->post())){
//            $this->debug(Yii::$app->request->post());
            if ($model->validate()){
                Yii::$app->session->setFlash('success','Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error','Ошибка валидации');
            }
        }

       return $this->render('test',compact(['model']));
    }

    public function actionShow(){
//        $this->layout='basic';
        $this->view->title='Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords','content'=> 'Ключевые, слова']);
        $this->view->registerMetaTag(['name' => 'description','description'=> 'Описание страницы/Description']);

        $getSql = category::find()->all();
        return $this->render('show',compact('getSql'));
    }
}