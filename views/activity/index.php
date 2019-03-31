<?php
/* @var $this yii\web\View */

 $model = new \app\models\Activity();

$this->title = 'Активности';
$this->params['breadcrumbs'][''] = ['label'=>$this->title, 'url'=>'/activity'] ;


?>
<div class="site-index">



    <div class="body-content">


<div class="nav-item">

    <a href="/activity/create">Create</a>
</div>


<table class="table">
    <tr class="row">
        <th><?=$model->getAttributeLabel('title')?></th>
        <th><?=$model->getAttributeLabel('start_date')?></th>
        <th><?=$model->getAttributeLabel('end_date');?></th>
        <th><?=$model->getAttributeLabel('description');?></th>
        <th><?=$model->getAttributeLabel('is_blocked');?></th>
        <th><?=$model->getAttributeLabel('is_repeated');?></th>
    </div>
    </tr>
    <?php foreach ($activities as $activity):?>
        <tr class="row">
            <td>
                <a href="activity/view?actv_id=<?=\yii\helpers\ArrayHelper::getValue($activity,'actv_id');?>">
                <?=\yii\helpers\ArrayHelper::getValue($activity,'title');?></a></td>
            <td><?=\yii\helpers\ArrayHelper::getValue($activity,'start_date');?></td>
            <td><?=\yii\helpers\ArrayHelper::getValue($activity,'end_date');?></td>
            <td><?=\yii\helpers\ArrayHelper::getValue($activity,'description');?></td>
            <td><?=\yii\helpers\ArrayHelper::getValue($activity,'is_blocked');?></td>
            <td><?=\yii\helpers\ArrayHelper::getValue($activity,'is_repeated');?></td>
            </div>
        </tr>
    <?php endforeach;?>
</table>
    </div>
