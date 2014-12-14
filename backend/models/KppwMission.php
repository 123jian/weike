<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kppw_mission".
 *
 * @property integer $mi_id
 * @property integer $re_id
 * @property double $mi_money
 * @property string $mi_time
 * @property integer $mi_type
 * @property integer $mi_sum
 * @property integer $mi_price
 * @property integer $mi_onesum
 * @property double $mi_onemoney
 * @property integer $mi_twosum
 * @property double $mi_twomoney
 * @property integer $mi_theresum
 * @property double $mi_theremoney
 * @property integer $mi_shtype
 * @property string $mi_add_time
 * @property string $mi_user
 * @property integer $t_id
 * @property integer $t_pid
 * @property string $de_phone
 * @property integer $cash_rule_id
 * @property string $mi_counts
 * @property string $de_title
 * @property string $de_content
 * @property string $de_file
 * @property integer $u_id
 */
class KppwMission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kppw_mission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['re_id', 'mi_type', 'mi_sum', 'mi_price', 'mi_onesum', 'mi_twosum', 'mi_theresum', 'mi_shtype', 't_id', 't_pid', 'cash_rule_id', 'u_id'], 'integer'],
            [['mi_money', 'mi_onemoney', 'mi_twomoney', 'mi_theremoney'], 'number'],
            [['mi_time', 'mi_add_time'], 'safe'],
            [['mi_user'], 'string', 'max' => 20],
            [['de_phone', 'mi_counts', 'de_title'], 'string', 'max' => 30],
            [['de_content'], 'string', 'max' => 100],
            [['de_file'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mi_id' => 'Mi ID',
            're_id' => 'Re ID',
            'mi_money' => 'Mi Money',
            'mi_time' => 'Mi Time',
            'mi_type' => 'Mi Type',
            'mi_sum' => 'Mi Sum',
            'mi_price' => 'Mi Price',
            'mi_onesum' => 'Mi Onesum',
            'mi_onemoney' => 'Mi Onemoney',
            'mi_twosum' => 'Mi Twosum',
            'mi_twomoney' => 'Mi Twomoney',
            'mi_theresum' => 'Mi Theresum',
            'mi_theremoney' => 'Mi Theremoney',
            'mi_shtype' => 'Mi Shtype',
            'mi_add_time' => 'Mi Add Time',
            'mi_user' => 'Mi User',
            't_id' => 'T ID',
            't_pid' => 'T Pid',
            'de_phone' => 'De Phone',
            'cash_rule_id' => 'Cash Rule ID',
            'mi_counts' => 'Mi Counts',
            'de_title' => 'De Title',
            'de_content' => 'De Content',
            'de_file' => 'De File',
            'u_id' => 'U ID',
        ];
    }
}
