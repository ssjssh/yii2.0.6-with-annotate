<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%service}}".
 *
 * @property string $id
 * @property string $created_at
 * @property double $price
 * @property string $user_name
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%service}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['created_at'], 'safe'],
            [['price'], 'number'],
            [['id'], 'string', 'max' => 100],
            [['user_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'price' => Yii::t('app', 'Price'),
            'user_name' => Yii::t('app', 'User Name'),
        ];
    }
}
