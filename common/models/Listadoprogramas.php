<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "listadoprogramas".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 * @property string $fechacreacion
 * @property int $usuariocreacion
 * @property string|null $fechaact
 * @property int|null $usuarioact
 * @property int $isDeleted
 * @property string $estatus
 *
 * @property Programas[] $programas
 * @property User $usuariocreacion0
 */
class Listadoprogramas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listadoprogramas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['fechacreacion', 'fechaact'], 'safe'],
            [['usuariocreacion', 'usuarioact', 'isDeleted'], 'integer'],
            [['estatus'], 'string'],
            [['nombre', 'descripcion'], 'string', 'max' => 255],
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
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'fechacreacion' => 'Fechacreacion',
            'usuariocreacion' => 'Usuariocreacion',
            'fechaact' => 'Fechaact',
            'usuarioact' => 'Usuarioact',
            'isDeleted' => 'Is Deleted',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * Gets query for [[Programas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProgramas()
    {
        return $this->hasMany(Programas::className(), ['idprograma' => 'id']);
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

    public function getNumeroprogramas()
    {
        $programas= Programas::find()->where(["idprograma"=>$this->id])->count();
        return $programas;
    }
}
