<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;
use yii\bootstrap\ActiveForm;
use yii\web\View;

$slider = \app\models\mgcms\db\Slider::find()->where(['name' => 'main', 'language' => Yii::$app->language])->one();
if (!$slider) {
    return false;
}
?>

<section class="Slider">
    <div class="owl-carousel owl-theme">

        <? foreach ($slider->slides as $slide): ?>
            <div class="item">
                <div
                        class="Slider__item"
                        style="background-image: url('<?= $slide->file->imageSrc ?>');"
                >
                    <div class="container">
                        <div class="Slider__header">
                            <span><?= $slide->header ?></span>
                            <div></div>
                            <div><?= $slide->subheader ?> <b><?= $slide->body ?></b></div>
                        </div>
                        <div class="Slider__nav Custom-nav"></div>
                        <div class="Slider__footer">
                            <? if (MgHelpers::getSetting('facebook url')): ?>
                                <a  href="<?= MgHelpers::getSetting('facebook url') ?>" target="_blank" class="Social-icons__icon">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            <? endif ?>
                            <? if (MgHelpers::getSetting('youtube url')): ?>
                                <a  href="<?= MgHelpers::getSetting('youtube url') ?>" target="_blank" class="Social-icons__icon">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                            <? endif ?>
                            <? if (MgHelpers::getSetting('twitter url')): ?>
                                <a href="<?= MgHelpers::getSetting('twitter url') ?>" target="_blank" class="Social-icons__icon">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            <? endif ?>
                            <? if (MgHelpers::getSetting('linkedin url')): ?>
                                <a href="<?= MgHelpers::getSetting('linkedin url') ?>" target="_blank" class="Social-icons__icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            <? endif ?>
                        </div>
                    </div>
                </div>
            </div>

        <? endforeach; ?>

    </div>
</section>
