<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kppw_tore".
 *
 * @property integer $to_id
 * @property integer $u_id
 * @property string $to_name
 * @property string $to_content
 * @property integer $to_check
 * @property string $to_time
 * @property integer $to_state
 * @property integer $t_id
 * @property integer $t_pid
 */
class KppwTore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kppw_tore';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'to_check', 'to_state', 't_id', 't_pid'], 'integer'],
            [['to_time'], 'safe'],
            [['to_state'], 'required'],
            [['to_name'], 'string', 'max' => 20],
            [['to_content'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'to_id' => 'To ID',
            'u_id' => 'U ID',
            'to_name' => 'To Name',
            'to_content' => 'To Content',
            'to_check' => 'To Check',
            'to_time' => 'To Time',
            'to_state' => 'To State',
            't_id' => 'T ID',
            't_pid' => 'T Pid',
        ];
    }
}
