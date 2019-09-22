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
    const SCENARIO_CREATE = 'create';

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
            [['delivery_date'], 'safe', 'required'],
            [['supplier_id'], 'integer', 'required'],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['delivery_date', 'supplier_id'];

        return $scenarios;
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
