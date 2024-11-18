<?php

use yii\helpers\Html;
use app\models\Satuans;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Products $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= 
    
    /*$form->field($model, 'satuan_id')->dropDownList(
        ArrayHelper::map(Satuans::find()->all(), 'id', 'name')
    )*/ 

    $form->field($model, 'satuan_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Satuans::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'Select a Satuan ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])
    
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
