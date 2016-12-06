<?php

use yii\db\Migration;

/**
 * Handles the creation of table `university`.
 */
class m161204_201905_create_university_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('university', [
            'id' => $this->primaryKey(),
            'name' =>  $this->string()->notNull(),
            'city' =>  $this->string()->notNull(),
            'email' =>  $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('university');
    }
}
