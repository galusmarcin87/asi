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
            <a href="./index.html">
                <img class="menu__logo" src="./img/Logo.png" alt="" />
            </a>
            <ul class="menu__list">
                <li class="menu__list__item">
                    <a class="menu__link menu__link--active" href="index.html"
                    >HOME</a
                    >
                </li>
                <li class="menu__list__item">
                    <a class="menu__link" href="o-nas.html">O NAS</a>
                </li>
                <li class="menu__list__item">
                    <a class="menu__link" href="projekty.html">PROJEKTY</a>
                </li>
                <li class="menu__list__item">
                    <a class="menu__link" href="tekstowa.html">TOKENY</a>
                </li>
                <li class="menu__list__item">
                    <a class="menu__link" href="tekstowa.html">ROADMAP</a>
                </li>
                <li class="menu__list__item">
                    <a class="menu__link" href="tekstowa.html">CHCESZ ZAINWESTOWAĆ</a>
                </li>
                <li class="menu__list__item">
                    <a class="menu__link" href="kontakt.html">KONTAKT</a>
                </li>
                <li id="MENU_CLOSE" class="menu__close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </li>
            </ul>
            <div>
                <a class="btn btn--primary" href="./login.html">Logowanie</a>
            </div>
            <div>
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
                PL
                <div class="dropdown">
                    <div class="language-select__selected-lang">EN</div>
                    <div class="language-select__selected-lang">FR</div>
                </div>
            </div>
            <a id="MENU_TOGGLE" class="menu__toggle" href="#">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>


<div class="Menu-top-wrapper">
    <div id="nav-container" class="Menu-top">
        <div class="container">
            <div class="Menu-top__inner">
                <div>
                    <a href="/">
                        <img src="/svg/logo_Greenway.svg" alt="" />
                    </a>
                </div>
                <div class="Menu-top__elements">
                    <ul class="Menu-top__list">
                        <? foreach ($menu->getItems() as $item): ?>
                            <li class="<? if (isset($item['active']) && $item['active']): ?>menu__item--current<? endif ?>">
                                <? if (isset($item['url'])): ?>
                                    <a href="<?= \yii\helpers\Url::to($item['url']) ?>"
                                       class="
                                   Menu-top__link
                                   <? if (!$isHomePage || !preg_match('/.*#.*/', $item['url'])): ?>external<? endif ?>
                                   <? if (isset($item['active']) && $item['active']): ?>Menu-top__link--active<? endif ?>
                                "><?= $item['label'] ?></a>
                                <? endif ?>
                            </li>
                        <? endforeach ?>

                    </ul>

                    <a href="#" class="Menu-top__search-btn searchBtn">
                        <img src="/svg/lupa.svg" alt="" />
                    </a>
                    <? if (Yii::$app->user->isGuest): ?>
                    <a href="<?= yii\helpers\Url::to(['/site/login']) ?>" class="Menu-top__search-btn">
                        <img src="/svg/konto.svg" alt="" />
                    </a>
                    <? else: ?>
                        <a href="<?= yii\helpers\Url::to(['/site/account']) ?>" class="Menu-top__search-btn">
                            <img src="/svg/konto.svg" alt="" />
                        </a>
                    <? endif; ?>
                    <div class="Select-custom Menu-top__lang">
                        <div class="Select-custom__selected"><?= strtoupper(Yii::$app->language) ?></div>
                        <div class="Select-custom__options">
                            <? foreach (Yii::$app->params['languagesDisplay'] as $language) : ?>
                            <div class="Select-custom__options__option" data-value="<?= $language ?>">
                                <a href="<?= yii\helpers\Url::to(['/', 'language' => $language]) ?>"
                                   class="Select-custom__options__option"><?= strtoupper($language) ?></a>
                            </div>
                            <? endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Search-box">
            <div class="container">
                <?= Html::beginForm(['/site/search'], 'get') ?>
                    <div class="Search-box__form-wrpper">
                        <input
                                class="Search-box__input Form__input"
                                placeholder="&nbsp;"
                                name="q"
                        />
                        <label class="Form__label" for="phone"
                        ><?= Yii::t('db', 'Enter phrase'); ?></label
                        >
                        <button class="Search-box__submit" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        <a href="#" class="Search-box__close"> &#215; </a>
                    </div>
                <?= Html::endForm() ?>
            </div>
        </div>
    </div>
    <?= Html::beginForm(['/site/logout'], 'post', ['id' => 'logoutForm']) ?>
    <?= Html::endForm() ?>
    <script type="text/javascript">
      function submitLogoutForm() {
        $('#logoutForm').submit();
      }
    </script>

</div>




