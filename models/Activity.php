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
     * @var integer
     */
    public $actv_id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $start_date;

    public $end_date;

    /**
     * @var id автора
     */
    public $usr_usr_id;

    /**
     * описание события
     * @var string
     */
    public $description;

    public $is_blocked;

    public $is_repeated;


    public $navi_date;

    public function attributeLabels()
    {

        return
                [
                    'actv_id'        => 'Идентификатор события',
                    'title'          => 'Название события',
                    'start_date'     => 'Дата начала',
                    'end_date'       => 'Дата окончания',
                    'usr_usr_id'     => 'Автор',
                    'description'    => 'Описание',
                    'is_blocked'     => 'На весь день?',
                    'is_repeated'    => 'Повторяющееся событие',
                    'navi_date'      => 'Дата записи'
                ];

    }

    public function rules(){

        return [
            [['end_date'],'default','value'=>$this->start_date],
            [['title','start_date','end_date','usr_usr_id','description'],'required'],
            [['start_date','end_date'],'date','format' => 'yyyy-M-d H:m:s'],
            [['is_blocked'],'boolean'],
            [['is_repeated'],'boolean'],


        ];
    }

}