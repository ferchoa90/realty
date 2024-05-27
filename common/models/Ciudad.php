<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ciudad".
 *
 * @property int $id
 * @property string|null $nombre
 * @property int $idprovincia
 * @property int $isDeleted
 * @property int $usuariocreacion
 * @property string|null $fechacreacion
 * @property int|null $usuarioactualizacion
 * @property string|null $fechaact
 * @property string $estatus
 *
 * @property Provincia $idprovincia0
 * @property User $usuariocreacion0
 */
class Ciudad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciudad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idprovincia', 'usuariocreacion'], 'required'],
            [['idprovincia', 'isDeleted', 'usuariocreacion', 'usuarioactualizacion'], 'integer'],
            [['fechacreacion', 'fechaact'], 'safe'],
            [['estatus'], 'string'],
            [['nombre'], 'string', 'max' => 100],
            [['usuariocreacion'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['usuariocreacion' => 'id']],
            [['idprovincia'], 'exist', 'skipOnError' => true, 'targetClass' => Provincia::class, 'targetAttribute' => ['idprovincia' => 'id']],
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
            'idprovincia' => 'Idprovincia',
            'isDeleted' => 'Is Deleted',
            'usuariocreacion' => 'Usuariocreacion',
            'fechacreacion' => 'Fechacreacion',
            'usuarioactualizacion' => 'Usuarioactualizacion',
            'fechaact' => 'Fechaact',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * Gets query for [[Idprovincia0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdprovincia0()
    {
        return $this->hasOne(Provincia::class, ['id' => 'idprovincia']);
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
