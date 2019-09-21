<?php

namespace app\Controllers;

use yii\rest\ActiveController;

class DeliveryController extends ActiveController
{
    public $modelClass = 'app\models\Delivery';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}