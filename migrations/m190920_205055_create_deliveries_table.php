<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%deliveries}}`.
 */
class m190920_205055_create_deliveries_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%deliveries}}', [
            'id' => $this->primaryKey(),
            'delivery_date' => $this->date(),
            'supplier_id' => $this->integer()->unsigned(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%deliveries}}');
    }
}
