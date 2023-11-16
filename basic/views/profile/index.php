<?php

use app\models\Profile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Review';
$this->params['breadcrumbs'][] = $this->title;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // [  
            //     'attribute' => 'id_user', 'label' => 'имя пользователя',  
            //     'value' => function ($model) {  
            //         return $model->user->login;  
            //     },  
            // ], 
            ['attribute' => 'id_film','label' => 'ФИО',
                'value' => function ($model) {  
                    return $model->film->name;  
                },
            ], 
            ['attribute' => 'reyting','label' => 'рейтинг', 
                'value' => function ($model) {  
                    return $model->film->reyting;  
                },
            ],
            ['attribute' => 'review','label' => 'отзыв', 
                'value' => function ($model) {  
                    return $model->review->opinion;  
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Profile $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
