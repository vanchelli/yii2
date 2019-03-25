<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2019-03-25
 * Time: 16:15
 */

namespace app\components;

use yii\base\Component;
use yii\helpers\Html;


class ActivityComponent extends Component
{


    public $modelClass;


    public function getModel()
    {
        return new $this->modelClass;
    }


}