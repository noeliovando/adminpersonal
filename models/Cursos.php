<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cursos".
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
        return 'Cursos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_curso', 'nombre_curso', 'localidad', 'costo', 'trabajador', 'desde', 'hasta', 'horas', 'empresa', 'nacional'], 'required'],
            [['id_curso'], 'integer'],
            [['desde', 'hasta'], 'safe'],
            [['nombre_curso', 'localidad', 'costo', 'trabajador', 'empresa', 'nacional'], 'string', 'max' => 50],
            [['horas'], 'string', 'max' => 25],
            [['id_curso'], 'unique']
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
