<?php

namespace common\models\base;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Order;

/**
 * OrderSearch represents the model behind the search form of `common\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'total_amount', 'user_id', 'province_id', 'district_id'], 'integer'],
            [['create_at', 'address_detail'], 'safe'],
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
        $query = Order::find();

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
            'id' => $this->id,
            'total_amount' => $this->total_amount,
            'create_at' => $this->create_at,
            'user_id' => $this->user_id,
            'province_id' => $this->province_id,
            'district_id' => $this->district_id,
        ]);

        $query->andFilterWhere(['like', 'address_detail', $this->address_detail]);

        return $dataProvider;
    }
}
