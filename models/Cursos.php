<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cursos".
 *
 * @property integer $id_curso
 * @property string $nombre_curso
 * @property string $localidad
 * @property string $costo
 * @property string $trabajador
 * @property string $desde
 * @property string $hasta
 * @property string $horas
 * @property string $empresa
 * @property string $nacional
 */
class Cursos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cursos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_curso', 'localidad', 'costo', 'trabajador', 'desde', 'hasta', 'horas', 'empresa', 'nacional'], 'required'],
            [['desde', 'hasta'], 'safe'],
            [['nombre_curso', 'empresa'], 'string', 'max' => 200],
            [['localidad', 'costo', 'trabajador', 'horas', 'nacional'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_curso' => 'Id Curso',
            'nombre_curso' => 'Nombre Curso',
            'localidad' => 'Localidad',
            'costo' => 'Costo',
            'trabajador' => 'Trabajador',
            'desde' => 'Desde',
            'hasta' => 'Hasta',
            'horas' => 'Horas',
            'empresa' => 'Empresa',
            'nacional' => 'Nacional',
        ];
    }
}
