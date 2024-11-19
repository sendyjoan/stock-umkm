<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Satuans;
use app\models\Products;
use yii\grid\ActionColumn;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */

$this->title = 'Dashboard';
?>

<div>
    <?= 'User = ' . $user->username ?>
    <?= 'Jumlah Transaksi = ' . $transactionCount ?>
    <?= 'Jumlah Transaksi Masuk = ' . $transactionIn ?>
    <?= 'Jumlah Nominal Transaksi Masuk = ' . $priceIn ?>
</div>