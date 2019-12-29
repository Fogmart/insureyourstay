<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coverage".
 *
 * @property int $id
 * @property int $type
 * @property int $benefit_id
 * @property int $company_id
 * @property int $age
 * @property int $val
 */
class Coverage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coverage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type', 'benefit_id', 'company_id', 'age', 'val'], 'required'],
            [['id', 'type', 'benefit_id', 'company_id', 'age', 'val'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'benefit_id' => 'Benefit ID',
            'company_id' => 'Company ID',
            'age' => 'Age',
            'val' => 'Val',
        ];
    }
}
