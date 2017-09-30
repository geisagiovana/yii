<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LoteAnimal */

$this->title = $model->COD_LOTE_ANIMAL;
$this->params['breadcrumbs'][] = ['label' => 'Lote Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lote-animal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->COD_LOTE_ANIMAL], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->COD_LOTE_ANIMAL], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'COD_LOTE_ANIMAL',
            'DESCR',
            'COD_ANIMAL',
        ],
    ]) ?>

</div>
