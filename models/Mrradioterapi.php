<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mrradioterapi".
 *
 * @property string|null $radioterapi_id
 * @property string|null $radio_terapi
 */
class Mrradioterapi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mrradioterapi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['radioterapi_id'], 'string', 'max' => 2],
            [['radio_terapi'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'radioterapi_id' => 'Radioterapi ID',
            'radio_terapi' => 'Radio Terapi',
        ];
    }
}
