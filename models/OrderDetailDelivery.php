<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_detail_deliveries".
 *
 * @property int $id
 * @property int $delivery_id
 * @property int $order_detail_id
 */
class OrderDetailDelivery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_detail_deliveries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['delivery_id', 'order_detail_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'delivery_id' => 'Delivery ID',
            'order_detail_id' => 'Order Detail ID',
        ];
    }
}
