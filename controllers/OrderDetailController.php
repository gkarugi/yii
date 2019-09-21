<?php

namespace app\Controllers;

use yii\rest\ActiveController;

class OrderDetailController extends ActiveController
{
    public $modelClass = 'app\models\OrderDetail';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}