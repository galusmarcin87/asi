<?php
/* @var $this yii\web\View */

/* @var $model \app\models\ContactForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\components\mgcms\MgHelpers;

$this->title = MgHelpers::getSettingTranslated('contact_header', 'Contact');


?>

<section class="Section Section--big-padding-top Contact">
    <div class="container">
        <h1 class="Project__header Project__header--light">
            <?= Yii::t('db', 'Contact') ?>
        </h1>
        <div class="row">
            <div class="col-lg-4">
                <img class="Contact__icon" src="/svg/lokalizacja2.svg" alt="" />
                <div class="Contact__label">
                   <?= Yii::t('db', 'Address data') ?>
                </div>
                <div class="Contact__desc">
                    <?= MgHelpers::getSetting('contact_address', false, 'ul. Nazwaulicy 12/A1 00-202 Warszawa') ?>
                </div>
            </div>
            <div class="col-lg-4">
                <img class="Contact__icon" src="/svg/telefon.svg " alt="" />
                <div class="Contact__label"><?= Yii::t('db', 'Call us') ?></div>
                <div class="Contact__desc">
                    <? $phone = MgHelpers::getSetting('contact_phone', false, '+48309009839') ?>
                    <a href="phone:<?= $phone ?>"> <?= $phone ?></a>
                </div>
            </div>
            <div class="col-lg-4">
                <img class="Contact__icon" src="/svg/email.svg" alt="" />
                <div class="Contact__label"><?= Yii::t('db', 'Write email') ?></div>
                <div class="Contact__desc">
                    <? $email = MgHelpers::getSetting('contact_email', false, 'biuro@greenway.com') ?>
                    <a class="Contact__link" href="mailto:<?= $email ?>"></a>
                </div>
            </div>
        </div>
        <div class="Contact-form">
            <h6><?= Yii::t('db', 'Write <b>to us</b>') ?> </h6>
            <?php
            $form = ActiveForm::begin([
                'id' => 'contact-form',
                'fieldConfig' => \app\components\ProjectHelper::getFormFieldConfig(false)
            ]);

            //                    echo $form->errorSummary($model);
            ?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="Contact-form__form-group form-group">
                            <?= $form->field($model, 'name')->textInput([]) ?>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="Contact-form__form-group form-group">
                            <?= $form->field($model, 'email')->textInput([]) ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="Contact-form__form-group form-group">
                            <?= $form->field($model, 'phone')->textInput([]) ?>
                        </div>
                    </div>
                </div>


                <div class="Contact-form__form-group form-group">
                    <?= $form->field($model, 'body')->textarea(['placeholder' => ' ','rows'=>4]) ?>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="Form__group form-group text-left">
                            <?= $form->field($model, 'acceptTerms',
                                [
                                    'options' => [
                                        'class' => "Form__group form-group",
                                    ],
                                    'checkboxTemplate' => "{input}\n{label}\n{error}",
                                ]
                            )->checkbox(['class' => 'Form__checkbox']) ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-right">
                            <button
                                    type="submit"
                                    class="Contact-form__submit btn btn-orange">
                                <?= Yii::t('db', 'Send message') ?>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="Contact__map-wrapper">
            <div id="map" class="Contact__map"></div>
            <a href="" class="btn btn-orange hidden">
                SPRAWDŹ MAPE
                <span></span>
            </a>
        </div>
    </div>
</section>

<?= $this->render('contact/script') ?>

<?= $this->render('/common/team')?>
