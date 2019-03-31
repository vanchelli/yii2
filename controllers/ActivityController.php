<?php

namespace app\controllers;

use Yii;
use app\models\Activity;
use yii\web\Application;

class ActivityController extends \yii\web\Controller
{

    public $prevPage;

    public function actions(){


        $session = Yii::$app->session;
        $this->prevPage = $session->get('prevPage');

        $session->set('prevPage',
            Yii::$app->request->url);


    }
    public function actionIndex()
    {




        return $this->render('index',
            ['prevPage' => $this->prevPage,]

        );
    }

    public function actionView(){


        $activity = \Yii::$app->activity->getModel();


        return $this->render('view',
            [
                'model'=> $activity, 'prevPage' => $this->prevPage,
            ]
        );
    }


    public function actionCreate()
    {
        //return "Создание активности";
        $activity = \Yii::$app->activity->getModel();

        if ($activity->load(Yii::$app->request->post())){
            if ($activity->validate()) {
                //return "Создание активности";
                return $this->render('view',
                    [
                        'model'=> $activity,
                        'prevPage' => $this->prevPage,
                    ]
                );
            }

        }

        return $this->render('create',
            [
                'model'=> $activity,'prevPage' => $this->prevPage,
            ]
        );

    }

}
