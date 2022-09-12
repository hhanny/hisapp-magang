<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mrtipetindakan".
 *
 * @property string|null $tipetindakan_id
 * @property string|null $tipe_tindakan
 */
class Mrtipetindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mrtipetindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipetindakan_id'], 'string', 'max' => 2],
            [['tipe_tindakan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tipetindakan_id' => 'Tipetindakan ID',
            'tipe_tindakan' => 'Tipe Tindakan',
        ];
    }
}
