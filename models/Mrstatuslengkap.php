<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mrstatuslengkap".
 *
 * @property int $statuslengkap_id
 * @property string|null $nama_statuslengkap
 *
 * @property Mrrekammedik[] $mrrekammediks
 */
class Mrstatuslengkap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mrstatuslengkap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statuslengkap_id'], 'required'],
            [['statuslengkap_id'], 'default', 'value' => null],
            [['statuslengkap_id'], 'integer'],
            [['nama_statuslengkap'], 'string', 'max' => 100],
            [['statuslengkap_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'statuslengkap_id' => 'Statuslengkap ID',
            'nama_statuslengkap' => 'Nama Statuslengkap',
        ];
    }

    /**
     * Gets query for [[Mrrekammediks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMrrekammediks()
    {
        return $this->hasMany(Mrrekammedik::className(), ['statuslengkap_id' => 'statuslengkap_id']);
    }
}
