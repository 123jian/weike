<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keke_witkey_mark_rule".
 *
 * @property integer $mark_rule_id
 * @property integer $g_value
 * @property integer $m_value
 * @property string $g_title
 * @property string $m_title
 * @property string $g_ico
 * @property string $m_ico
 */
class KekeWitkeyMarkRule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keke_witkey_mark_rule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_value', 'm_value'], 'integer'],
            [['g_title', 'm_title'], 'string', 'max' => 50],
            [['g_ico', 'm_ico'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mark_rule_id' => 'Mark Rule ID',
            'g_value' => 'G Value',
            'm_value' => 'M Value',
            'g_title' => 'G Title',
            'm_title' => 'M Title',
            'g_ico' => 'G Ico',
            'm_ico' => 'M Ico',
        ];
    }
}
