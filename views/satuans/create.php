<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Satuans $model */

$this->title = 'Create Satuans';
$this->params['breadcrumbs'][] = ['label' => 'Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satuans-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
