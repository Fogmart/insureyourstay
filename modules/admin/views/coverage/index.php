<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoverageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coverages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coverage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coverage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'benefit_id',
            'company_id',
            'age',
            //'val',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
