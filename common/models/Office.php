<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lib_office".
 *
 * @property integer $id
 * @property string $name
 */
class Office extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lib_office';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @inheritdoc
     * @return OfficeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OfficeQuery(get_called_class());
    }
}
