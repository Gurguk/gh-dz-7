<?php

use yii\db\Migration;

/**
 * Handles the creation of table `department`.
 */
class m161204_202010_create_department_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('department', [
            'id' => $this->primaryKey(),
            'university_id' => $this->integer(11)->notNull(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('department');
    }
}
