<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keke_witkey_pv".
 *
 * @property integer $pid
 * @property integer $pv_count
 * @property string $pv_time
 */
class KekeWitkeyPv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keke_witkey_pv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pv_count', 'pv_time'], 'required'],
            [['pv_count'], 'integer'],
            [['pv_time'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'Pid',
            'pv_count' => 'Pv Count',
            'pv_time' => 'Pv Time',
        ];
    }
}
