<?

use app\widgets\NobleMenu;
use yii\helpers\Html;
use \app\components\mgcms\MgHelpers;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$isHomePage = $this->context->id == 'site' && $this->context->action->id == 'index';

$menu = new NobleMenu(['name' => 'header_' . Yii::$app->language, 'loginLink' => false]);

?>
<div class="menu-wrapper">
    <div class="container">
        <div class="menu">
            <a href="/">
                <img class="menu__logo" src="./img/Logo.png" alt="" />
            </a>
            <ul class="menu__list">
                <? foreach ($menu->getItems() as $item): ?>
                    <li class="menu__list__item <? if (isset($item['active']) && $item['active']): ?>menu__item--current<? endif ?>">
                        <? if (isset($item['url'])): ?>
                            <a href="<?= \yii\helpers\Url::to($item['url']) ?>"
                               class="
                                   menu__link
                                   <? if (!$isHomePage || !preg_match('/.*#.*/', $item['url'])): ?>external<? endif ?>
                                   <? if (isset($item['active']) && $item['active']): ?>menu__link--active<? endif ?>
                                "><?= $item['label'] ?></a>
                        <? endif ?>
                    </li>
                <? endforeach ?>

            </ul>
            <? if (Yii::$app->user->isGuest): ?>
            <div>
                <a href="<?= yii\helpers\Url::to(['/site/login']) ?>" class="btn btn--primary">
                    <?= Yii::t('db', 'Log in') ?>
                </a>
            </div>
            <? else: ?>
                <a href="<?= yii\helpers\Url::to(['/site/account']) ?>" class="btn btn--primary">
                    <?= Yii::t('db', 'My account') ?>
                </a>
            <? endif; ?>

            <div class="hidden">
                <div class="arr-down">
                    WHITEPAPER
                    <div class="dropdown">
                        <a href="#">Wicej o MFT</a>
                        <a href="#">Dla inwestorów</a>
                        <a href="#">Produkty w promocji</a>
                        <a href="#">Jak kupić reklam?</a>
                    </div>
                </div>
            </div>
            <div class="language-select">
                <?= strtoupper(Yii::$app->language) ?>
                <div class="dropdown">
                    <? foreach (Yii::$app->params['languagesDisplay'] as $language) : ?>
                        <div class="language-select__selected-lang">
                            <a href="<?= yii\helpers\Url::to(['/', 'language' => $language]) ?>"
                            class="Select-custom__options__option"><?= strtoupper($language) ?></a>
                        </div>
                    <? endforeach ?>
                </div>
            </div>
            <a id="MENU_TOGGLE" class="menu__toggle" href="#">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>




