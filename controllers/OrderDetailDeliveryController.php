<?php

namespace app\Controllers;

use yii\rest\ActiveController;

class OrderDetailDeliveryController extends ActiveController
{
    public $modelClass = 'app\models\OrderDetailDelivery';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}