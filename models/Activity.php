<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2019-03-24
 * Time: 23:31
 */

namespace app\models;

use yii\base\Model;


/**
 * Class Activity
 *
 * Сущноность Activity - событие календаря
 * @package app\models
 *
 *
 *
 */

class Activity extends Model
{

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $startDay;

    public $endDay;

    /**
     * @var id автора
     */
    public $idAuthor;

    /**
     * описание события
     * @var string
     */
    public $description;

    public $isBlocked;

    public $isRepeated;

    public function attributeLabels()
    {

        return
                [
                    'title'         => 'Название события',
                    'startDay'      => 'Дата начала',
                    'endDay'        => 'Дата окончания',
                    'idAuthor'      => 'Автор',
                    'description'   => 'Описание',
                    'isBlocked'     => 'На весь день?',
                    'isRepeated'    => 'Повторяющееся событие'
                ];

    }

    public function rules(){

        return [
            [['endDay'],'default','value'=>$this->startDay],
            [['title','startDay','endDay','idAuthor','description'],'required'],

            [['isBlocked'],'boolean'],
            [['isRepeated'],'boolean'],


        ];
    }

}