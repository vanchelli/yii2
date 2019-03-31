<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2019-03-25
 * Time: 01:42
 */

namespace app\models;

use yii\base\Model;


class Day extends Model
{

    public $date;

    public $type;

    public $eventList;

    public function attributeLabels()
    {

        return
            [
                'date'         => 'Дата',
                'type'      => 'Выходной?',

            ];

    }

    public function rules(){
        return [
            [['type'],'boolean'],
        ];
    }

}