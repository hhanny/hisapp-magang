<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mrdokter".
 *
 * @property string|null $dokter_kode
 * @property string|null $spesialis
 */
class Mrdokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mrdokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dokter_kode'], 'string', 'max' => 6],
            [['spesialis'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dokter_kode' => 'Dokter Kode',
            'spesialis' => 'Spesialis',
        ];
    }

}