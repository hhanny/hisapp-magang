<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mrtindakan".
 *
 * @property string $tindakan_id
 * @property string|null $nama_tindakan
 */
class Mrtindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mrtindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tindakan_id'], 'required'],
            [['tindakan_id'], 'string', 'max' => 6],
            [['nama_tindakan'], 'string', 'max' => 50],
            [['tindakan_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tindakan_id' => 'Tindakan ID',
            'nama_tindakan' => 'Nama Tindakan',
        ];
    }
}
