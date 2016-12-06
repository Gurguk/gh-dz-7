<?php
namespace frontend\models;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

class Department extends ActiveRecord
{

    public static function tableName()
    {
        return 'department';
    }

    public function getUniversity()
    {
        return $this->hasOne(University::className(), ['id' => 'university_id']);
    }

    public function getUniversityName()
    {
        $university = $this->university;

            return $university ? $university->name : '';
    }

    public function getDiscipline()
    {
        return $this->hasMany(Discipline::className(), ['department_id' => 'id']);
    }

    public function search($params)
    {
        $query = Department::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }
        $query->andFilterWhere([
            'id' => $this->id,
        ]);
        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }

}