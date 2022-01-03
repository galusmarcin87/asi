<?

use app\components\mgcms\MgHelpers;
use \app\models\mgcms\db\User;

$teamUsers = User::find()->where(['status' => User::STATUS_INACTIVE, 'role' => 'team'])->all();
if(sizeof($teamUsers) == 0){
    return false;
}

?>

<section
        class="team-wrapper"
        style="background-image: url(/img/Apectos-Fisico-Gamers.png)"
>
    <div class="container">
        <h2 class="text-center"><?= Yii::t('db', 'OUR TEAM') ?>Ł</h2>
        <div class="team__carousel">
            <div id="TEAM" class="team owl-carousel owl-theme">
                <? foreach ($teamUsers as $teamUser): ?>
                    <div class="item team__item">
                        <? if ($teamUser->file && $teamUser->file->isImage()): ?>
                            <img class="team__avatar" src="<?= $teamUser->file->getImageSrc(122, 122) ?>"/>
                        <? endif ?>
                        <div class="team__header"><?= $teamUser->first_name ?> <?= $teamUser->last_name ?></div>
                        <div class="team__role"><?= $teamUser->getModelAttribute('position') ?></div>
                        <div class="social-icons team__icons">
                            <? if ($teamUser->getModelAttribute('facebook')): ?>
                                <a class="social-icons__icon" href="<?= $teamUser->getModelAttribute('facebook') ?>">
                                    <img src="/svg/facebook-y.svg" alt="" />
                                </a>
                            <? endif ?>

                            <? if ($teamUser->getModelAttribute('twitter')): ?>
                                <a class="social-icons__icon" href="<?= $teamUser->getModelAttribute('twitter') ?>">
                                    <img src="/svg/twitter-y.svg" alt="" />
                                </a>
                            <? endif ?>
                            <? if ($teamUser->getModelAttribute('linkedin')): ?>
                                <a class="social-icons__icon" href="<?= $teamUser->getModelAttribute('linkedin') ?>">
                                    <img src="/svg/linkedin-y.svg" alt="" />
                                </a>
                            <? endif ?>
                        </div>
                        <div class="team__desc">
                            <?= $teamUser->getModelAttribute('description') ?>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
</section>

