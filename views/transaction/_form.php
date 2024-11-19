<?php

use yii\helpers\Html;
use app\models\Products;
use kartik\select2\Select2;
use yii\bootstrap5\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TransactionCategory;

/** @var yii\web\View $this */
/** @var app\models\Transaction $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'transaction_category_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(TransactionCategory::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'Select a transaction category'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])?>

    <?= $form->field($model, 'product_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Products::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'Select a product'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'quantity')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'price')->textInput(['type' => 'number']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
