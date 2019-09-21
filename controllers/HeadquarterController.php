<?php

namespace app\Controllers;

use yii\rest\ActiveController;

class HeadquarterController extends ActiveController
{
    public $modelClass = 'app\models\Headquarter';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}