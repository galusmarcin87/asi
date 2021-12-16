<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\web\View;


?>

<section class="Section Section--About-us" style="background-image: url(/images/Depositphotos_247767976_xl-2015.jpg)">
    <div class="container">
        <div class="About-us">
            <div>
                <img class="cover-max" src="<?= MgHelpers::getSetting('Home section 1 image', false, '/images/Depositphotos_247767976_xl-2015.jpg') ?>" alt="" />
            </div>
            <div class="About-us__content">
                <div class="About-us__header">
                    <?= MgHelpers::getSettingTypeText('Home section 1 - title 1 ' . Yii::$app->language, false, 'Kim jesteśmy') ?><br>
                    <strong><?= MgHelpers::getSettingTypeText('Home section 1 - title 2 ' . Yii::$app->language, false, 'Nasze doświadczenie') ?></strong>
                </div>
                <?= MgHelpers::getSettingTypeText('Home section 1 - text ' . Yii::$app->language, false, 'Home section 13 - text') ?>
                <a href="<?= \yii\helpers\Url::to('site/about-us')?>" class="btn btn-orange">
                    <?= Yii::t('db', 'MORE ABOUT US') ?>
                    <span></span>
                </a>
                <div class="row text-center" style="margin-top: 25px">
                    <div class="col-md-4">
                        <div class="big-text">
                            <div class="icon">
                                <img src="/svg/inwestycje.svg" alt="">
                            </div>
                            <?= MgHelpers::getSetting('Home section 1 number 1', false, '8') ?>
                            <p class="small">
                                <?= MgHelpers::getSettingTypeText('Home section 1 - number 1 text' . Yii::$app->language, true, 'liczba inwestycji') ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="big-text">
                            <div class="icon">
                                <img src="/svg/kwota.svg" alt="">
                            </div>
                            <?= MgHelpers::getSetting('Home section 1 number 2', false, '50 <small>MLN</small>') ?>
                            <p class="small">
                                <?= MgHelpers::getSetting('Home section 1 number 2 text', false, 'kwota
                                pozyskanych środków') ?>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="big-text">
                            <div class="icon">
                                <img src="/svg/czas.svg" alt="">
                            </div>
                            <?= MgHelpers::getSetting('Home section 1 number 3', false, '10') ?>
                            <p class="small">
                                <?= MgHelpers::getSetting('Home section 1 number 3 text', false, 'lat doświadczenia') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
