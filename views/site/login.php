<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\components\mgcms\MgHelpers;
use yii\authclient\widgets\AuthChoice;


$this->title = Yii::t('db', 'Log in');
$this->params['breadcrumbs'][] = $this->title;
$fieldConfig = \app\components\ProjectHelper::getFormFieldConfig(false)

//https://yii2-framework.readthedocs.io/en/stable/guide/security-auth-clients/
?>


<section class="Section Section--big-padding-top Contact">
    <div class="container">
        <div class="Contact__grid">
            <div class="Contact-form">
                <?php
                $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'fieldConfig' => $fieldConfig
                ]);

                echo $form->errorSummary($model);
                ?>
                <h1 class="Project__header Project__header--light text-center"><?= Yii::t('db', 'Login') ?></h1>
                <div class="Contact-form__form-group form-group">
                    <?= $form->field($model, 'username')->textInput(['type' => 'text', 'required' => true, 'placeholder' => $model->getAttributeLabel('username')]) ?>
                </div>

                <div class="Contact-form__form-group form-group">
                    <?= $form->field($model, 'password')->passwordInput(['required' => true, 'placeholder' => $model->getAttributeLabel('password')]) ?>
                </div>

                <div class="Form__group form-group text-left">
                    <input type="hidden" name="LoginForm[rememberMe]" value="0">
                    <input
                            name="LoginForm[rememberMe]"
                            class="Form__checkbox"
                            type="checkbox"
                            id="rememberMe"
                            value="1"
                            checked
                            required
                    />
                    <label for="rememberMe"> <?= Yii::t('db', 'Remember me'); ?> </label>
                    <?= Html::a(Yii::t('db', 'Forgotten password?'), ['site/forgot-password'], ['class' => 'Contact__remember-password pull-right']) ?>

                </div>


                <div class="text-center">
                    <button style="margin-top: 117px !important" type="submit"
                            class="btn btn-orange Contact-form__submi">
                        <?= Yii::t('db', 'Log in') ?>
                        <span></span>
                    </button>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="Contact-form Contact-form--white">
                <?php
                $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'fieldConfig' => $fieldConfig
                ]);


                ?>
                <h1 class="Project__header Project__header--light text-center"><?= Yii::t('db', 'Register') ?></h1>
                <? //echo $form->errorSummary($modelRegister);?>
                <div class="Contact-form__form-group form-group">
                    <?= $form->field($modelRegister, 'username')->textInput(['type' => 'email', 'required' => true, 'placeholder' => $modelRegister->getAttributeLabel('username')]) ?>
                </div>
                <div class="Contact-form__form-group form-group">
                    <?= $form->field($modelRegister, 'password')->passwordInput(['required' => true, 'placeholder' => $modelRegister->getAttributeLabel('password')]) ?>

                </div>
                <div class="Contact-form__form-group form-group">
                    <?= $form->field($modelRegister, 'passwordRepeat')->passwordInput(['required' => true, 'placeholder' => $modelRegister->getAttributeLabel('passwordRepeat')]) ?>
                </div>
                <?= $this->render('login/acceptCheckbox', ['number' => '', 'form' => $form, 'modelRegister' => $modelRegister]) ?>


                <div class="text-center">
                    <button
                            type="submit"
                            class="Contact-form__submit btn btn-orange"
                            value="<?= Yii::t('db', 'Register') ?>"
                    >
                        <?= Yii::t('db', 'Register') ?>
                        <span></span>
                    </button>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>

