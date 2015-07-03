<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use common\models\Countries;
use yii\helpers\ArrayHelper;
use common\models\Office;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-2 col-xs-4"><?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?></div>
        <div class="col-lg-5 col-xs-4"><?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?></div>
        <div class="col-lg-5 col-xs-4"><?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-lg-4"><?= $form->field($model, 'birthday')->textInput() ?></div>
        <div class="col-xs-6 col-lg-4"> <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>
        <div class="col-xs-12 col-lg-4"><?= $form->field($model, 'sex')->radioList($model->getItemSex()) ?></div>

    </div>





    <?=
    $form->field($model, 'countries')->dropDownList(
            ArrayHelper::map(Countries::find()->all(), 'country_code', 'country_name')
    )
    ?>

    <?=
    $form->field($model, 'office')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Office::find()->all(),'id','name'),
        'options' => ['placeholder' => 'Select office'],
        'pluginOptions' => [
            'allowClear' => true
        ],
            ]
    )
    ?>


 <?= $form->field($model, 'age')->textInput() ?>

<?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'zip_code')->textInput(['maxlength' => true]) ?>





    <?= $form->field($model, 'mobile_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modify_date')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary')->textInput() ?>

    <?= $form->field($model, 'expire_date')->textInput() ?>

<?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'skill')->textInput(['maxlength' => true]) ?>





    <?= $form->field($model, 'experience')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personal_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marital')->textInput() ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amphur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'social')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'resume')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
