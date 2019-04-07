<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2019-03-25
 * Time: 16:15
 */

namespace app\components;

use app\models\Activity;
use yii\base\Component;
use yii\base\Model;
use yii\helpers\Html;
use Yii;

class ActivityComponent extends Component
{


    public $modelClass;


    public function getModel()
    {
        return new $this->modelClass;
    }


    public function getActivityList()
    {
        $activities =
            Yii::$app->db->createCommand('select * from activity')->queryAll();
        return $activities;
    }

    public function getActivityById($actv_id)
    {
        $params = [':actv_id' => $actv_id];

        $res =
            Yii::$app->db->createCommand('select * from activity where actv_id=:actv_id')->
            bindValues($params)->queryOne();
        //print_r($res);
        $activity = $this->getModel($res);

        $activity->actv_id      = $res['actv_id'];
        $activity->title        = $res['title'];
        $activity->usr_usr_id   = $res['usr_usr_id'];
        $activity->start_date   = $res['start_date'];
        $activity->end_date     = $res['end_date'];
        $activity->title        = $res['title'];
        $activity->usr_usr_id   = $res['usr_usr_id'];
        $activity->description  = $res['description'];
        $activity->is_blocked   = $res['is_blocked'];
        $activity->is_repeated  = $res['is_repeated'];
        $activity->navi_date    = $res['navi_date'];



        //print_r($activity);

        return $activity;
    }

    public function save(Activity $activity)
    {

        Yii::$app->db->createCommand()->insert('activity', [
            'usr_usr_id' => $activity->usr_usr_id,
            'start_date' => $activity->start_date,
            'end_date'   => $activity->end_date,
            'title'      => $activity->title,
            'usr_usr_id' => $activity->usr_usr_id,
            'description'=> $activity->description,
            'is_blocked' => $activity->is_blocked,
            'is_repeated'=> $activity->is_repeated


        ])->execute();

    }

}