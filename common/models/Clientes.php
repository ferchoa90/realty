<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string $cedula
 * @property string $razonsocial
 * @property string $apellidos
 * @property string $direccion
 * @property string $telefono
 * @property string $correo
 * @property string $tipo
 * @property int $usuariocreacion
 * @property string $fechacreacion
 * @property string $estatus
 *
 * @property User $usuariocreacion0
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cedula', 'razonsocial', 'correo'], 'required', 'message' => 'Este campo es obligatorio'],
            [['tipo', 'estatus'], 'string'],
            [['usuariocreacion'], 'integer'],
            [['cedula'], 'unique','message' => 'Este registro ya existe'],
            [['fechacreacion'], 'safe'],
            [['cedula'], 'string', 'max' => 13],
            [['razonsocial', 'apellidos'], 'string', 'max' => 150],
            [['direccion'], 'string', 'max' => 250],
            [['telefono'], 'string', 'max' => 20],
            [['correo'], 'string', 'max' => 80],
            [['usuariocreacion'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['usuariocreacion' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cedula' => 'Cedula',
            'razonsocial' => 'Razonsocial',
            'apellidos' => 'Apellidos',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'tipo' => 'Tipo',
            'usuariocreacion' => 'Usuariocreacion',
            'fechacreacion' => 'Fechacreacion',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariocreacion0()
    {
        return $this->hasOne(User::className(), ['id' => 'usuariocreacion']);
    }

    public function getVendedor()
    {
        return $this->hasOne(Vendedores::className(), ['id' => 'idvendedor']);
    }

    public function getTipoidentificacion()
    {
        return $this->hasOne(Tipoidentificacion::className(), ['id' => 'tipoident']);
    }

    
    public function getUsuarioactualizacion0()
    {
        $response=$this->hasOne(User::className(), ['id' => 'usuarioact']);
        if (!$this->usuarioact){ $response=(object) $array; $response->username="No registra";}
        return $response;
    }
}
