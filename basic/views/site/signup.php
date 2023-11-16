<?php
 
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
 
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="site-signup">
    <p>check films позволяет хранить воспоминания и впечатления о всех фильмах, которые вы смотрите</p>
    <div class="row">
        <div class="col-lg-5">
 
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'login')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
 
            <p class="bottom">у вас уже есть аккаунт? <br> <a href="http://basic:8081/web/index.php?r=site%2Flogin">войти</a> </p>
        </div>
    </div>
</div>