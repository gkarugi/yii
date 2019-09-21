<?php

namespace app\Controllers;

use yii\rest\ActiveController;

class OrderController extends ActiveController
{
    public $modelClass = 'app\models\Order';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}