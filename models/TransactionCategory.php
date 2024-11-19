<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaction_category".
 *
 * @property int $id
 * @property string $name
 */
class TransactionCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public function getTransaction()
    {
        return $this->hasMany(Transaction::class, ['transaction_category_id' => 'id']);
    }
}
