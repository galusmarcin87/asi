<?
/* @var $model app\models\mgcms\db\FaqItem */
?>

<div class="faq__item">
    <?= $model->question ?>
    <div class="faq__area <?= $index === 0 ? 'faq__item--active' : ''?>">
        <div class="faq__desc">
            <p>
                <?= $model->answer ?>
            </p>
        </div>
    </div>
</div>
