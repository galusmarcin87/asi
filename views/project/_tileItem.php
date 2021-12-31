<?

use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;
use yii\web\View;

/* @var $model Project */
/* @var $this yii\web\View */
$model->language = Yii::$app->language;
$imageSrc  = $model->getImageFileSrc(502);
?>

<?if($imageSrc):?>
<img class="project__image" src="<?=$imageSrc?>" alt="" />
<?endif;?>
<div class="project__header">
    <?= $model->name?>
</div>

<div class="project__desc">
    <?= $model->lead?>
</div>

<a href="<?= $model->linkUrl?>" class="btn btn--primary"><?= Yii::t('db', 'See more') ?></a>
