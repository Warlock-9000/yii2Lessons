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
    public function actionTest(){
       $ageArr = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//       var_dump(Yii::$app);
//        $this->debug(Yii::$app);
        $this->debug($ageArr);
       return $this->render('test');
    }
}