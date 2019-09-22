<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "branches".
 *
 * @property int $id
 * @property string $name
 * @property int $headquarters_id
 */
class Branch extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['headquarters_id'], 'integer', 'required'],
            [['name'], 'string', 'required', 'max' => 255],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['name','headquarters_id'];

        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'headquarters_id' => 'Headquarters ID',
        ];
    }
}
