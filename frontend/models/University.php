<?php
namespace frontend\models;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

class University extends ActiveRecord
{

    public static function tableName()
    {
        return 'university';
    }

    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['university_id' => 'id']);
    }

    public function search($params)
    {
        $query = University::find();
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
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}