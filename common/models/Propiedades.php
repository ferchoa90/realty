<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "propiedades".
 *
 * @property int $id
 * @property string $titulo
 * @property string|null $imagen
 * @property resource|null $descripcion
 * @property string|null $direccion
 * @property int $pais_id
 * @property int $provincia_id
 * @property int $ciudad_id
 * @property string|null $lat
 * @property string|null $lng
 * @property int $usuariocreacion
 * @property string $fechacreacion
 * @property int|null $usuarioact
 * @property string|null $fechaact
 * @property int $destacado
 * @property int $isDeleted
 * @property string $estatuspropiedad
 * @property string $estatus
 *
 * @property Ciudad $ciudad
 * @property Pais $pais
 * @property Provincia $provincia
 * @property Provincia[] $provincias
 * @property User $usuariocreacion0
 */
class Propiedades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propiedades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'pais_id', 'ciudad_id', 'destacado'], 'required'],
            [['titulo', 'descripcion', 'estatuspropiedad', 'estatus'], 'string'],
            [['pais_id', 'provincia_id', 'ciudad_id', 'usuariocreacion', 'usuarioact', 'destacado', 'isDeleted'], 'integer'],
            [['fechacreacion', 'fechaact'], 'safe'],
            [['imagen'], 'string', 'max' => 255],
            [['direccion'], 'string', 'max' => 50],
            [['lat', 'lng'], 'string', 'max' => 10],
            [['usuariocreacion'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['usuariocreacion' => 'id']],
            [['pais_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::class, 'targetAttribute' => ['pais_id' => 'id']],
            [['provincia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Provincia::class, 'targetAttribute' => ['provincia_id' => 'id']],
            [['ciudad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::class, 'targetAttribute' => ['ciudad_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'imagen' => 'Imagen',
            'descripcion' => 'Descripcion',
            'direccion' => 'Direccion',
            'pais_id' => 'Pais ID',
            'provincia_id' => 'Provincia ID',
            'ciudad_id' => 'Ciudad ID',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'usuariocreacion' => 'Usuariocreacion',
            'fechacreacion' => 'Fechacreacion',
            'usuarioact' => 'Usuarioact',
            'fechaact' => 'Fechaact',
            'destacado' => 'Destacado',
            'isDeleted' => 'Is Deleted',
            'estatuspropiedad' => 'Estatuspropiedad',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * Gets query for [[Ciudad]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCiudad()
    {
        return $this->hasOne(Ciudad::class, ['id' => 'ciudad_id']);
    }

    /**
     * Gets query for [[Pais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPais()
    {
        return $this->hasOne(Pais::class, ['id' => 'pais_id']);
    }

    /**
     * Gets query for [[Provincia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvincia()
    {
        return $this->hasOne(Provincia::class, ['id' => 'provincia_id']);
    }

    /**
     * Gets query for [[Provincias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvincias()
    {
        return $this->hasMany(Provincia::class, ['idpais' => 'id']);
    }

    /**
     * Gets query for [[Usuariocreacion0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariocreacion0()
    {
        return $this->hasOne(User::class, ['id' => 'usuariocreacion']);
    }
}
