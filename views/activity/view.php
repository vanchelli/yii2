<?php
/* @var $this yii\web\View */
?>
<h1><?$model->getAttributeLabel('title')?> : <?=$model->title; ?></h1>

<h3>PrevPage: <?= $prevPage;?></h3>


<?php if($model->startDay == $model->endDay): ?>
    <p>Событие на <?=date("d.m.Y", $model->startDay)?></p>
<?php else: ?>
    <p>Событие c <?=date("d.m.Y", $model->startDay)?> по <?=date("d.m.Y", $model->endDay)?></p>
<?php endif; ?>

<?php if($model->isBlocked == 1): ?>
    <p>Событие на весь день</p>
<?php endif ?>

<?php if($model->isRepeated == 1): ?>
    <p>Повторяющееся</p>
<?php endif ?>

<h3><?=$model->getAttributeLabel('description') ?></h3>
<div><?=$model->description ?></div>

<div>
    <a href="/activity">Activity index</a><br/>
    <a href="/activity/create">Create</a>

</div>
