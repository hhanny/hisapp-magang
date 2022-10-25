<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mrdiagnosaawal;

/**
 * mrdiagnosaawalSearch represents the model behind the search form of `app\models\Mrdiagnosaawal`.
 */
class mrdiagnosaawalSearch extends Mrdiagnosaawal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ugddiagnosa_id', 'keterangan', 'tanggal_kontrol'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Mrdiagnosaawal::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'tanggal_kontrol' => $this->tanggal_kontrol,
        ]);

        $query->andFilterWhere(['ilike', 'ugddiagnosa_id', $this->ugddiagnosa_id])
            ->andFilterWhere(['ilike', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
