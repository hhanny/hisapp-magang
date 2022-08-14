<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property string $prv_id
 * @property string $prv_name
 * @property string|null $created_by
 * @property string|null $created_time
 *
 * @property District[] $districts
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prv_id', 'prv_name'], 'required'],
            [['created_time'], 'safe'],
            [['prv_id'], 'string', 'max' => 10],
            [['prv_name'], 'string', 'max' => 100],
            [['created_by'], 'string', 'max' => 20],
            [['prv_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prv_id' => Yii::t('app', 'Prv ID'),
            'prv_name' => Yii::t('app', 'Prv Name'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_time' => Yii::t('app', 'Created Time'),
        ];
    }

    /**
     * Gets query for [[Districts]].
     *
     * @return \yii\db\ActiveQuery|DistrictQuery
     */
    public function getDistricts()
    {
        return $this->hasMany(District::className(), ['prv_id' => 'prv_id']);
    }

    /**
     * {@inheritdoc}
     * @return ProvinceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProvinceQuery(get_called_class());
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
