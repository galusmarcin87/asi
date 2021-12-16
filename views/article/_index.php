<?php

use \yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\mgcms\db\Article */
?>
<div class="Projects__card <?= $full ? '' : 'Projects__card--small'?> item">
    <div class="Projects__card__image-wrapper">
        <? if ($model->file && $model->file->isImage()): ?>
            <img src="<?= $model->file->imageSrc ?>" alt=""/>
        <? endif ?>
    </div>
    <div>
        <div class="Projects__card__date">
            <img
                    src="/svg/czas.svg"
                    class="Projects__card__date__ico"
                    alt=""
            />
            <?= date('d.m.Y', strtotime($model->created_on)) ?>
        </div>
        <div class="Projects__card__header">
            <div class="Projects__card__heading">
                <?= $model->title ?>
            </div>
        </div>
        <div class="Projects__card__body">
            <?if($full):?>
                <?= $model->excerpt ?>
            <?endif?>
            <a href="<?= $model->linkUrl ?>"><?= Yii::t('db', 'Read more') ?></a>
        </div>
    </div>
</div>
