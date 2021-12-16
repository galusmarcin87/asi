<?

use app\components\mgcms\MgHelpers;

if (MgHelpers::getSetting('home - wspolpracujemy obrazki') == '') {
    return false;
}

?>

<section class="Section Partners">
    <div class="container">
        <h1><?= Yii::t('db', 'Partners'); ?>
            <div id="partnersNav" class="Custom-nav"></div>
        </h1>
        <div class="Partners__carousel owl-carousel">
            <? foreach (MgHelpers::getSettingsArray('home - wspolpracujemy obrazki',false) as $fileUrl): ?>
                <div class="item Partners__item">
                    <a class="Partners__item__link" href="javascript:document">
                        <img class="Partners__item__link__logo" src="<?=$fileUrl?>"/>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>

