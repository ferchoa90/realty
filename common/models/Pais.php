<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pais".
 *
 * @property int $id
 * @property string|null $nombre
 * @property int|null $codigoarea
 * @property int $isDeleted
 * @property int $usuariocreacion
 * @property string|null $fechacreacion
 * @property int|null $usuarioactualizacion
 * @property string|null $fechaact
 * @property string $estatus
 *
 * @property User $usuariocreacion0
 */
class Pais extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pais';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigoarea', 'isDeleted', 'usuariocreacion', 'usuarioactualizacion'], 'integer'],
            [['usuariocreacion'], 'required'],
            [['fechacreacion', 'fechaact'], 'safe'],
            [['estatus'], 'string'],
            [['nombre'], 'string', 'max' => 100],
            [['usuariocreacion'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['usuariocreacion' => 'id']],
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
            'codigoarea' => 'Codigoarea',
            'isDeleted' => 'Is Deleted',
            'usuariocreacion' => 'Usuariocreacion',
            'fechacreacion' => 'Fechacreacion',
            'usuarioactualizacion' => 'Usuarioactualizacion',
            'fechaact' => 'Fechaact',
            'estatus' => 'Estatus',
        ];
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
