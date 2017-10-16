<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Obrat */
/* @var $form ActiveForm */
?>
<div class="site-obrat">
    <div class="site-obrat_title">
        Заполните небольшую анкету, если хотите разделить со мной праздник
    </div>
    <?php $form = ActiveForm::begin(); ?>
        <div class="site-obrat_form">
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'count') ?>
            <?= $form->field($model, 'buhlo') ?>
            <?= $form->field($model, 'tel') ?>

            <div class="form-group">
                <?= Html::submitButton('Я приду!', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div><!-- site-obrat -->
