<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clientesfelices".
 *
 * @property int $id
 * @property string $nombres
 * @property string $descripcion
 * @property string|null $imagen
 * @property string|null $telefono
 * @property string|null $mail
 * @property int|null $orden
 * @property int $isDeleted
 * @property string $fechacreacion
 * @property int $usuariocreacion
 * @property string $estatus
 *
 * @property User $usuariocreacion0
 */
class Clientesfelices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientesfelices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombres', 'descripcion'], 'required'],
            [['orden', 'isDeleted', 'usuariocreacion'], 'integer'],
            [['fechacreacion'], 'safe'],
            [['estatus'], 'string'],
            [['nombres'], 'string', 'max' => 200],
            [['descripcion', 'mail'], 'string', 'max' => 100],
            [['imagen'], 'string', 'max' => 150],
            [['telefono'], 'string', 'max' => 20],
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
            'nombres' => 'Nombres',
            'descripcion' => 'Descripcion',
            'imagen' => 'Imagen',
            'telefono' => 'Telefono',
            'mail' => 'Mail',
            'orden' => 'Orden',
            'isDeleted' => 'Is Deleted',
            'fechacreacion' => 'Fechacreacion',
            'usuariocreacion' => 'Usuariocreacion',
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
