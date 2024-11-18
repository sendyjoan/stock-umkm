<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%satuans}}`.
 */
class m241118_174827_create_satuans_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%satuans}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%satuans}}');
    }
}
