<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mricopim".
 *
 * @property string|null $icopim_id
 * @property string|null $icopim_nama
 * @property string|null $icopim_keterangan
 */
class Mricopim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mricopim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icopim_id'], 'string', 'max' => 6],
            [['icopim_nama'], 'string', 'max' => 100],
            [['icopim_keterangan'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'icopim_id' => 'Icopim ID',
            'icopim_nama' => 'Icopim Nama',
            'icopim_keterangan' => 'Icopim Keterangan',
        ];
    }
}
