<?php

use yii\web\View;
use app\components\mgcms\MgHelpers;


/* @var $this yii\web\View */

$this->title = Yii::t('db', 'About us');

?>
<section class="Section Section--About-us" style="background: #fff !important">
    <div class="container">
        <div class="About-us" style="grid-template-columns: 1fr 0.6fr;">
            <div class="About-us__content" style="padding-top: 0; padding-left: 0;">
                <div class="About-us__header">
                    <?= Yii::t('db', 'About us') ?>
                </div>
                <p>
                    <?= MgHelpers::getSetting('about us section 1 text 1 ' . Yii::$app->language, true, 'about us section 1 text 1') ?>
                </p>
                <div class="row text-center" style="margin-top: 60px; margin-bottom: 60px;">
                    <div class="col-md-4">
                        <div class="big-text">
                            <div class="icon">
                                <img src="/svg/inwestycje.svg" alt="">
                            </div>
                            <?= MgHelpers::getSetting('about us numbers number 1' . Yii::$app->language, false, '8') ?>
                            <p class="small">
                                <?= MgHelpers::getSetting('about us numbers text 1' . Yii::$app->language, false, 'liczba inwestycji') ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="big-text">
                            <div class="icon">
                                <img src="/svg/kwota.svg" alt="">
                            </div>
                            <?= MgHelpers::getSetting('about us numbers number 2' . Yii::$app->language, false, '50 <small>MLN</small>') ?>

                            <p class="small">
                                <?= MgHelpers::getSetting('about us numbers text 2' . Yii::$app->language, false, 'kwota pozyskanych środków') ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="big-text">
                            <div class="icon">
                                <img src="/svg/czas.svg" alt="">
                            </div>
                            <?= MgHelpers::getSetting('about us numbers number 3' . Yii::$app->language, false, '10') ?>
                            <p class="small">
                                <?= MgHelpers::getSetting('about us numbers text 3 '. Yii::$app->language, false, 'lat doświadczenia') ?>

                            </p>
                        </div>
                    </div>
                </div>
                <?= MgHelpers::getSetting('about us section 1 text 2 ' . Yii::$app->language, true, 'about us section 1 text 2') ?>

            </div>
            <div>
                <img class="cover-max" src="<?= MgHelpers::getSetting('about us section 1 image ', true, '/images/Depositphotos_247767976_xl-2015.jpg') ?>" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="About-us--small" style="background-image: url(<?= MgHelpers::getSetting('about us section 2 background image 1 ', false, '/images/Depositphotos_147341459_xl-2015.jpg') ?>);">
                    <div class="About-us__header" style="margin-bottom: 30px;">
                        <?= MgHelpers::getSetting('about us section 2 header 1 ' . Yii::$app->language, false, 'about us section 2 header 1 ') ?><br/>
                        <strong><?= MgHelpers::getSetting('about us section 2 subheader 1 ' . Yii::$app->language, false, 'about us section 2 subheader 1 ') ?><br/></strong>
                    </div>
                    <?= MgHelpers::getSetting('about us section 2 text 1 ' . Yii::$app->language, true, 'about us section 2 text 1 ') ?>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="About-us--small" style="background-image: url(<?= MgHelpers::getSetting('about us section 2 background image 2 ', false, '/images/Depositphotos_147341459_xl-2015.jpg') ?>);">
                    <div class="About-us__header" style="margin-bottom: 30px;">
                        <?= MgHelpers::getSetting('about us section 2 header 2 ' . Yii::$app->language, false, 'about us section 2 header 2 ') ?><br/>
                        <strong><?= MgHelpers::getSetting('about us section 2 subheader 2 ' . Yii::$app->language, false, 'about us section 2 subheader 2 ') ?><br/></strong>
                    </div>
                    <?= MgHelpers::getSetting('about us section 2 text 2 ' . Yii::$app->language, true, 'about us section 2 text 2 ') ?>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="container">
    <section class="Section-border">
        <div class="About-us__header" style="margin-bottom: 30px;">
            <?= Yii::t('db', 'What is') ?>
            <strong>Green<span>way</span>?</strong>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= MgHelpers::getSetting('about us section 3 text 1 ' . Yii::$app->language, true, '<p>about us section 3 text 1 </p>') ?>
            </div>
            <div class="col-md-6">
                <?= MgHelpers::getSetting('about us section 3 text 2 ' . Yii::$app->language, true, '<p>about us section 3 text 2 </p>') ?>
            </div>
        </div>
    </section>
</div>


<?= $this->render('/common/team')?>
<?= $this->render('/common/faq')?>
<?= $this->render('/common/cooperateWith') ?>
