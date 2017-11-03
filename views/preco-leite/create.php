<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PrecoLeite */

$this->title = 'Create Preco Leite';
$this->params['breadcrumbs'][] = ['label' => 'Preco Leites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preco-leite-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>