<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_detail_deliveries}}`.
 */
class m190920_205233_create_order_detail_deliveries_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_detail_deliveries}}', [
            'id' => $this->primaryKey(),
            'delivery_id' => $this->integer()->unsigned(),
            'order_detail_id' => $this->integer()->unsigned(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_detail_deliveries}}');
    }
}
