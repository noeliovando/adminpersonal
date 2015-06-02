<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trabajador".
 *
 * @property string $indicador
 * @property string $cedula
 * @property string $telefono
 * @property string $extension
 * @property string $supervisor
 * @property string $nombre
 * @property string $apellido
 * @property string $pass
 * @property string $division
 * @property string $proceso
 * @property string $rol
 */
class Trabajador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trabajador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['indicador', 'cedula', 'telefono', 'extension', 'supervisor', 'nombre', 'apellido', 'pass', 'division', 'proceso', 'rol'], 'required'],
            [['indicador', 'cedula', 'telefono', 'extension', 'supervisor', 'nombre', 'apellido', 'pass', 'division', 'proceso'], 'string', 'max' => 50],
            [['rol'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'indicador' => 'Indicador',
            'cedula' => 'Cedula',
            'telefono' => 'Telefono',
            'extension' => 'Extension',
            'supervisor' => 'Supervisor',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'pass' => 'Pass',
            'division' => 'Division',
            'proceso' => 'Proceso',
            'rol' => 'Rol',
        ];
    }
}
