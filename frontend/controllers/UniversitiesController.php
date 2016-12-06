<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\University;
use frontend\models\Department;
use frontend\models\Discipline;
use frontend\models\Students;

class UniversitiesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUniversity()
    {
        $model = new University();
        $dataProvider = $model->search(Yii::$app->request->queryParams);

        return $this->render('indexuniversity', [
            'searchModel' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreateuniversity()
    {
        $model = new University();

        if (count(Yii::$app->request->post('University'))) {
            $university = Yii::$app->request->post('University');
            $model->name = $university['name'];
            $model->city = $university['city'];
            $model->email = $university['email'];
            $model->save();
            return $this->render('index');
        } else {
            return $this->render('createuniversity', [
                'model' => $model,
            ]);
        }
    }

    public function actionDepartment()
    {
        $model = new Department();
        $dataProvider = $model->search(Yii::$app->request->queryParams);

        return $this->render('department', [
            'searchModel' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreatedepartment()
    {
        $model = new Department();

        if (count(Yii::$app->request->post('Department'))) {
            $university = Yii::$app->request->post('Department');
            $model->name = $university['name'];
            $model->university_id = $university['university'];
            $model->save();
            return $this->render('index');
        } else {
            return $this->render('createdepartment', [
                'model' => $model,
                'university' => University::find()->all(),
            ]);
        }
    }

    public function actionDiscipline()
    {
        $model = new Discipline();
        $dataProvider = $model->search(Yii::$app->request->queryParams);

        return $this->render('discipline', [
            'searchModel' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreatediscipline()
    {
        $model = new Discipline();

        if (count(Yii::$app->request->post('Discipline'))) {
            $department = Yii::$app->request->post('Discipline');
            $model->name = $department['name'];
            $model->department_id = $department['department'];
            $model->save();
            return $this->render('index');
        } else {
            return $this->render('creatediscipline', [
                'model' => $model,
                'department' => Department::find()->all(),
            ]);
        }
    }

    public function actionStudents()
    {
        $model = new Students();
        $dataProvider = $model->search(Yii::$app->request->queryParams);

        return $this->render('student', [
            'searchModel' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
}