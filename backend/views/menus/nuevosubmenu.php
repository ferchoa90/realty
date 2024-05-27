<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use backend\models\Menuprincipal;

/* @var $this yii\web\View */
/* @var $model app\models\TriviaHead */

$this->title = 'Crear Submenú';
$this->params['breadcrumbs'][] = ['label' => 'Administración de Menús', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$menuprincipal = Menuprincipal::find()->where(['isDeleted' => '0'])->orderBy(["fechacreacion" => SORT_DESC])->all();
?>
    <input type="hidden" id="action" value="nuevosubmenu">
    <input type="hidden" id="id" value="0">
    <div class="trivia-head-create">
        <div class="box-body">
            <a class="btn btn-success" id="btn_save"><i class="fa fa-save"></i>&nbsp; Guardar</a>
        </div>
        <div class="box-body" id="messages" style="display:none;"></div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Configuración de Menú</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-control select2" style="width: 100%;" id="estado">
                                            <option selected="selected" value="ACTIVO">Activo</option>
                                            <option value="INACTIVO">Inactivo</option>
                                        </select>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Menu principal</label>
                                        <select class="form-control select2" style="width: 100%;" id="menuprincipal">
                                            <?php foreach ($menuprincipal as $key => $value) { ?>
                                                <option value="<?=$value->id ?>"><?=$value->nombre ?></option>
                                            <?php } ?>
                                            
                                            
                                        </select>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->  
                            </div><!-- /.row -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Usuario</h3>
                        </div> 
                        <div class="box-body">
                            
                            <div class="form-group">
                                <label>Creado por: </label>
                                <?= Yii::$app->user->identity->nombres.' '.Yii::$app->user->identity->apellidos ?>
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="box box-primary">
                        <div class="box-body box-int col-md-6 col-xs-6">
                            <!-- Date and time range -->
                            <div class="form-group">
                                <label>Nombre:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="nombre">
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div><!-- /.box-body -->
                        <div class="box-body box-int col-md-6 col-xs-6">
                            <!-- Date and time range -->
                            <div class="form-group">
                                <label>Descripción:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="descripcion">
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div><!-- /.box-body -->
                        <div class="box-body box-int col-md-6 col-xs-6">
                            <!-- Date and time range -->
                            <div class="form-group">
                                <label>Enlace:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-link"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="enlace" value="#">
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div><!-- /.box-body -->
                        <div class="box-body box-int col-md-2 col-xs-2">
                            <!-- Date and time range -->
                            <div class="form-group">
                                <label>Orden:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-reorder"></i>
                                    </div>
                                    <input type="number" class="form-control pull-right" id="orden" value="1">
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div><!-- /.box-body -->

                </div>
                <input type="hidden" id="token" name="_csrf-backend" value="<?= Yii::$app->request->getCsrfToken() ?>">
                </div>
                
            </div>


            <!-- Trivia Detalle -->

            <div class="row" id="opciones" style="display: none;">
                <div class="col-md-12 col-xs-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Opciones de respuesta</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-10 col-xs-8">
                                    <label>Opciones:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                        <input type="text" class="form-control pull-right opcion">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                                <div class="col-md-2 col-xs-4">
                                    <label>Orden:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-list-ol"></i></div>
                                        <input type="text" class="form-control pull-right orden">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-10  col-xs-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                        <input type="text" class="form-control pull-right opcion">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                                <div class="col-md-2  col-xs-4">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-list-ol"></i></div>
                                        <input type="text" class="form-control pull-right orden">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-10 col-xs-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                        <input type="text" class="form-control pull-right opcion">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                                <div class="col-md-2 col-xs-4">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-list-ol"></i></div>
                                        <input type="text" class="form-control pull-right orden">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-10 col-xs-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                        <input type="text" class="form-control pull-right opcion">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                                <div class="col-md-2 col-xs-4">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-list-ol"></i></div>
                                        <input type="text" class="form-control pull-right orden">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </div>
        <!--<div class="box-body">
            <a class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Guardar</a>
        </div>-->
    </div>

<?php
$this->registerCssFile(URL::base() . "/js/plugins/daterangepicker/daterangepicker-bs3.css", [
    'depends' => [\yii\bootstrap\BootstrapPluginAsset::className()]
]);
$this->registerJsFile(URL::base() . "/js/plugins/moment.min.js", [
    'depends' => [\yii\bootstrap\BootstrapPluginAsset::className()]
]);
$this->registerJsFile(URL::base() . "/js/plugins/daterangepicker/daterangepicker.js", [
    'depends' => [\yii\bootstrap\BootstrapPluginAsset::className()]
]);
$this->registerJsFile(URL::base() . "/js/class/menusecundarioNew.js", [
    'depends' => [\yii\bootstrap\BootstrapPluginAsset::className()]
]);
