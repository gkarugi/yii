<?php

namespace app\Controllers;

use yii\rest\ActiveController;

class BranchController extends ActiveController
{
    public $modelClass = 'app\models\Branch';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}