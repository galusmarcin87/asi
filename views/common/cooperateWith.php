<?

use app\components\mgcms\MgHelpers;

if (MgHelpers::getSetting('home - wspolpracujemy obrazki') == '') {
    return false;
}

?>

<section class="partners-wrapper">
    <div class="container">
        <h2 class="text-center"><?= Yii::t('db', 'Partners'); ?></h2>
        <div id="PARTNERS" class="partners owl-carousel owl-theme">
            <? foreach (MgHelpers::getSettingsArray('home - wspolpracujemy obrazki',false) as $fileUrl): ?>
                <div class="item partners__item">
                    <img class="Partners__item__link__logo" src="<?=$fileUrl?>"/>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>

