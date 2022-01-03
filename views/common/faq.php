<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;

$faq = \app\models\mgcms\db\Faq::find()->where(['lang' => Yii::$app->language, 'type' => \app\models\mgcms\db\Faq::TYPE_FAQ])->one();
if (!$faq) {
    return false;
}

?>

<section class="faq-wrapper">
    <div class="container">
        <h2 class="text-center"><?= Yii::t('db', 'FAQ') ?></h2>
        <div id="FAQ" class="faq">
            <div class="faq__list">
                <? foreach ($faq->faqItems as $index => $item): ?>
                    <?= $this->render('/faq/_index',['model' => $item, 'index' => $index]) ?>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>
