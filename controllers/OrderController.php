<?php

namespace app\controllers;

use app\models\Order;
use yii\data\ActiveDataProvider;
use yii\rest\Controller;
use yii\web\NotFoundHttpException;

class OrderController extends Controller
{
    public $modelClass = 'app\models\Order';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actionIndex()
    {
        return new ActiveDataProvider([
            'query' => Order::find(),
        ]);
    }

    public function actionView($id)
    {
        $model = Order::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        } else {
            return new ActiveDataProvider([
                'query' => $model,
            ]);
        }
    }

    public function actionCreate()
    {
        $model = new Order;
        $model->attributes = \Yii::$app->request->post();

        if ($model->validate()) {
            $model->save();

            return [
                'message' => "successfully created",
                'id' => $model->id,
            ];
        } else {
            $errors = $model->errors;

            return $errors;
        }
    }

    public function actionUpdate($id)
    {
        $model = Order::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        } else {
            $model->attributes = \Yii::$app->request->post();

            if ($model->validate()) {
                $model->save();

                return [
                    'message' => "successfully updated",
                    'id' => $model->id,
                ];
            } else {
                $errors = $model->errors;

                return $errors;
            }
        }
    }

    public function actionDelete($id)
    {
        $model = Order::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException();
        } else {
            $model->delete();

            return [
                'message' => "successfully deleted resource",
            ];
        }
    }
}