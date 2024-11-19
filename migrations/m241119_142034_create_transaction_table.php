<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 */
class m241119_142034_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction}}', [
            'id' => $this->primaryKey(),
            'transaction_category_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'price' => $this->integer()->notNull(),
            'total' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),

            'FOREIGN KEY (transaction_category_id) REFERENCES transaction_category(id)',
            'FOREIGN KEY (product_id) REFERENCES products(id)',
            'FOREIGN KEY (created_by) REFERENCES user(id)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaction}}');
    }
}
