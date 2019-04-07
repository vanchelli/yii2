


<?php
/* @var $this yii\web\View */


use yii\helpers\Html;

$this->title = $model->title;
$this->params['breadcrumbs'][''] = ['label'=>'Активности', 'url'=>'/activity'] ;
$this->params['breadcrumbs'][]   = $this->title;

?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
        <div class="col-lg-3"><?=$model->getAttributeLabel('title')?></div><div class="col-lg-9"><?=$model->title; ?></div>
        </div>
        <div class="row">

        <div class="col-lg-3"></div><div class="col-lg-9"></div>
        </div>
            <div class="row">

            <div class="col-lg-3"></div><div class="col-lg-9"></div>
            </div>
        <div class="row">

            <div class="col-lg-3">Дата</div>
            <?php if($model->start_date == $model->end_date or !isset($model->end_date)): ?>
            <div class="col-lg-9"><?= $model->start_date;?></div>
            <?php else: ?>
            <div class="col-lg-9"><?= $model->start_date;?> по <?=$model->end_date;?></div>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php if($model->is_blocked == 1): ?>
            <div class="col-lg-12">
                Событие на весь день
            </div>
            <?php endif ?>
        </div>
        <div class="row">
            <?php if($model->is_repeated == 1): ?>
            <div class="col-lg-12">

            Повторяющееся
            </div>

            <?php endif ?>
        </div>
        <div class="row">
            <div class="col-lg-3"><?=$model->getAttributeLabel('description') ?></div>
            <div class="col-lg-9"><?=$model->description ?></div>
        </div>
    </div>

</div>

