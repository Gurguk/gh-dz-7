<?php

use yii\db\Migration;

class m161206_215005_fs_students extends Migration
{
    public function safeUp()
    {
        $this->createTable('discipline_student', [
            'discipline_id' => $this->integer(11)->notNull(),
            'student_id' => $this->integer(11)->notNull(),
        ]);

        $this->createIndex(
            'idx-discipline_student-id',
            'discipline',
            'id',
            true

        );

        $this->addForeignKey(
            'fk-discipline_student-discipline_id',
            'discipline_student',
            'discipline_id',
            'discipline',
            'id',
            'CASCADE'
        );


        $this->createIndex(
            'idx-discipline_student-id',
            'students',
            'id',
            true

        );

        $this->addForeignKey(
            'fk-discipline_student-student_id',
            'discipline_student',
            'student_id',
            'students',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-discipline_student-discipline_id',
            'discipline'
        );

        $this->dropForeignKey(
            'fk-discipline_student-student_id',
            'students'
        );
    }

}
