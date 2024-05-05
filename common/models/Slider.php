<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $titulo
 * @property string|null $texto
 * @property string $image
 * @property string|null $link
 * @property int $orden
 * @property string|null $alt
 * @property int $isDeleted
 * @property string $fechacreacion
 * @property int $usuariocreacion
 * @property string|null $fechaact
 * @property int|null $usuarioact
 * @property string $estatus
 *
 * @property User $usuariocreacion0
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'image', 'orden', 'isDeleted'], 'required'],
            [['texto', 'estatus'], 'string'],
            [['orden', 'isDeleted', 'usuariocreacion', 'usuarioact'], 'integer'],
            [['fechacreacion', 'fechaact'], 'safe'],
            [['titulo'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 150],
            [['link'], 'string', 'max' => 300],
            [['alt'], 'string', 'max' => 200],
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
            'texto' => 'Texto',
            'image' => 'Image',
            'link' => 'Link',
            'orden' => 'Orden',
            'alt' => 'Alt',
            'isDeleted' => 'Is Deleted',
            'fechacreacion' => 'Fechacreacion',
            'usuariocreacion' => 'Usuariocreacion',
            'fechaact' => 'Fechaact',
            'usuarioact' => 'Usuarioact',
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
