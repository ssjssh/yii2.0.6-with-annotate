<?php
/**
 * Created by IntelliJ IDEA.
 * User: shenshijun
 * Date: 15/9/2
 * Time: 下午2:10
 */

namespace app\controllers;


use Yii;
use yii\web\Controller;
use yii\web\UrlRule;

class TestController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        echo "*************************************************";
        $rule = new UrlRule([
            'pattern' => 'debug/<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>',
            'route' => 'debug/<controller>/<action>',
            'defaults' => ['id' => 10, 'action' => 'method']
        ]);

        $rule->createUrl(Yii::$app->urlManager,'debug/test/index',[]);

//        $urlManager = Yii::$app->urlManager;
//        var_dump($urlManager->rules);
    }

    public function actionTest()
    {
        return $this->render('index.php');
    }
}