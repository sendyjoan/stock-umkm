<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Products;
use yii\helpers\ArrayHelper;

class ApiProductsController extends Controller
{
    // public $model = Products;
    // public function behaviors(){
    //     return [
    //         'corsFilter' => [
    //             'class' => \yii\filters\Cors::className(),
    //         ],
    //     ];
    // }

    public function actionIndex(){
        $products = Products::find()->with('satuan')->all();
        // $products = Products::find()->all();
        // $products = Products::model()->with('category')->findAll();
        // getData($products);
        // dd($products[0]);
        // return $this->asJson($products[0]->satuan);
        // foreach($products as $product){
        //     $product->satuan_id = $product->satuan->name;
        // }
        // ArrayHelper::toArray($products);
        return $this->asJson($products);
    }
}

?>