<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;

?>

<?= $this->render('index/slider') ?>

<section
        class="Section Projects"
        style="padding-bottom: 75px"
>
    <div class="container">

        <div class="Projects__header__wrapper">
            <h1><?= Yii::t('db', 'Current projects'); ?></h1>
            <a href="<?= \yii\helpers\Url::to(['project/index']) ?>" class="btn btn-link">
                <?= Yii::t('db', 'See all'); ?>
            </a>
        </div>

        <?= $this->render('/common/projects') ?>


</section>
<?= $this->render('index/section1') ?>

<?= $this->render('index/section2') ?>

<?= $this->render('index/banner') ?>

<?= $this->render('/common/news') ?>

<?= $this->render('/common/team') ?>

<?= $this->render('/common/cooperateWith') ?>

<?= $this->render('/common/faq') ?>

<?= $this->render('/common/newsletterForm') ?>
