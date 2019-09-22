<?php

namespace app\controllers;

use app\models\Branch;
use yii\data\ActiveDataProvider;
use yii\rest\Controller;
use yii\web\NotFoundHttpException;

class BranchController extends Controller
{
    public $modelClass = 'app\models\Branch';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actionIndex()
    {
        return new ActiveDataProvider([
            'query' => Branch::find(),
        ]);
    }

    public function actionView($id)
    {
        $model = Branch::findOne($id);

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
        $model = new Branch;
        $model->attributes = \Yii::$app->request->post();

        if ($model->validate()) {
            $model->save();

            return [
                'message' => "successfully created",
                'id' => $model->id,
            ];
        } else {
            // validation failed: $errors is an array containing error messages
            $errors = $model->errors;

            return $errors;
        }
    }
}