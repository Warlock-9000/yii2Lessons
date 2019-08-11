<?php
/**
 * Created by PhpStorm.
 * User: Aldan
 * Date: 11.08.2019
 * Time: 15:17
 */

namespace app\controllers;




class MyController extends AppController
{
    public function actionIndex($id = null){
        $hi = 'Hi! I\'m a Yii2.';
        $ageArr = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        $id = $id??'test';
//        return $this->render('index',['hello'=>$hi,'names'=>$age]);
        return $this->render('index', compact('hi','ageArr','id'));
    }

    public function actionBlogPost(){
//        my/blog-post
        return 'Blog Post';
    }
}