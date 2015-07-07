<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->emp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->emp_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'emp_id',
//            'sex',
            'SexName',
            'title',
            'name',
            'surname',
            'address:ntext',
            'zip_code',
            'birthday',
            'email:email',
            'mobile_phone',
            'modify_date',
            'create_date',
            'position',
            'salary',
            'expire_date',
            'website',
            'skill',
            'countries',
            'countryName',
            'age',
            'experience',
            'personal_id',
            'marital',
            'province',
            'amphur',
            'district',
            'office',
            'social',
            'resume',
//            'token_forupload',
//            'count_download_resume',
        ],
    ]) ?>

</div>
