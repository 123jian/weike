<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keke_witkey_mark_config".
 *
 * @property integer $mark_config_id
 * @property string $obj
 * @property integer $good
 * @property integer $normal
 * @property integer $bad
 * @property integer $type
 */
class KekeWitkeyMarkConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keke_witkey_mark_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['good', 'normal', 'bad', 'type'], 'integer'],
            [['obj'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mark_config_id' => 'Mark Config ID',
            'obj' => 'Obj',
            'good' => 'Good',
            'normal' => 'Normal',
            'bad' => 'Bad',
            'type' => 'Type',
        ];
    }
}
