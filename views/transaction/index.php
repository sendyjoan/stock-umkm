<?php

use app\models\User;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Products;
use yii\grid\ActionColumn;
use app\models\Transaction;
use yii\helpers\ArrayHelper;
use app\models\TransactionCategory;

/** @var yii\web\View $this */
/** @var app\models\TransactionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaction', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'transaction_category_id',
                'value' => 'transactionCategory.name',
                'filter' => ArrayHelper::map(TransactionCategory::find()->all(), 'id', 'name'),
            ],
            [
                'attribute' => 'product_id',
                'value' => 'product.name',
                'filter' => ArrayHelper::map(Products::find()->all(), 'id', 'name'),
            ],
            'quantity',
            'price',
            'total',
            'created_by',
            // [
            //     'attribute' => 'created_by',
            //     'value' => 'created_by.name',
            //     'filter' => ArrayHelper::map(User::find()->all(), 'id', 'name'),
            // ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Transaction $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
