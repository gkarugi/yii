<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%headquarters}}`.
 */
class m190920_204906_create_headquarters_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%headquarters}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%headquarters}}');
    }
}
