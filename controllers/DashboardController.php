<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class DashboardController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'user' => Yii::$app->user->identity,
            'transactionCount' => Yii::$app->db->createCommand('SELECT COUNT(*) FROM transaction')->queryScalar(),
            'transactionIn' => Yii::$app->db->createCommand('SELECT COUNT(*) FROM transaction WHERE transaction_category_id = 1')->queryScalar(),
            'priceIn' => Yii::$app->db->createCommand('SELECT SUM(total) FROM transaction WHERE transaction_category_id = 1')->queryScalar(),
        ]);
    }
}