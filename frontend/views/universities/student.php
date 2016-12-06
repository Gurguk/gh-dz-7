<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;

?>
<div class="site-index">
    <h2>Universities</h2>
    <p>
        <?= Html::a('Create Student', ['createstudent'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name'
        ],
    ]); ?>
</div>
