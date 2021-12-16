<?php
/* @var $this yii\web\View */

/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use yii\widgets\ListView;
use app\models\mgcms\db\Project;

$this->title = Yii::t('db', 'Current projects');
$this->params['breadcrumbs'][] = $this->title;


?>


<section class="Section Projects animatedParent">
    <div class="container fadeIn animated">
        <div class="Projects__header__wrapper">
            <h4 class="Projects__header"><?= Yii::t('db', 'Projects') ?></h4>
        </div>
    </div>
    <div class="container">
        <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => [
                'class' => 'Projects__card'
            ],
            'options' => [
                'class' => 'Projects__sortable',
            ],
            'layout' => '{items}',
            'itemView' => function ($model, $key, $index, $widget) {
                return $this->render('_tileItem', ['model' => $model, 'key' => $key, 'index' => $index, 'widget' => $widget, 'view' => $this]);
            },
        ])

        ?>
    </div>
    <div class="Pagination text-center">
        <nav aria-label="Page navigation example">
            <?=
            ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => '{pager}',
                'pager' => [
                    'firstPageLabel' => '&laquo;',
                    'lastPageLabel' => '&raquo;',
                    'prevPageLabel' => '&#8249;',
                    'nextPageLabel' => '&#8250;',


                    // Customzing CSS class for pager link
                    'linkOptions' => [
                        'class' => 'page-link'
                    ],
                    'activePageCssClass' => 'page-link--active',
                    'pageCssClass' => 'page-item',
                    // Customzing CSS class for navigating link
                    'prevPageCssClass' => 'page-item Pagination__arrow',
                    'nextPageCssClass' => 'page-item Pagination__arrow',
                    'firstPageCssClass' => 'page-item Pagination__arrow',
                    'lastPageCssClass' => 'page-item Pagination__arrow',
                ],
            ])

            ?>
        </nav>
    </div>
</section>


