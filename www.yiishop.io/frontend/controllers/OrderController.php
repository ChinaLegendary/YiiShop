<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;

class OrderController extends Controller
{
    public function actionLanguage($language) {  
        $session = Yii::$app->session;  
        $session->open();
        if(isset($language)){    
           $session['language'] = $language; 
        }
//        var_dump($session['language']);exit;
        //切换完语言哪来的返回到哪里，即reload  
        $this->goBack(Yii::$app->request->headers['Referer']);
    }
}
