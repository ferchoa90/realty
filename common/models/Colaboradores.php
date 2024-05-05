<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "colaboradores".
 *
 * @property int $id
 * @property string $nombres
 * @property string $titulo
 * @property string $programa
 * @property string|null $contenido
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
class Colaboradores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'colaboradores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombres', 'titulo', 'programa'], 'required'],
            [['contenido', 'estatus'], 'string'],
            [['orden', 'isDeleted', 'usuariocreacion'], 'integer'],
            [['fechacreacion'], 'safe'],
            [['nombres', 'programa'], 'string', 'max' => 200],
            [['titulo', 'mail'], 'string', 'max' => 100],
            [['imagen'], 'string', 'max' => 150],
            [['telefono'], 'string', 'max' => 20],
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
            'nombres' => 'Nombres',
            'titulo' => 'Titulo',
            'programa' => 'Programa',
            'contenido' => 'Contenido',
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
        return $this->hasOne(User::className(), ['id' => 'usuariocreacion']);
    }
}
