<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%opros}}`.
 */
class m230406_174719_create_opros_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%opros}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%opros}}');
    }
}
