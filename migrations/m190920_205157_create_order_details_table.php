<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_details}}`.
 */
class m190920_205157_create_order_details_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_details}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->unsigned(),
            'order_id' => $this->integer()->unsigned(),
            'qty' => $this->integer()->unsigned(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_details}}');
    }
}
