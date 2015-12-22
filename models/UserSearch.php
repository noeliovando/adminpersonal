<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'cedula', 'telefono', 'extension', 'supervisor', 'nombre', 'apellido', 'password', 'division', 'proceso', 'rol'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        if(Yii::$app->user->identity->rol=='100')
            $query->andFilterWhere(['like', 'username', $this->username])
                ->andFilterWhere(['like', 'cedula', $this->cedula])
                ->andFilterWhere(['like', 'telefono', $this->telefono])
                ->andFilterWhere(['like', 'extension', $this->extension])
                ->andFilterWhere(['like', 'supervisor', $this->supervisor])
                ->andFilterWhere(['like', 'nombre', $this->nombre])
                ->andFilterWhere(['like', 'apellido', $this->apellido])
                ->andFilterWhere(['like', 'password', $this->password])
                ->andFilterWhere(['like', 'division', $this->division])
                ->andFilterWhere(['like', 'proceso', $this->proceso])
                ->andFilterWhere(['like', 'rol', $this->rol]);
        else
            $query->andFilterWhere(['like', 'username', $this->username])
                ->andFilterWhere(['like', 'cedula', $this->cedula])
                ->andFilterWhere(['like', 'telefono', $this->telefono])
                ->andFilterWhere(['like', 'extension', $this->extension])
                ->andFilterWhere(['like', 'supervisor', Yii::$app->user->identity->username])
                ->andFilterWhere(['like', 'nombre', $this->nombre])
                ->andFilterWhere(['like', 'apellido', $this->apellido])
                ->andFilterWhere(['like', 'password', $this->password])
                ->andFilterWhere(['like', 'division', $this->division])
                ->andFilterWhere(['like', 'proceso', $this->proceso])
                ->andFilterWhere(['like', 'rol', $this->rol]);

        return $dataProvider;
    }
}
