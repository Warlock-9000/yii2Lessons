<?php
/**
 * Created by PhpStorm.
 * User: Aldan
 * Date: 11.08.2019
 * Time: 16:23
 */

namespace app\controllers\admin;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex(){
//        return 'TestString';
        return $this->render('index');
    }

}