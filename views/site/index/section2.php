<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\web\View;


?>

<section class="Section Section--Invest" style="background-image: url(<?= MgHelpers::getSetting('Home section 1 image', false, '/images/Depositphotos_11804746_xl-2015.jpg') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="About-us__header">
                    <?= MgHelpers::getSettingTypeText('Home section 2 - title' . Yii::$app->language, false, 'Chcesz') ?><br>
                    <strong><?= MgHelpers::getSettingTypeText('Home section 2 - 1 subtitle' . Yii::$app->language, false, 'zainwestować') ?>?</strong>
                </div>
                <p class="small">
                    <?= MgHelpers::getSettingTypeText('Home section 2 - text 1' . Yii::$app->language, false, 'Home section - 1 text 1') ?>
                </p>
                <p>
                    <?= MgHelpers::getSettingTypeText('Home section 2 - text 2' . Yii::$app->language, false, 'Home section - 1 text 2') ?>
                </p>
                <a href="<?= MgHelpers::getSetting('Home section 2 - link '.Yii::$app->language, false, '#') ?>" class="btn btn-orange" style="margin: 45px; margin-left: 10px;">
                    <?= Yii::t('db', 'See more') ?>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</section>
