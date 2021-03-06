<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '首页模板';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frontpage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建首页元素', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
        	[
        		'attribute' => 'link',
        		'format' => 'raw',
        		'label' => '链接',
        		'value' => function($model){
        			return Html::a($model->link, $model->link);
        		}
        	],
        	[
        		'attribute' => 'pic',
        		'format' => 'raw',
        		'label' => '首页banner图',
        		'value' => function($model){
        			return Html::img('/' . $model->pic, ['style' => 'width:100px']);
        		}
    		],
        	[
        		'attribute' => 'used',
        		'label'=>'是否使用',
        		'value' => function($model){
    				return $model->used ? '使用' : '不使用';
    			}
    		],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
