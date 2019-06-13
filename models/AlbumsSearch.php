<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Albums;

/**
 * AlbumsSearch represents the model behind the search form of `app\models\Albums`.
 */
class AlbumsSearch extends Albums
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'image_main', 'image_01', 'image_02', 'image_03', 'image_04', 'image_05', 'image_06', 'image_07', 'image_08', 'image_09', 'image_10', 'image_11', 'image_12', 'image_13', 'image_14', 'image_15', 'image_16', 'image_17', 'image_18', 'image_19', 'image_20', 'image_21'], 'safe'],
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
        $query = Albums::find();

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
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'image_main', $this->image_main])
            ->andFilterWhere(['like', 'image_01', $this->image_01])
            ->andFilterWhere(['like', 'image_02', $this->image_02])
            ->andFilterWhere(['like', 'image_03', $this->image_03])
            ->andFilterWhere(['like', 'image_04', $this->image_04])
            ->andFilterWhere(['like', 'image_05', $this->image_05])
            ->andFilterWhere(['like', 'image_06', $this->image_06])
            ->andFilterWhere(['like', 'image_07', $this->image_07])
            ->andFilterWhere(['like', 'image_08', $this->image_08])
            ->andFilterWhere(['like', 'image_09', $this->image_09])
            ->andFilterWhere(['like', 'image_10', $this->image_10])
            ->andFilterWhere(['like', 'image_11', $this->image_11])
            ->andFilterWhere(['like', 'image_12', $this->image_12])
            ->andFilterWhere(['like', 'image_13', $this->image_13])
            ->andFilterWhere(['like', 'image_14', $this->image_14])
            ->andFilterWhere(['like', 'image_15', $this->image_15])
            ->andFilterWhere(['like', 'image_16', $this->image_16])
            ->andFilterWhere(['like', 'image_17', $this->image_17])
            ->andFilterWhere(['like', 'image_18', $this->image_18])
            ->andFilterWhere(['like', 'image_19', $this->image_19])
            ->andFilterWhere(['like', 'image_20', $this->image_20])
            ->andFilterWhere(['like', 'image_21', $this->image_21]);

        return $dataProvider;
    }
}
