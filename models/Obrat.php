<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obrat".
 *
 * @property integer $id
 * @property string $name
 * @property integer $count
 * @property string $buhlo
 * @property string $reg_date
 * @property string $tel
 */
class Obrat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'obrat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['buhlo', 'tel','name','count'], 'required'],
            [['name'], 'string'],
            [['count'], 'integer'],
            [['reg_date'], 'safe'],
            [['buhlo', 'tel'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя или Имена гостей',
            'count' => 'Количество человек',
            'buhlo' => 'Что предпочитаете пить?',
            'reg_date' => 'Reg Date',
            'tel' => 'Номер телефона (для смс рассылки)',
        ];
    }
}
