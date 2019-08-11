<?php
/**
 * Created by PhpStorm.
 * User: Aldan
 * Date: 11.08.2019
 * Time: 17:36
 */

namespace app\controllers;

use yii\web\Controller;


class AppController extends Controller
{
    public function debug($arr){
        echo '<pre>'.print_r($arr,true).'</pre>';
    }
}

//Не уверен что это нормально, но автор курса это показывает.

function debug($arr){
    echo '<pre>'.print_r($arr,true).'</pre>';
}