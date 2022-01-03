<?

use app\models\mgcms\db\Project;
use app\components\mgcms\MgHelpers;

$category = \app\models\mgcms\db\Category::findOne(['name'=>'roadmap '.  Yii::$app->language]);
if(!$category){
    return false;
}


?>
<section class="roadmap-wrapper">
    <h2 class="text-center"><?= Yii::t('db', 'Roadmap') ?></h2>
    <div id="ROADMAP" class="roadmap owl-carousel owl-theme">
        <?foreach($category->articles as $article):?>
            <div class="item roadmap__item">
                <div class="roadmap__header"><?= $article->title ?></div>
                <?=$article->excerpt?>
            </div>
        <?endforeach?>

    </div>
</section>
