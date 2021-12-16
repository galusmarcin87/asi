<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\mgcms\db\TeamMember */

$this->title = Yii::t('app', 'Save As New {modelClass}: ', [
    'modelClass' =>  Yii::t('app', 'Team Member'),
]). ' ' . $model->name;


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Team Members'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Save As New');
?>
<div class="team-member-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
