<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CursoSupervisado;

/**
 * CursoSupervisadoSearch represents the model behind the search form about `app\models\CursoSupervisado`.
 */
class CursoSupervisadoSearch extends CursoSupervisado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_curso'], 'integer'],
            [['nombre_curso', 'localidad', 'costo', 'trabajador', 'desde', 'hasta', 'horas', 'empresa', 'nacional'], 'safe'],
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
        $query = CursoSupervisado::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_curso' => $this->id_curso,
            'desde' => $this->desde,
            'hasta' => $this->hasta,
        ]);

        $query->andFilterWhere(['like', 'nombre_curso', $this->nombre_curso])
            ->andFilterWhere(['like', 'localidad', $this->localidad])
            ->andFilterWhere(['like', 'costo', $this->costo])
            ->andFilterWhere(['like', 'trabajador', $this->trabajador])
            ->andFilterWhere(['like', 'horas', $this->horas])
            ->andFilterWhere(['like', 'empresa', $this->empresa])
            ->andFilterWhere(['like', 'nacional', $this->nacional]);

        return $dataProvider;
    }
}
