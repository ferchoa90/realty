<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $extracto
 * @property string $contenido
 * @property int|null $orden
 * @property string|null $imagen
 * @property string|null $imagen2
 * @property string|null $imagen3
 * @property string|null $video
 * @property int $usuariocreacion
 * @property string $fechavisual
 * @property string $fechacreacion
 * @property string $estatus
 *
 * @property User $usuariocreacion0
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'extracto', 'contenido', 'usuariocreacion', 'fechavisual'], 'required'],
            [['contenido', 'estatus'], 'string'],
            [['orden', 'usuariocreacion'], 'integer'],
            [['fechavisual', 'fechacreacion'], 'safe'],
            [['titulo'], 'string', 'max' => 70],
            [['extracto', 'imagen', 'imagen2', 'imagen3', 'video'], 'string', 'max' => 200],
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
            'extracto' => 'Extracto',
            'contenido' => 'Contenido',
            'orden' => 'Orden',
            'imagen' => 'Imagen',
            'imagen2' => 'Imagen2',
            'imagen3' => 'Imagen3',
            'video' => 'Video',
            'usuariocreacion' => 'Usuariocreacion',
            'fechavisual' => 'Fechavisual',
            'fechacreacion' => 'Fechacreacion',
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
