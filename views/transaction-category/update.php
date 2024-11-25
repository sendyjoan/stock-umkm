<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransactionCategory $model */

$this->title = 'Update Transaction Category: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Transaction Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaction-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
