<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2019-03-25
 * Time: 00:32
 */


use yii\bootstrap\ActiveForm;



$this->title = 'Новое событие';

$this->params['breadcrumbs'][] = ['label'=>'Активности', 'url'=>'/activity'] ;
$this->params['breadcrumbs'][]   = $this->title;

?>
<div class="site-index">
    <h2><?if (isset($error)){print_r($error);}?></h2>

    <?$form = ActiveForm::begin(['id' => 'activity-Create',
    'method' => 'Post',
    'layout' => 'horizontal',
    'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
]);?>


<?= $form->field($model,'title'); ?>
<?= $form->field($model,'start_date')->input('date');?>
<?= $form->field($model,'end_date')->input('date')?>
<?= $form->field($model,'description')->textarea(); ?>
<?= $form->field($model,'usr_usr_id'); ?>
<?= $form->field($model,'is_blocked')->checkbox(); ?>
<?= $form->field($model,'is_repeated')->checkbox(); ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <button type="submit">Сохранить</button>
    </div>
</div>

<?php ActiveForm::end() ?>

</div>
