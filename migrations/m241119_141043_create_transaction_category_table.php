<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction_category}}`.
 */
class m241119_141043_create_transaction_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaction_category}}');
    }
}
