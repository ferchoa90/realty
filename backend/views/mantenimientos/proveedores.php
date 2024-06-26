<?php
use backend\components\Objetos;
use backend\components\Botones;
use backend\components\Bloques;
use backend\components\Grid;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use backend\assets\AppAsset;
/* @var $this yii\web\View */

$this->title = "Proveedores";
$this->params['breadcrumbs'][] = $this->title;

$grid= new Grid;
$botones= new Botones;

$columnas= array(
    array('columna'=>'#', 'datareg' => 'num', 'clase'=>'', 'estilo'=>'', 'ancho'=>''),
    array('columna'=>'Identificacion', 'datareg' => 'identificacion', 'clase'=>'', 'estilo'=>'', 'ancho'=>''),
    array('columna'=>'Nombre', 'datareg' => 'nombre', 'clase'=>'', 'estilo'=>'', 'ancho'=>''),
    array('columna'=>'Contacto', 'datareg' => 'contacto', 'clase'=>'', 'estilo'=>'', 'ancho'=>''),
    array('columna'=>'Dirección', 'datareg' => 'direccion', 'clase'=>'', 'estilo'=>'', 'ancho'=>''),
    array('columna'=>'Teléfono', 'datareg' => 'telefono', 'clase'=>'', 'estilo'=>'', 'ancho'=>''),
    array('columna'=>'Correo', 'datareg' => 'correo', 'clase'=>'', 'estilo'=>'', 'ancho'=>''),
    array('columna'=>'Credito', 'datareg' => 'credito', 'clase'=>'', 'estilo'=>'', 'ancho'=>''),
    array('columna'=>'Fecha C.', 'datareg' => 'fechacreacion', 'clase'=>'', 'estilo'=>'', 'ancho'=>'')  ,
    array('columna'=>'Estatus', 'datareg' => 'estatus', 'clase'=>'', 'estilo'=>'', 'ancho'=>'')  ,
    array('columna'=>'Acciones', 'datareg' => 'acciones', 'clase'=>'', 'estilo'=>'', 'ancho'=>'')  ,
);

echo $grid->getGrid(
        array(
            array('tipo'=>'datagrid','nombre'=>'table','id'=>'table','columnas'=>$columnas,'clase'=>'','style'=>'','col'=>'','adicional'=>'','url'=>'proveedoresreg')
        )
);

?>
