<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Coverage */

$this->title = 'Create Coverage';
$this->params['breadcrumbs'][] = ['label' => 'Coverages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coverage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
