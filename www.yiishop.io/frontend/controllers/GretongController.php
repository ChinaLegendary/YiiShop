<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;

class GretongController extends Controller
{
    public function actionIndex(){
        
    }
    public function actionWoman(){
       return $this->render("woman");
    }
}
