<?php
namespace frontend\models;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

class Students extends ActiveRecord
{

    public static function tableName()
    {
        return 'students';
    }

    public function search($params)
    {
        $query = Students::find();
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
        $query->andFilterWhere(['like', 'first_name', $this->first_name]);
        $query->andFilterWhere(['like', 'last_name', $this->last_name]);
        return $dataProvider;
    }

}