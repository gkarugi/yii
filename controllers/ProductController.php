<?php

namespace app\controllers;

use app\models\Product;
use yii\data\ActiveDataProvider;
use yii\rest\Controller;
use yii\web\NotFoundHttpException;

class ProductController extends Controller
{
    public $modelClass = 'app\models\Product';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actionIndex()
    {
        return new ActiveDataProvider([
            'query' => Product::find(),
        ]);
    }

    public function actionView($id)
    {
        $model = Product::findOne($id);

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
        $model = new Product;
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
        $model = Product::findOne($id);

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
        $model = Product::findOne($id);

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