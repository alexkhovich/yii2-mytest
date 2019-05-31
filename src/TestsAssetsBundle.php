<?php
/**
 * Date: 31.05.2019
 * Time: 11:02
 */

namespace alexkhovich\mytest;
use yii\web\AssetBundle;
class TestsAssetsBundle extends AssetBundle
{
    public $sourcePath = '@vendor/alexkhovich/yii2-mytest/assets';
    public $css = [
        'css/style.css'
    ];
}