<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\web\View;


?>
<section style="padding-bottom: 60px;">
    <div class="text-center">
        <img src="<?= MgHelpers::getSetting('Home banner - image '.Yii::$app->language, false, '/images/banner.png') ?>" alt=""/>
    </div>
</section>
