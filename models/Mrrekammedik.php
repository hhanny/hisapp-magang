<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mrrekammedik".
 *
 * @property int $rekammedik_id
 * @property string|null $jenisctev_id
 * @property int|null $infonoso_id
 * @property int|null $kasus_id
 * @property int|null $statuskembali_id
 * @property string|null $tuna_kode
 * @property int|null $statuslengkap_id
 * @property string|null $ugdlayanan_id
 * @property string|null $alasandirujuk_id
 * @property string|null $ugddiagnosa_id
 * @property string|null $no_reg
 * @property string|null $anemnesa
 *
 * @property Mrdiagnosaawal $ugddiagnosa
 * @property Mrdisabilitas $tunaKode
 * @property Mrinfeksinosokomial $infonoso
 * @property Mrjenisctev $jenisctev
 * @property Mrkasus $kasus
 * @property Mrstatuskembali $statuskembali
 * @property Mrstatuslengkap $statuslengkap
 * @property Mrugdalasandirujuk $alasandirujuk
 * @property Mrugdlayanan $ugdlayanan
 */
class Mrrekammedik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mrrekammedik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['infonoso_id', 'kasus_id', 'statuskembali_id', 'statuslengkap_id'], 'default', 'value' => null],
            [['infonoso_id', 'kasus_id', 'statuskembali_id', 'statuslengkap_id'], 'integer'],
            [['jenisctev_id', 'ugdlayanan_id', 'alasandirujuk_id', 'ugddiagnosa_id'], 'string', 'max' => 2],
            [['tuna_kode'], 'string', 'max' => 10],
            [['no_reg'], 'string', 'max' => 12],
            [['anemnesa'], 'string', 'max' => 50],
            [['ugddiagnosa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mrdiagnosaawal::className(), 'targetAttribute' => ['ugddiagnosa_id' => 'ugddiagnosa_id']],
            [['tuna_kode'], 'exist', 'skipOnError' => true, 'targetClass' => Mrdisabilitas::className(), 'targetAttribute' => ['tuna_kode' => 'tuna_kode']],
            [['infonoso_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mrinfeksinosokomial::className(), 'targetAttribute' => ['infonoso_id' => 'infonoso_id']],
            [['jenisctev_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mrjenisctev::className(), 'targetAttribute' => ['jenisctev_id' => 'jenisctev_id']],
            [['kasus_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mrkasus::className(), 'targetAttribute' => ['kasus_id' => 'kasus_id']],
            [['statuskembali_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mrstatuskembali::className(), 'targetAttribute' => ['statuskembali_id' => 'statuskembali_id']],
            [['statuslengkap_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mrstatuslengkap::className(), 'targetAttribute' => ['statuslengkap_id' => 'statuslengkap_id']],
            [['alasandirujuk_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mrugdalasandirujuk::className(), 'targetAttribute' => ['alasandirujuk_id' => 'alasandirujuk_id']],
            [['ugdlayanan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mrugdlayanan::className(), 'targetAttribute' => ['ugdlayanan_id' => 'ugdlayanan_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rekammedik_id' => 'Rekammedik ID',
            'jenisctev_id' => 'Jenisctev ID',
            'infonoso_id' => 'Infonoso ID',
            'kasus_id' => 'Kasus ID',
            'statuskembali_id' => 'Statuskembali ID',
            'tuna_kode' => 'Tuna Kode',
            'statuslengkap_id' => 'Statuslengkap ID',
            'ugdlayanan_id' => 'Ugdlayanan ID',
            'alasandirujuk_id' => 'Alasandirujuk ID',
            'ugddiagnosa_id' => 'Ugddiagnosa ID',
            'no_reg' => 'No Reg',
            'anemnesa' => 'Anemnesa',
        ];
    }

    /**
     * Gets query for [[Ugddiagnosa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUgddiagnosa()
    {
        return $this->hasOne(Mrdiagnosaawal::className(), ['ugddiagnosa_id' => 'ugddiagnosa_id']);
    }

    /**
     * Gets query for [[TunaKode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTunaKode()
    {
        return $this->hasOne(Mrdisabilitas::className(), ['tuna_kode' => 'tuna_kode']);
    }

    /**
     * Gets query for [[Infonoso]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfonoso()
    {
        return $this->hasOne(Mrinfeksinosokomial::className(), ['infonoso_id' => 'infonoso_id']);
    }

    /**
     * Gets query for [[Jenisctev]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisctev()
    {
        return $this->hasOne(Mrjenisctev::className(), ['jenisctev_id' => 'jenisctev_id']);
    }

    /**
     * Gets query for [[Kasus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKasus()
    {
        return $this->hasOne(Mrkasus::className(), ['kasus_id' => 'kasus_id']);
    }

    /**
     * Gets query for [[Statuskembali]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatuskembali()
    {
        return $this->hasOne(Mrstatuskembali::className(), ['statuskembali_id' => 'statuskembali_id']);
    }

    /**
     * Gets query for [[Statuslengkap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatuslengkap()
    {
        return $this->hasOne(Mrstatuslengkap::className(), ['statuslengkap_id' => 'statuslengkap_id']);
    }

    /**
     * Gets query for [[Alasandirujuk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlasandirujuk()
    {
        return $this->hasOne(Mrugdalasandirujuk::className(), ['alasandirujuk_id' => 'alasandirujuk_id']);
    }

    /**
     * Gets query for [[Ugdlayanan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUgdlayanan()
    {
        return $this->hasOne(Mrugdlayanan::className(), ['ugdlayanan_id' => 'ugdlayanan_id']);
    }
}
