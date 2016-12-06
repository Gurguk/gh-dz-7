<?php

use yii\db\Migration;

/**
 * Handles the creation of table `discipline`.
 */
class m161206_211050_create_discipline_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('discipline', [
            'id' => $this->primaryKey(),
            'department_id' => $this->integer(11)->notNull(),
            'name' => $this->string()->notNull()
        ]);

        $this->createIndex(
            'idx-department-id',
            'department',
            'id',
            true

        );

        $this->addForeignKey(
            'fk-discipline-department_id',
            'discipline',
            'department_id',
            'department',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-discipline-department_id',
            'discipline'
        );
        
        $this->dropTable('discipline');
    }
}
