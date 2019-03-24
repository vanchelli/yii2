<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2019-03-25
 * Time: 00:32
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$form = ActiveForm::begin();

?>

<?= $form->field($model,'title') ?>


<?php ActiveForm::end() ?>
