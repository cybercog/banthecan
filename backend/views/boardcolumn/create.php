<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BoardColumn */

$this->title = 'Create Board Column';
$this->params['breadcrumbs'][] = ['label' => 'Board Columns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="board-column-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
