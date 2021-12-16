<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Article;
use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\widgets\ListView;

$category = \app\models\mgcms\db\Category::find()->where(['name' => 'aktualności ' . Yii::$app->language])->one();
if (!$category) {
    return false;
}
$dataProvider = new ActiveDataProvider([
    'pagination' => ['pageSize' => '1'],
    'query' => Article::find()->where(['category_id' => $category->id])
        ->andWhere(['status' => Article::STATUS_ACTIVE])
        ->orderBy('order ASC , created_on DESC'),
]);

$dataProvider2 = new ActiveDataProvider([
    'pagination' => false,
    'query' => Article::find()->where(['category_id' => $category->id])->offset(1)->limit(2)
        ->andWhere(['status' => Article::STATUS_ACTIVE])
        ->orderBy('order ASC , created_on DESC'),
]);

$showAllButton = isset($showAllButton) ? $showAllButton : true;
?>
<section
        class="Section Projects Projects--list Projects--lightBg"
>
    <div class="container">
        <div class="Projects__header__wrapper">
            <h1><?= Yii::t('db', 'News') ?></h1>
            <a href="<?= $category->linkUrl ?>" class="btn btn-link">
                <?= Yii::t('db', 'See all') ?>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="Projects__sortable">
            <div>
                <?=
                ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemOptions' => [
                        'class' => 'animatedParent'
                    ],
                    'layout' => '{items}',
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('/article/_index', ['model' => $model, 'key' => $key, 'index' => $index, 'widget' => $widget, 'view' => $this,'full'=> true]);
                    },
                ])

                ?>
            </div>

                <?=
                ListView::widget([
                    'dataProvider' => $dataProvider2,
                    'itemOptions' => [
                            'tag' => false,
                        'class' => ''
                    ],

                    'layout' => '{items}',
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('/article/_index', ['model' => $model, 'key' => $key, 'index' => $index, 'widget' => $widget, 'view' => $this,'full'=> false]);
                    },
                ])

                ?>
        </div>
    </div>
</section>
