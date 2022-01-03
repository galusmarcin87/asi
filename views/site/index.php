<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;

?>

<?= $this->render('index/slider') ?>

<section class="projects-wrapper">
    <div class="container">
        <h2 class="text-center"><?= Yii::t('db', 'Current projects'); ?></h2>
        <?= $this->render('/common/projects') ?>
    </div>
    <div class="text-center">
        <a class="btn btn--secondary btn--primary-color" href="<?= \yii\helpers\Url::to('project/index') ?>">
            <?= Yii::t('db', 'See all') ?>
        </a>
    </div>
    <?= $this->render('index/byyTokens') ?>
</section>


<section class="projects-wrapper">
    <div class="container">
        <h2 class="text-center"><?= Yii::t('db', 'Ended projects') ?></h2>
        <?= $this->render('/common/projects', ['statuses'=>[Project::STATUS_ENDED]]) ?>
    </div>
    <div class="text-center">
        <a class="btn btn--secondary btn--primary-color" href="<?= \yii\helpers\Url::to('project/index') ?>">
            <?= Yii::t('db', 'See all') ?>
        </a>
    </div>
</section>

<?= $this->render('index/section1') ?>

<?= $this->render('index/roadmap') ?>

<?= $this->render('/common/team') ?>
