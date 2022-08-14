<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "district".
 *
 * @property string $district_id
 * @property string $prv_id
 * @property string $district_name
 * @property string|null $created_by
 * @property string|null $created_time
 *
 * @property Province $prv
 * @property Subdistrict[] $subdistricts
 */
class District extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'district';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['district_id', 'prv_id', 'district_name'], 'required'],
            [['created_time', 'prv'], 'safe'],
            [['district_id'], 'string', 'max' => 6],
            [['prv_id'], 'string', 'max' => 10],
            [['district_name'], 'string', 'max' => 100],
            [['created_by'], 'string', 'max' => 20],
            [['district_id'], 'unique'],
            [['prv_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['prv_id' => 'prv_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'district_id' => Yii::t('app', 'District ID'),
            'prv_id' => Yii::t('app', 'Province'),
            'prv' => Yii::t('app', 'Province'),
            'district_name' => Yii::t('app', 'District Name'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_time' => Yii::t('app', 'Created Time'),
        ];
    }

    /**
     * Gets query for [[Prv]].
     *
     * @return \yii\db\ActiveQuery|ProvinceQuery
     */
    public function getPrv()
    {
        return $this->hasOne(Province::className(), ['prv_id' => 'prv_id']);
    }

    /**
     * Gets query for [[Subdistricts]].
     *
     * @return \yii\db\ActiveQuery|SubdistrictQuery
     */
    public function getSubdistricts()
    {
        return $this->hasMany(Subdistrict::className(), ['district_id' => 'district_id']);
    }

    /**
     * {@inheritdoc}
     * @return DistrictQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DistrictQuery(get_called_class());
    }

    public function afterFind()
    {
        $this->created_time = date('d-m-Y H:i:s', strtotime($this->created_time));
        parent::afterFind(); // TODO: Change the autogenerated stub
    }

    public function beforeSave($insert)
    {
        $this->created_by = Yii::$app->user->getId();
        $this->created_time = date('Y-m-d H:i:s');
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}
