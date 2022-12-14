<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration_reference".
 *
 * @property int $regref_id
 * @property int $hospital_id
 * @property string $name
 * @property bool $is_active
 * @property int|null $created_by
 * @property string|null $created_time
 * @property int|null $updated_by
 * @property string|null $updated_time
 *
 * @property Registration[] $registrations
 * @property Hospital $hospital
 * @property User $createdBy
 * @property User $updatedBy
 */
class RegistrationReference extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registration_reference';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hospital_id', 'name', 'is_active'], 'required'],
            [['hospital_id', 'created_by', 'updated_by'], 'default', 'value' => null],
            [['hospital_id', 'created_by', 'updated_by'], 'integer'],
            [['created_time', 'updated_time'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['is_active'], 'boolean'],
            [['hospital_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hospital::className(), 'targetAttribute' => ['hospital_id' => 'hospital_id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'user_id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'regref_id' => Yii::t('app', 'Regref ID'),
            'hospital_id' => Yii::t('app', 'Hospital ID'),
            'name' => Yii::t('app', 'Name'),
            'is_active' => Yii::t('app', 'Is Active'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_time' => Yii::t('app', 'Created Time'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_time' => Yii::t('app', 'Updated Time'),
        ];
    }

    /**
     * Gets query for [[Registrations]].
     *
     * @return \yii\db\ActiveQuery|RegistrationQuery
     */
    public function getRegistrations()
    {
        return $this->hasMany(Registration::className(), ['regref_id' => 'regref_id']);
    }

    /**
     * Gets query for [[Hospital]].
     *
     * @return \yii\db\ActiveQuery|HospitalQuery
     */
    public function getHospital()
    {
        return $this->hasOne(Hospital::className(), ['hospital_id' => 'hospital_id']);
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|UsersQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['user_id' => 'created_by']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery|UsersQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['user_id' => 'updated_by']);
    }

    /**
     * {@inheritdoc}
     * @return RegistrationReferenceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RegistrationReferenceQuery(get_called_class());
    }

    public function beforeSave($insert)
    {
        $this->name = strtoupper($this->name);
        if ($this->isNewRecord) {
            $this->created_by = Yii::$app->user->getId();
            $this->created_time = date('Y-m-d H:i:s');
        }
        $this->updated_by = Yii::$app->user->getId();
        $this->updated_time = date('Y-m-d H:i:s');
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    public function getActive()
    {
        return self::find()->where(['is_active' => true, 'hospital_id' => Yii::$app->user->identity->hospital_id])->all();
    }
}
