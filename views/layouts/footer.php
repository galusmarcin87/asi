<?

use app\widgets\NobleMenu;
use yii\helpers\Html;
use app\components\mgcms\MgHelpers;
use yii\bootstrap\ActiveForm;

$menu = new NobleMenu(['name' => 'footer_' . Yii::$app->language, 'loginLink' => false]);
$menu2 = new NobleMenu(['name' => 'footer2_' . Yii::$app->language, 'loginLink' => false]);

?>
<footer>
    <div class="Footer">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="Footer__item"><?= Yii::t('db', 'Contact') ?></div>
                        <div class="Footer__desc">
                            <?= MgHelpers::getSetting('footer address', false, 'Greenway Sp. z o.o. <br>
                            ul. Warszawska 12.A1, 00-301 Warszawa<br>
                            +48 900 100 090 <br>') ?>
                            <? $email = MgHelpers::getSetting('footer email', false, 'biuro@greenway.com') ?>
                            <a href="mailto:<?= $email ?>">
                                <?= $email ?>
                            </a>
                            <a href="<?= \yii\helpers\Url::to('site/contact') ?>" class="btn btn-orange">
                                <?= Yii::t('db', 'Contact form') ?>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="Footer__item"><?= MgHelpers::getSettingTranslated('footer menu 1 header','Menu')?></div>
                        <ul class="Footer__menu">
                            <? foreach ($menu->getItems() as $item): ?>
                                <li class="Footer__menu__item">
                                    <? if (isset($item['url'])): ?>
                                        <a href="<?= \yii\helpers\Url::to($item['url']) ?>"
                                           class="Footer__menu__link <? if (isset($item['active']) && $item['active']): ?>Footer__menu__link--active<? endif ?>"><?= $item['label'] ?></a>
                                    <? endif ?>
                                </li>
                            <? endforeach ?>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="Footer__item">
                            <?= MgHelpers::getSettingTranslated('footer menu 2 header','Regions of operation')?>
                        </div>
                        <ul class="Footer__menu">
                            <? foreach ($menu2->getItems() as $item): ?>
                                <li class="Footer__menu__item">
                                    <? if (isset($item['url'])): ?>
                                        <a href="<?= \yii\helpers\Url::to($item['url']) ?>"
                                           class="Footer__menu__link <? if (isset($item['active']) && $item['active']): ?>Footer__menu__link--active<? endif ?>"><?= $item['label'] ?></a>
                                    <? endif ?>
                                </li>
                            <? endforeach ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="Footer__cookies">
                <?= MgHelpers::getSetting('footer cookie '.Yii::$app->language,'footer cookie '.Yii::$app->language)?>
                <div class="Footer__cookies__close">×</div>
            </div>
        </div>
        <div class="Footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><?= MgHelpers::getSettingTranslated('footer copyright',  'Wszelkie prawa zastzeżone &#169; 2021. <b>Greenway</b>. <a href="">Polityka prywatności.</a> Rodo') ?> </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>
                            <?= Yii::t('db', 'Realization') ?>:
                            <a
                                    class="Footer__link"
                                    target="_blank"
                                    href="https://www.vertesdesign.pl/"
                            >Vertes Desing</a
                            >
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="Socials-box">
        <? if (MgHelpers::getSetting('facebook url')): ?>
            <a href="<?= MgHelpers::getSetting('facebook url') ?>" target="_blank"
               class="Socials-box__icon">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        <? endif ?>
        <? if (MgHelpers::getSetting('youtube url')): ?>
            <a href="<?= MgHelpers::getSetting('youtube url') ?>" target="_blank"
               class="Socials-box__icon">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        <? endif ?>
        <? if (MgHelpers::getSetting('twitter url')): ?>
            <a href="<?= MgHelpers::getSetting('twitter url') ?>" target="_blank"
               class="Socials-box__icon">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        <? endif ?>
        <? if (MgHelpers::getSetting('linkedin url')): ?>
            <a href="<?= MgHelpers::getSetting('linkedin url') ?>" target="_blank"
               class="Socials-box__icon">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        <? endif ?>
    </div>
</footer>
