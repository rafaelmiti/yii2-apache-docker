<?php

namespace app\controllers;

use Yii;
use yii\rest\Controller;

class HealthController extends Controller
{
    public function actionHealth()
    {
        $response = new \stdClass;

        $response->get = Yii::$app->request->isGet;
        $response->post = Yii::$app->request->isPost;
        $response->postParams = Yii::$app->request->post();

        return $response;
    }
}
