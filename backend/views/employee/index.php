<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Employee;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Employees');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Employee'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//
//            'emp_id',
            [
              'attribute'=>'sex',
              'filter'=>Employee::itemAlias('sex'),
              'value'=>function($model){
                return $model->sexName;
              }
            ],
            'fullName',
            'countryName',
            // 'address:ntext',
            // 'zip_code',
            // 'birthday',
            // 'email:email',
            // 'mobile_phone',
            // 'modify_date',
            // 'create_date',
            // 'position',
            // 'salary',
            // 'expire_date',
            // 'website',
            // 'skill',
            // 'countries',
            // 'age',
            // 'experience',
            // 'personal_id',
            // 'marital',
            // 'province',
            // 'amphur',
            // 'district',
            // 'office',
            // 'social',
            // 'resume',
            // 'token_forupload',
            // 'count_download_resume',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
