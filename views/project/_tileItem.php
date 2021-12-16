<?

use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;
use yii\web\View;

/* @var $model Project */
/* @var $this yii\web\View */
$model->language = Yii::$app->language;
?>


<div class="Projects__card__image-wrapper">
    <? if ($model->file && $model->file->isImage()): ?>
        <img src="<?= $model->file->getImageSrc(455, 303); ?>" alt=""/>
    <? endif; ?>
    <div class="Projects__card__text">
        <a href="<?= $model->linkUrl ?>" class="btn btn-orange">
            <?= Yii::t('db', 'See more') ?>
            <span></span>
        </a>
    </div>
</div>
<div class="Projects__card__wrapper">
    <div class="Projects__card__header">
        <div class="Projects__card__heading">
            <?= $model->name ?>
        </div>
    </div>
    <div class="Projects__card__body">
        <ul class="List-custom__two">
            <li class="List-custom__two__item">
                  <span>
                    <img
                            class="List-custom__two_ico"
                            src="/svg/lokalizacja.svg"
                            alt=""
                    />


                  </span>
                <span><?= $model->localization ?></span>
            </li>
            <li class="List-custom__two__item">
                  <span>
                    <img
                            class="List-custom__two_ico"
                            src="/svg/czas.svg"
                            alt=""
                    />
                  </span>
                <span><?= $model->investition_time ?>                 </span>
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
                    <?= $model->percentage ?>% <?= Yii::t('db', 'refund'); ?>
                  </span>
            </li>
        </ul>
        <div class="Invest-counter">
            <? if ($model->money_full): ?>
                <div class="Invest-counter__header">
                    <div class="Invest-counter__source">

                        <span class="Invest-counter__source__value"><?= MgHelpers::convertNumberToNiceString((int)$model->money) ?></span>
                        PLN
                        (<span data-to="<?= round(($model->money / $model->money_full) * 100, 0) ?>"
                               class="Invest-counter__source__percent">0</span>%)
                    </div>
                    <div class="Invest-counter__target">
                        <?= MgHelpers::convertNumberToNiceString($model->money_full) ?> PLN
                    </div>
                </div>
                <div class="Invest-counter__value-line-wrapper">
                    <div
                            data-to="<?= $model->money ?>"
                            data-slide-to="<?= round(($model->money / $model->money_full) * 100, 0) ?>"
                            class="Invest-counter__value-line"
                            style="width: 0%"
                    ></div>
                </div>
            <? endif ?>
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
</div>

