<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2019-03-25
 * Time: 00:32
 */


use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['id' => 'activity-Create','method' => 'Post']);

?>

<h3>PrevPage: <?= $prevPage;?></h3>

<?= $form->field($model,'title'); ?>
<?= $form->field($model,'startDay')->input('date');?>
<?= $form->field($model,'endDay')->input('date');?>
<?= $form->field($model,'description')->textarea(); ?>
<?= $form->field($model,'isBlocked')->checkbox(); ?>
<?= $form->field($model,'isRepeated')->checkbox(); ?>
<?= $form->field($model,'idAuthor'); ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <button type="submit">Сохранить</button>

    </div>
</div>

<?php ActiveForm::end() ?>
