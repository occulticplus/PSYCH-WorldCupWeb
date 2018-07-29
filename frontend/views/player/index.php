<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PlayerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Players';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Player', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'haoma',
            'country',
            'name',
            'postion',
            // 'height',
            // 'weight',
            // 'birthdate',
            // 'attended',
            // 'totaltime:datetime',
            // 'image',
            // 'jinqiu',
            // 'zhugong',
            // 'shemen',
            // 'shezheng',
            // 'chuanqiu',
            // 'shiqiu',
            // 'pujiu',
            // 'hongpai',
            // 'huangpai',
            // 'click',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
