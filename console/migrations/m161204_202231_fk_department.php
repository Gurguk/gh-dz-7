<?php

use yii\db\Migration;

class m161204_202231_fk_department extends Migration
{
    public function safeUp()
    {
        $this->createIndex(
            'idx-university-id',
            'university',
            'id',
            true

        );

        $this->addForeignKey(
            'fk-department-university_id',
            'department',
            'university_id',
            'university',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-department-university_id',
            'department'
        );
    }
}
