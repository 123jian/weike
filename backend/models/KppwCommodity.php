<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kppw_commodity".
 *
 * @property integer $commodity_id
 * @property integer $t_id
 * @property string $c_name
 * @property string $c_describe
 * @property string $c_picture
 * @property string $c_price
 * @property string $c_way
 * @property string $c_state
 * @property integer $t_pid
 * @property integer $u_id
 * @property string $c_namea
 */
class KppwCommodity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kppw_commodity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t_id', 't_pid', 'u_id'], 'integer'],
            [['c_describe'], 'string'],
            [['c_name'], 'string', 'max' => 30],
            [['c_picture'], 'string', 'max' => 50],
            [['c_price'], 'string', 'max' => 10],
            [['c_way'], 'string', 'max' => 20],
            [['c_state', 'c_namea'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'commodity_id' => 'Commodity ID',
            't_id' => 'T ID',
            'c_name' => 'C Name',
            'c_describe' => 'C Describe',
            'c_picture' => 'C Picture',
            'c_price' => 'C Price',
            'c_way' => 'C Way',
            'c_state' => 'C State',
            't_pid' => 'T Pid',
            'u_id' => 'U ID',
            'c_namea' => 'C Namea',
        ];
    }
}
