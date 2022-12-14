<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pic_relation".
 *
 * @property string $picrel_id
 * @property string $name
 * @property int $s_order
 * @property int|null $created_by
 * @property string|null $created_time
 * @property int|null $updated_by
 * @property string|null $updated_time
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property Registration[] $registrations
 */
class PicRelation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pic_relation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['picrel_id', 'name', 's_order'], 'required'],
            [['s_order', 'created_by', 'updated_by'], 'default', 'value' => null],
            [['s_order', 'created_by', 'updated_by'], 'integer'],
            [['created_time', 'updated_time'], 'safe'],
            [['picrel_id'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 100],
            [['picrel_id'], 'unique'],
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
            'picrel_id' => Yii::t('app', 'Picrel ID'),
            'name' => Yii::t('app', 'Name'),
            's_order' => Yii::t('app', 'S Order'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_time' => Yii::t('app', 'Created Time'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_time' => Yii::t('app', 'Updated Time'),
        ];
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
     * Gets query for [[Registrations]].
     *
     * @return \yii\db\ActiveQuery|RegistrationQuery
     */
    public function getRegistrations()
    {
        return $this->hasMany(Registration::className(), ['picrel_id' => 'picrel_id']);
    }

    /**
     * {@inheritdoc}
     * @return PicRelationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PicRelationQuery(get_called_class());
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

    public static function getActive()
    {
        return self::find()->orderBy(['s_order' => SORT_ASC])->all();
    }
}
