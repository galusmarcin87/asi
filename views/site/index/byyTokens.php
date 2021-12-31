<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\web\View;
use app\models\mgcms\db\Project;

$model = Project::find()->andWhere(['status' => Project::STATUS_MAIN])->one();
if(!$model){
    return false;
}

?>
<div
        class="buy-tokens-wrapper"
        style="
          background-image: url(/img/profesjonalny-gracz-esport-grajacy-w-turnieju-gier_53876-98560.png);
        "
>
    <div class="container">
        <div class="buy-tokens">
            <h2 class="text-center"><?= Yii::t('db', 'Buy tokens') ?></h2>
            <?= $model->lead?>
            <div class="token">
                <div class="token__desc">
                    <div>
                        <div><?= Yii::t('db', 'Tokens name') ?></div>
                        <div><?= MgHelpers::getSetting('buy tokens - tokens name', false,'ASI GIG coin')?></div>
                    </div>
                    <div>
                        <div><?= Yii::t('db', 'Shortcut') ?></div>
                        <div><?= MgHelpers::getSetting('buy tokens - Shortcut', false,'AGC')?></div>
                    </div>
                    <div>
                        <div><?= Yii::t('db', 'Number of tokens') ?></div>
                        <div><?= MgHelpers::getSettingTranslated('buy tokens - Number of tokens', '5 000 000 (1 token to 10$)')?></div>
                    </div>
                    <div>
                        <div><?= Yii::t('db', 'Blockchain environment') ?></div>
                        <div><?= MgHelpers::getSetting('buy tokens - Blockchain environment', false,'Ethereum')?></div>
                    </div>
                    <div>
                        <div><?= Yii::t('db', 'Tokens standard') ?></div>
                        <div><?= MgHelpers::getSetting('buy tokens - Tokens standard', false,'ERC20')?></div>
                    </div>
                </div>
                <div class="token__countdown">
                    <div class="Invest-counter">
                        <div class="Invest-counter__body">
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
                    <div class="Invest-counter Invest-counter--grey">
                        <div class="Invest-counter__value-line-wrapper">
                            <div
                                    data-to="<?= $model->money ?>"
                                    data-slide-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                    class="Invest-counter__value-line"
                                    style="width: 0%"
                            ></div>
                        </div>
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
                    </div>
                    <div class="token__countdown__icons">
                        <div class="token__countdown__icon">
                            <img src="/svg/procent.svg" alt=""/>
                        </div>
                        <div
                                class="
                      token__countdown__desc token__countdown__desc--margin
                    "
                        >
                            <?= $model->percentage?>% <?= Yii::t('db',' RETURN')?>
                        </div>
                        <div class="token__countdown__icon">
                            <img src="/svg/czas.svg" alt=""/>
                        </div>
                        <div class="token__countdown__desc"><?= $model->investition_time?> <?= Yii::t('db', 'YEARS') ?></div>
                    </div>
                </div>
            </div>
            <a href="<?= \yii\helpers\Url::to(['project/buy', 'id' => $model->id]) ?>" class="btn btn--primary"
            ><?= Yii::t('db', 'INVEST IN FUND') ?></a
            >
        </div>
    </div>
</div>
