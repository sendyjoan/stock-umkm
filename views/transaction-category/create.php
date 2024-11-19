<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransactionCategory $model */

$this->title = 'Create Transaction Category';
$this->params['breadcrumbs'][] = ['label' => 'Transaction Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
