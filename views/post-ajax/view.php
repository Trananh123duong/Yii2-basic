<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
?>
<div class="post-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'content:ntext',
            'title',
        ],
    ]) ?>

</div>
