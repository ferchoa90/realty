<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $menu
 * @property int $idparent
 * @property string $link
 * @property int|null $orden
 * @property string $estatus
 * @property int $usuariocreacion
 * @property string $fechacreacion
 *
 * @property User $usuariocreacion0
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu', 'usuariocreacion'], 'required'],
            [['idparent', 'orden', 'usuariocreacion'], 'integer'],
            [['estatus'], 'string'],
            [['fechacreacion'], 'safe'],
            [['menu'], 'string', 'max' => 50],
            [['link'], 'string', 'max' => 400],
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
            'menu' => 'Menu',
            'idparent' => 'Idparent',
            'link' => 'Link',
            'orden' => 'Orden',
            'estatus' => 'Estatus',
            'usuariocreacion' => 'Usuariocreacion',
            'fechacreacion' => 'Fechacreacion',
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
