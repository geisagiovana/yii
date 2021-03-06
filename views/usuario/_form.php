<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USUARIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SENHA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ATIVO')->textInput() ?>
  
    <?= $form->field($model, 'COD_PESSOA')->dropDownList(ArrayHelper::map(\app\models\Pessoa::find()->all(), 'COD_PESSOA', 'NOME'), ['prompt'=>'']) ?>
    <p>
        <?= Html::a('Cadastrar Pessoa', ['pessoa/create'], ['class' => 'btn btn-info']) ?>
    </p>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
