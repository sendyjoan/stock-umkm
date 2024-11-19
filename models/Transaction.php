<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $id
 * @property int $transaction_category_id
 * @property int $product_id
 * @property int $quantity
 * @property int $price
 * @property int $total
 * @property int $created_by
 *
 * @property User $createdBy
 * @property Products $product
 * @property TransactionCategory $transactionCategory
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transaction_category_id', 'product_id', 'quantity', 'price'], 'required'],
            // [['transaction_category_id', 'product_id', 'quantity', 'price', 'total', 'created_by'], 'required'],
            [['transaction_category_id', 'product_id', 'quantity', 'price'], 'integer'],
            [['transaction_category_id'], 'exist', 'skipOnError' => false, 'targetClass' => TransactionCategory::class, 'targetAttribute' => ['transaction_category_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => false, 'targetClass' => Products::class, 'targetAttribute' => ['product_id' => 'id']],
            // [['created_by'], 'exist', 'skipOnError' => false, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transaction_category_id' => 'Transaction Category',
            'product_id' => 'Product',
            'quantity' => 'Quantity',
            'price' => 'Price',
            'total' => 'Total',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::class, ['id' => 'product_id']);
    }

    /**
     * Gets query for [[TransactionCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransactionCategory()
    {
        return $this->hasOne(TransactionCategory::class, ['id' => 'transaction_category_id']);
    }
}
