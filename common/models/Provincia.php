<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "provincia".
 *
 * @property int $id
 * @property string|null $nombre
 * @property int $idpais
 * @property int $isDeleted
 * @property int $usuariocreacion
 * @property string|null $fechacreacion
 * @property int|null $usuarioactualizacion
 * @property string|null $fechaact
 * @property string $estatus
 *
 * @property Ciudad[] $ciudads
 * @property Programas $idpais0
 * @property User $usuariocreacion0
 */
class Provincia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provincia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpais', 'usuariocreacion'], 'required'],
            [['idpais', 'isDeleted', 'usuariocreacion', 'usuarioactualizacion'], 'integer'],
            [['fechacreacion', 'fechaact'], 'safe'],
            [['estatus'], 'string'],
            [['nombre'], 'string', 'max' => 100],
            [['usuariocreacion'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['usuariocreacion' => 'id']],
            [['idpais'], 'exist', 'skipOnError' => true, 'targetClass' => Programas::class, 'targetAttribute' => ['idpais' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'idpais' => 'Idpais',
            'isDeleted' => 'Is Deleted',
            'usuariocreacion' => 'Usuariocreacion',
            'fechacreacion' => 'Fechacreacion',
            'usuarioactualizacion' => 'Usuarioactualizacion',
            'fechaact' => 'Fechaact',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * Gets query for [[Ciudads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCiudads()
    {
        return $this->hasMany(Ciudad::class, ['idprovincia' => 'id']);
    }

    /**
     * Gets query for [[Idpais0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdpais0()
    {
        return $this->hasOne(Programas::class, ['id' => 'idpais']);
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
