<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "programas".
 *
 * @property int $id
 * @property string $titulo
 * @property resource|null $descripcion
 * @property string|null $video
 * @property resource|null $contenido
 * @property int $usuariocreacion
 * @property string|null $fechavisual
 * @property string|null $fechacreacion
 * @property int|null $usuarioact
 * @property string|null $fechaact
 * @property int $isDeleted
 * @property string $estatusprograma
 * @property string $estatus
 *
 * @property User $usuariocreacion0
 */
class Programas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['titulo', 'descripcion', 'contenido', 'estatusprograma', 'estatus'], 'string'],
            [['usuariocreacion', 'usuarioact', 'isDeleted'], 'integer'],
            [['fechavisual', 'fechacreacion', 'fechaact'], 'safe'],
            [['video'], 'string', 'max' => 50],
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
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
            'video' => 'Video',
            'contenido' => 'Contenido',
            'usuariocreacion' => 'Usuariocreacion',
            'fechavisual' => 'Fechavisual',
            'fechacreacion' => 'Fechacreacion',
            'usuarioact' => 'Usuarioact',
            'fechaact' => 'Fechaact',
            'isDeleted' => 'Is Deleted',
            'estatusprograma' => 'Estatusprograma',
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

    public function getTipoprograma()
    {
        $tipoPrograma= Listadoprogramas::find()->where(["id"=>$this->idprograma])->one();
        return $tipoPrograma->nombre;
    }

    public function getUsuarioactualizacion0()
    {
        $response=$this->hasOne(User::className(), ['id' => 'usuarioact']);
        if (!$this->usuarioact){ $response=(object) $array; $response->username="No registra";}
        return $response;
    }
}
