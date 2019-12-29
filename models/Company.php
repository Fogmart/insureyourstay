<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property int $id
 * @property string $name
 * @property int $rule
 * @property string|null $url
 * @property int|null $fr_max_age
 * @property int|null $fr_cov_type
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'rule'], 'required'],
            [['rule', 'fr_max_age', 'fr_cov_type'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['url'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'rule' => 'Rule',
            'url' => 'Url',
            'fr_max_age' => 'Fr Max Age',
            'fr_cov_type' => 'Fr Cov Type',
        ];
    }
}
