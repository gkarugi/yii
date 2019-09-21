<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deliveries".
 *
 * @property int $id
 * @property string $delivery_date
 * @property int $supplier_id
 */
class Delivery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deliveries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['delivery_date'], 'safe'],
            [['supplier_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'delivery_date' => 'Delivery Date',
            'supplier_id' => 'Supplier ID',
        ];
    }
}
