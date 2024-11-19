<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $stock
 * @property int $satuan_id
 *
 * @property Satuans $satuan
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'stock', 'satuan_id'], 'required'],
            [['description'], 'string'],
            [['stock'], 'number'],
            [['satuan_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['satuan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Satuans::class, 'targetAttribute' => ['satuan_id' => 'id']],
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
            'description' => 'Description',
            'stock' => 'Stock',
            'satuan_id' => 'Satuan',
        ];
    }

    /**
     * Gets query for [[Satuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuan()
    {
        return $this->hasOne(Satuans::class, ['id' => 'satuan_id']);
    }

    public function getTransaction()
    {
        return $this->hasMany(Transaction::class, ['product_id' => 'id']);
    }
}
