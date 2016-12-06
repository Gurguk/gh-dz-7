<?php
namespace frontend\models;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

class Discipline extends ActiveRecord
{

    public static function tableName()
    {
        return 'discipline';
    }

    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    public function getDepartmentName()
    {
        $department = $this->department;

        return $department ? $department->name : '';
    }

    public function search($params)
    {
        $query = Discipline::find();
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