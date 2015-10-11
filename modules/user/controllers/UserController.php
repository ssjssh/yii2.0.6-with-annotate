<?php
/**
 * Created by IntelliJ IDEA.
 * User: shenshijun
 * Date: 15/9/3
 * Time: 下午2:22
 */

namespace app\modules\user\controllers;


use yii\web\Controller;

class UserController extends Controller
{

    public function actionIndex()
    {
        var_dump($this->module->getBasePath());
    }

}