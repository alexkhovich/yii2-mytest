<?php
namespace alexkhovich\mytest\controllers;
use Yii;
use yii\web\Controller;
//use klisl\mytest\models\Tests;
class TestController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        \alexkhovich\mytest\TestsAssetsBundle::register($this->view);
        //$datas = Tests::find()->all();
        $datas = 'Hello world!';
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}