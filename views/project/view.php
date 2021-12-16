<?php
/* @var $model app\models\mgcms\db\Project */
/* @var $form app\components\mgcms\yii\ActiveForm */

/* @var $this yii\web\View */

/* @var $subscribeForm \app\models\SubscribeForm */

use app\components\mgcms\MgHelpers;
use yii\web\View;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;


$this->title = $model->name;
$model->language = Yii::$app->language;
if (!$model->money_full) {
    return false;
}

$index = 0;
?>

<section class="Section Project">
    <div class="container">
        <div class="Section-white">
            <h1 class="text-center Project__header"><?= $model->name ?></h1>
            <div class="Project__content">
                <div class="Project__info">
                    <div class="Project__slider">
                        <div class="owl-carousel">
                            <? foreach ($model->files as $file): ?>
                                <? if ($file->isImage()): $index++; ?>
                                    <img class="item" src="<?= $file->getImageSrc(705, 410) ?>"/>
                                <? endif; ?>
                            <? endforeach; ?>
                        </div>
                    </div>
                    <div class="Project__map-wrapper">
                        <div class="Project__map" id="map"></div>
                        <a href="" class="btn btn-orange">
                            <?= Yii::t('db', 'Check out map') ?>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="Project__info__content">
                    <div>
                        <div class="Invest-counter">
                            <div class="Invest-counter__body">
                                <div class="Invest-counter__body__heading">
                                    <?= Yii::t('db', 'Time left'); ?>:
                                </div>
                                <div
                                        data-date="<?= $model->date_crowdsale_end ?>"
                                        class="Count-down-timer"
                                >
                                    <div class="Count-down-timer__day">
                                        <span></span> <?= Yii::t('db', 'days'); ?>
                                    </div>
                                    <div class="Count-down-timer__hour">
                                        <span></span> <?= Yii::t('db', 'hours'); ?>
                                    </div>
                                    <div class="Count-down-timer__minute">
                                        <span></span> <?= Yii::t('db', 'minutes'); ?>
                                    </div>
                                    <div class="Count-down-timer__second">
                                        <span></span> <?= Yii::t('db', 'seconds'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <ul class="List-custom__two List-custom__two--grey List-custom__two--flex">
                            <li class="List-custom__two__item">
                  <span>
                    <img
                            class="List-custom__two_ico"
                            src="/svg/lokalizacja.svg"
                            alt=""
                    />
                  </span>
                                <span>
                   <?= $model->localization ?>
                  </span>
                            </li>
                            <li class="List-custom__two__item">
                  <span>
                    <img
                            class="List-custom__two_ico"
                            src="/svg/czas.svg"
                            alt=""
                    />
                  </span>
                                <span>
                    <?= $model->investition_time ?>
                  </span>
                            </li>
                            <li class="List-custom__two__item">
                  <span>
                    <img
                            class="List-custom__two_ico"
                            src="/svg/stopa.svg"
                            alt=""
                    />
                  </span>
                                <span>
                    <?= $model->percentage ?>% <?= Yii::t('db', 'return') ?>
                  </span>
                            </li>
                        </ul>
                        <div class="Invest-counter Invest-counter--grey">
                            <div class="Invest-counter__header">
                                <div class="Invest-counter__source">
                        <span class="Invest-counter__source__value"
                        ><?= $model->money ?> PLN</span
                        >
                                    (<span
                                            data-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                            class="Invest-counter__source__percent"
                                    >0</span
                                    >%)
                                </div>
                                <div class="Invest-counter__target">
                                    cel: <?= MgHelpers::convertNumberToNiceString((int)($model->money_full)) ?> PLN
                                </div>
                            </div>
                            <div class="Invest-counter__value-line-wrapper">
                                <div
                                        data-to="<?= $model->money ?>"
                                        data-slide-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                        class="Invest-counter__value-line"
                                        style="width: 0%"
                                ></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <h1 class="text-center Project__header Project__header--light"><?= Yii::t('db', 'Investition description') ?></h1>
            <?= $model->text ?>
            <div class="Section-border">
                <h1 class="text-center Project__header Project__header--light"><?= Yii::t('db', 'Investment advantages') ?></h1>
                <?= $this->render('view/bonuses', ['model' => $model]) ?>
            </div>
            <div>
                <b><?= Yii::t('db', 'Files to download'); ?></b>
                <div class="Project__files">


                </div>
                <h1 class="text-center Project__header Project__header--light"><?= Yii::t('db', 'Files to download'); ?></h1>
                <div class="Project__files">
                    <? foreach ($model->fileRelations as $fileRelation): ?>
                        <? if ($fileRelation->json != '1' || !$fileRelation->file) continue ?>
                        <a class="Project__file" href="<?= $fileRelation->file->linkUrl ?>" target="_blank">
                            <div class="Project__file__ico">
                                <img src="/svg/pobierz.svg" alt=""/>
                            </div>
                            <?= $fileRelation->file->origin_name ?>

                        </a>
                    <? endforeach; ?>

                </div>
            </div>
            <div>
                <h1 class="text-center Project__header Project__header--light"><?= Yii::t('db', 'Project owners') ?></h1>
                <div class="Supervisos">
                    <? foreach ($model->users as $user): ?>
                        <div class="item Team__item">
                            <? if ($user->file && $user->file->isImage()): ?>
                                <img class="Team__item__photo"
                                     src="<?= $user->file->getImageSrc(120, 120) ?>"/>
                            <? endif ?>

                            <div>
                                <div class="Team__item__name"><?= $user ?></div>
                                <div>
                                    <a class="Team__item__email" href="mailto:<?= $user->email ?>"><?= $user->email ?></a>
                                </div>
                                <div>
                                    <a href="tel:<?= $user->phone ?>"><?= $user->phone ?></a>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>


<section
        class="Section Projects"
        style="padding-bottom: 75px; padding-top: 0;"
>
    <div class="container">
        <div class="Projects__header">
            <?= Yii::t('db', 'See also') ?>
        </div>

        <?= $this->render('/common/projects') ?>
    </div>
</section>
<?= $this->render('view/script', ['model' => $model]) ?>
