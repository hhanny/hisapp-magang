<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mrinap".
 *
 * @property int $mrinap_id
 * @property string|null $kelas_inap
 * @property string|null $ruang_inap
 */
class Mrinap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mrinap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelas_inap'], 'string', 'max' => 5],
            [['ruang_inap'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mrinap_id' => 'Mrinap ID',
            'kelas_inap' => 'Kelas Inap',
            'ruang_inap' => 'Ruang Inap',
        ];
    }
}
