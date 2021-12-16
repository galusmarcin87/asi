<?php

use yii\web\View;

/* @var $this yii\web\View */
/* @var $model \app\models\mgcms\db\Article */
$this->registerLinkTag(['rel' => 'canonical', 'href' => \yii\helpers\Url::canonical()]);
$this->params['breadcrumbs'][] = $model->title;

?>
<section class="Section Project">
    <div class="container">
        <div>
            <h1 class="Project__header Project__header--light"><?=$model->title?></h1>
            <div class="Section--grey">
                <div class="row">
                    <div class="col-md-6">
                        <?= $model->excerpt?>
                    </div>
                    <div class="col-md-6">
                        <? if ($model->file && $model->file->isImage()): ?>
                            <img class="Card__image" src="<?= $model->file->getImageSrc() ?>"/>
                        <? endif ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <?= $model->content ?>
                </div>
            </div>

        </div>
    </div>
</section>
