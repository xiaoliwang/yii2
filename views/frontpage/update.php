<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Frontpage */

$this->title = '更新首页模板: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Frontpages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="frontpage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    	'uploadForm' => $uploadForm
    ]) ?>

</div>
