<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "benefits".
 *
 * @property int $id
 * @property float $Val
 */
class Benefit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'benefits';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Val'], 'required'],
            [['id'], 'integer'],
            [['Val'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Val' => 'Val',
        ];
    }
}
