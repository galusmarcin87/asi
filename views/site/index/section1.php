<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\web\View;


?>

<div class="about-wrapper">
    <section>
        <div class="container">
            <div class="about">
                <div class="about__content">
                    <div>
                        <h2><?= MgHelpers::getSettingTypeText('Home section 1 - title 1 ' . Yii::$app->language, false, 'Czym jest nasza platforma?') ?></h2>
                        <h4><?= MgHelpers::getSettingTypeText('Home section 1 - title 2 ' . Yii::$app->language, false, 'Nasze doświadczenie') ?></h4>
                        <?= MgHelpers::getSettingTypeText('Home section 1 - text ' . Yii::$app->language, false, '<p>Home section 1 - text</p>') ?>
                        <a href="<?= \yii\helpers\Url::to('site/about-us')?>" class="btn btn--primary"><?= Yii::t('db', 'More about us') ?></a>
                        <div class="numbers-wrapper">
                            <div class="number">
                                <img class="number__image" src="/img/inwestycje-svg.png" />
                                <div>
                                    <div class="number__header"><?= MgHelpers::getSetting('Home section 1 number 1', false, '16') ?></div>
                                    <div class="number__desc"><?= MgHelpers::getSettingTypeText('Home section 1 - number 1 text' . Yii::$app->language, true, 'NUMBER OF </br> INVESTITIONS') ?></div>
                                </div>
                            </div>
                            <div class="number">
                                <img class="number__image" src="/img/inwestycje-svg.png" />
                                <div>
                                    <div class="number__header"><?= MgHelpers::getSetting('Home section 1 number 2', false, '109 <small>MLN</small>') ?></div>
                                    <div class="number__desc">
                                        <?= MgHelpers::getSettingTypeText('Home section 1 - number 1 text' . Yii::$app->language, true, 'KWOTA POZYSKANYCH <br />ŚRODKÓW') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img class="about__image" src="<?= MgHelpers::getSetting('Home section 1 image', false, '/svg/grafika-2.svg') ?>" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="about">
                <div class="about__content">
                    <div class="about__image-wrapper">
                        <img class="about__image" src="<?= MgHelpers::getSetting('Home section 2 image ', false, '/svg/grafika-3.svg') ?>" />
                    </div>
                    <div class="about__conten--wrapper">
                        <h2><?= MgHelpers::getSettingTypeText('Home section 2 - title 1 ' . Yii::$app->language, false, 'Chcesz zainwestować?') ?></h2>
                        <h4>
                            <?= MgHelpers::getSettingTypeText('Home section 2 - title 2 ' . Yii::$app->language, false, 'Nowoczesny i <br />
                            rozwijajacy sie rynek') ?>

                        </h4>
                        <?= MgHelpers::getSettingTypeText('Home section 2 - text ' . Yii::$app->language, false, '<p>Home section 2 - text</p>') ?>
                        <a href="<?= \yii\helpers\Url::to('site/about-us')?>" class="btn btn--primary"><?= Yii::t('db', 'See more') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
