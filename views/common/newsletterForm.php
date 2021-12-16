<?

use yii\bootstrap\ActiveForm;
use yii\web\View;
use app\components\mgcms\MgHelpers;

/* @var $this yii\web\View */

?>

<section class="Section" style="position: relative; overflow: hidden;">
    <img class="Newsletter-bg" src="/svg/newsletter2.svg" alt="" />
    <div class="container" style="position: relative; z-index: 1;">
        <h1><?= MgHelpers::getSettingTranslated('newsletter header','newsletter header')?></h1>
        <div class="Newsletter-wrapper">
            <div class="Newsletter-icon">
                <img src="/svg/newsletter.svg" alt=""/>
            </div>
            <div class="Newsletter">
                <?php $form = ActiveForm::begin(['id' => 'newsletter-form', 'class' => 'Form']); ?>
                    <h2><?= MgHelpers::getSettingTypeText('Newsletter - subheader' . Yii::$app->language, false, 'Newsletter - subheader') ?>
                    </h2>
                    <div class="input-wrapper">
                        <input required class="Form__input" name="newsletterEmail" type="email" placeholder="<?= Yii::t('db', '`Type email address') ?>">
                        <button type="submit" class="btn btn-orange" onclick="validateNewsletterTerms()"><?= Yii::t('db', 'SIGN IN') ?><span></span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input class="Form__checkbox" type="checkbox" id="n-field-1" required>
                            <label for="n-field-1">
                                <?= MgHelpers::getSettingTypeText('Newsletter - accept 1' . Yii::$app->language, false, 'Newsletter - accept 1') ?>
                            </label>
                            <br>
                            <input class="Form__checkbox" type="checkbox" id="n-field-2" required>
                            <label for="n-field-2"><?= MgHelpers::getSettingTypeText('Newsletter - accept 1' . Yii::$app->language, false, 'Newsletter - accept 1') ?></label>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>

<script>
    function validateNewsletterTerms(){
      if(!$('#n-field-1').is(':checked') || !$('#n-field-2').is(':checked')){
        alert('<?= Yii::t('db', 'Please accept terms') ?>')
      }
    }
</script>
