<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'emp_id') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'surname') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'zip_code') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'mobile_phone') ?>

    <?php // echo $form->field($model, 'modify_date') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'salary') ?>

    <?php // echo $form->field($model, 'expire_date') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'skill') ?>

    <?php // echo $form->field($model, 'countries') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'experience') ?>

    <?php // echo $form->field($model, 'personal_id') ?>

    <?php // echo $form->field($model, 'marital') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'amphur') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'office') ?>

    <?php // echo $form->field($model, 'social') ?>

    <?php // echo $form->field($model, 'resume') ?>

    <?php // echo $form->field($model, 'token_forupload') ?>

    <?php // echo $form->field($model, 'count_download_resume') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
