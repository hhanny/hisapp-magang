<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mrugdtindaklanjut".
 *
 * @property string|null $tindaklanjut_id
 * @property string|null $keterangan
 */
class Mrugdtindaklanjut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mrugdtindaklanjut';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tindaklanjut_id'], 'string', 'max' => 2],
            [['keterangan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tindaklanjut_id' => 'Tindaklanjut ID',
            'keterangan' => 'Keterangan',
        ];
    }
}
