<?php

use yii\db\Migration;

/**
 * Handles the creation of table `students`.
 */
class m161204_202132_create_students_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('students', [
            'id' => $this->primaryKey(),
            'first_name' =>  $this->string()->notNull(),
            'last_name' =>  $this->string()->notNull(),
        ]);
    }
    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('students');
    }
}
