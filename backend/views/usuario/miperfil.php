<?php

<<<<<<< HEAD
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
=======
use backend\components\Objetos;
use backend\components\Bloques;
use backend\components\Botones;
use backend\components\Navs;
use backend\components\Iconos;
use yii\helpers\Html;
use yii\helpers\Url;
use Yii;
use yii\web\View;
use backend\assets\AppAsset;
use yii\widgets\ActiveForm;
>>>>>>> main

/* @var $this yii\web\View */
/* @var $model app\models\TriviaHead */

$this->title = 'Mi perfil';
$this->params['breadcrumbs'][] = ['label' => 'Mi perfil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


<<<<<<< HEAD
?>
    <input type="hidden" id="action" value="create">
    <input type="hidden" id="id" value="0">
    <div class="trivia-head-create">
        <div class="box-body">
            <a class="btn btn-success" id="btn_save"><i class="fa fa-save"></i></a>
        </div>
        <br>
        <div class="box-body" id="messages" style="display:none;"></div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Configuración de Usuario</h3>
                        </div>
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-control select2" style="width: 100%;" id="estado">
                                            <option selected="selected" value="ACTIVE">Activo</option>
                                            <option value="INACTIVE">Inactivo</option>
                                        </select>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Perfil de Usuario</label>
                                        <select class="form-control select2" style="width: 100%;" id="tipo">
                                                <option selected="selected" value="Administrador">Administrador</option>
                                            <option value="Usuario">Usuario</option>
                                        </select>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col -->
                                
                            </div><!-- /.row -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Usuario</h3>
                        </div>
                       
                        <div class="card-body">
                            
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
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Datos</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Nombres:</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nombres" id="nombres" value="<?= Yii::$app->user->identity->nombres ?>">
                                        </div>
                                    </div><!-- /.form group -->
                                </div><!-- /.box-body -->
                                <div class="col-md-6 col-xs-6">
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Apellidos:</label>
 
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Apellidos" value="<?= Yii::$app->user->identity->apellidos ?>" id="apellidos">
                                        </div>
                                    </div><!-- /.form group -->
                                </div><!-- /.box-body -->
                                <div class="col-md-6 col-xs-6">
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Nombre de Usuario:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username"  id="nusuario"  value="<?= Yii::$app->user->identity->username ?>">
                                        </div>

                                        
                                        
                                    </div><!-- /.form group -->
                                </div><!-- /.box-body -->
                                <div class="col-md-6 col-xs-6">
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Contraseña:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="contraseña" id="contrasenia"  value="<?= Yii::$app->user->identity->password_hash ?>">
                                        </div>
   
                                    </div><!-- /.form group -->
                                </div><!-- /.box-body -->
                                <div class="col-md-6 col-xs-6">
                                      
                                            <!-- Date and time range -->
                                            <div class="form-group">
                                                <label>Correo:</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control" placeholder="Email" id="correo"  value="<?= Yii::$app->user->identity->email ?>">
                                                </div>
                                                
                                            </div><!-- /.form group -->
                             
                        </div>
                     </div>
                    </div><!-- /.box -->
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
        </div>
        <!--<div class="box-body">
            <a class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Guardar</a>
        </div>-->
    </div>

<?php
$this->registerCssFile(URL::base() . "/js/plugins/daterangepicker/daterangepicker-bs3.css", [
   // 'depends' => [\yii\bootstrap\BootstrapPluginAsset::className()]
]);
$this->registerJsFile(URL::base() . "/js/plugins/moment.min.js", [
   // 'depends' => [\yii\bootstrap\BootstrapPluginAsset::className()]
]);
$this->registerJsFile(URL::base() . "/js/plugins/daterangepicker/daterangepicker.js", [
   // 'depends' => [\yii\bootstrap\BootstrapPluginAsset::className()]
]);
$this->registerJsFile(URL::base() . "/js/class/triviaCreate.js", [
   // 'depends' => [\yii\bootstrap\BootstrapPluginAsset::className()]
]);
=======
$urlpost='formusuario';

$objeto= new Objetos;
$nav= new Navs;
$div= new Bloques;

$this->title = "Mi perfil";
$botones= new Botones;


?>


    <?php


 $contenido=$objeto->getObjetosArray(
    array(
        array('tipo'=>'input','subtipo'=>'cajatexto', 'nombre'=>'nombres', 'id'=>'nombres', 'valor'=>$model->nombres, 'onchange'=>'', 'clase'=>'', 'style'=>'', 'icono'=>'lapiz','boxbody'=>false,'etiqueta'=>'Nombre: ','leyenda'=>'Nombre del usuario ', 'col'=>'col-12 col-md-6', 'adicional'=>''),
        array('tipo'=>'input','subtipo'=>'cajatexto', 'nombre'=>'apellidos', 'id'=>'apellidos', 'valor'=>$model->apellidos, 'onchange'=>'', 'clase'=>'', 'style'=>'', 'icono'=>'lapiz','boxbody'=>false,'etiqueta'=>'Apellido: ','leyenda'=>'Apellido del usuario ', 'col'=>'col-12 col-md-6', 'adicional'=>''),
        array('tipo'=>'input','subtipo'=>'cajatexto', 'nombre'=>'nombreusuario', 'id'=>'nombreusuario', 'valor'=>$model->username, 'onchange'=>'', 'clase'=>'', 'style'=>'', 'icono'=>'arroba','boxbody'=>false,'etiqueta'=>'Nombre de usuario: ','leyenda'=>'Nombre de usuario ', 'col'=>'col-12 col-md-6', 'adicional'=>''),
        array('tipo'=>'input','subtipo'=>'clave', 'nombre'=>'clave', 'id'=>'clave', 'valor'=>'', 'onchange'=>'', 'clase'=>'', 'style'=>'', 'icono'=>'llave','boxbody'=>false,'etiqueta'=>'Contraseña: ','leyenda'=>'Contraseña ', 'col'=>'col-12 col-md-6', 'adicional'=>''),
        array('tipo'=>'select','subtipo'=>'', 'nombre'=>'rol', 'id'=>'rol', 'valor'=>$roles,'valordefecto'=>$model->idrol, 'onchange'=>'', 'clase'=>'', 'style'=>'', 'icono'=>'lapiz','boxbody'=>false,'etiqueta'=>'Tipo: ', 'col'=>'col-6 col-md-6', 'adicional'=>' disabled '),
        array('tipo'=>'input','subtipo'=>'cajatexto', 'nombre'=>'cedula', 'id'=>'cedula', 'valor'=>$model->cedula, 'onchange'=>'', 'clase'=>'', 'style'=>'', 'icono'=>'tarjeta','boxbody'=>false,'etiqueta'=>'Cédula: ','leyenda'=>'Cédula de usuario ', 'col'=>'col-12 col-md-6', 'adicional'=>''),
        array('tipo'=>'input','subtipo'=>'cajatexto', 'nombre'=>'correo', 'id'=>'correo', 'valor'=>$model->email, 'onchange'=>'', 'clase'=>'', 'style'=>'', 'icono'=>'carta','boxbody'=>false,'etiqueta'=>'Correo: ','leyenda'=>'Correo de usuario ', 'col'=>'col-12 col-md-6', 'adicional'=>''),
       // array('tipo'=>'separador','clase'=>'', 'estilo'=>'', 'color'=>''),
    ),true
);

 $botonC=$botones->getBotongridArray(
    array(
        array('tipo'=>'separador','clase'=>'', 'estilo'=>'', 'color'=>''),
        array('tipo'=>'link','nombre'=>'guardar', 'id' => 'guardar', 'titulo'=>'&nbsp;Guardar', 'link'=>'', 'onclick'=>'' , 'clase'=>'', 'style'=>'', 'col'=>'', 'tipocolor'=>'verde', 'icono'=>'guardar','tamanio'=>'pequeño',  'adicional'=>''),
        array('tipo'=>'link','nombre'=>'regresar', 'id' => 'guardar', 'titulo'=>'&nbsp;Regresar', 'link'=>'', 'onclick'=>'history.back()' , 'clase'=>'', 'style'=>'', 'col'=>'', 'tipocolor'=>'azul', 'icono'=>'regresar','tamanio'=>'pequeño',  'adicional'=>'')

));


 $contenido2='<div style="line-height:25px;"><b>Estatus:</b>&nbsp;&nbsp;&nbsp;<span class="badge badge-success"><i class="fa fa-circle"></i>&nbsp; ACTIVO</span><br>';
 $contenido2.='<hr style="color: #0056b2;">';
 $contenido2.='</div>';
?>

<?php $form = ActiveForm::begin(['id'=>'frmDatos']); ?>
<?php
 echo $div->getBloqueArray(
    array(
        array('tipo'=>'bloquediv','nombre'=>'rr','id'=>'ee','titulo'=>'Mi perfil','clase'=>'col-md-9 col-xs-12 ','style'=>'','col'=>'','tipocolor'=>'','adicional'=>'','contenido'=>$contenido.$contenidotab.$botonC),
        array('tipo'=>'bloquediv','nombre'=>'rr','id'=>'ee','titulo'=>'Información','clase'=>'col-md-3 col-xs-12 ','style'=>'','col'=>'','tipocolor'=>'gris','adicional'=>'','contenido'=>$contenido2),
    )
);
?>
<?php ActiveForm::end(); ?>

<script>
       $(document).ready(function(){
        //$("#frmDatos").find(':input').each(function() {
        // var elemento= this;
         //console.log("elemento.id="+ elemento.id + ", elemento.value=" + elemento.value);
        //});

        $("#guardar").on('click', function() {
            if (validardatos()==true){
                var form    = $('#frmDatos'),
                nombre   = $('#nombrerol').val(),
                descripcion   = $('#descripcion').val();
                $.ajax({
                    url: '<?= $urlpost ?>',
                    async: 'false',
                    cache: 'false',
                    type: 'POST',
                    data: form.serialize(),
                    success: function(response){
                    data=JSON.parse(response);
                    console.log(response);
                    console.log(data.success);
                    if ( data.success == true ) {
                        // ============================ Not here, this would be too late
                        notificacion(data.mensaje,data.tipo);
                        //$this.data().isSubmitted = true;
                        $('#frmDatos')[0].reset();
                        return true;
                    }else{
                        notificacion(data.mensaje,data.tipo);
                    }
                }
            });
            }else{

                notificacion("Faltan campos obligatorios","error");
                //e.preventDefault(); // <=================== Here
                return false;
            }
  });

        $('#frmDatos').on('submit', function(e){
            e.preventDefault(); // <=================== Here
            $this = $(this);
            if ($this.data().isSubmitted) {
                return false;
            }


        });


       });

       function validardatos()
       {
           console.log("validardatos");
            if ($('#nombres').val()!=""){
                if ($('#apellidos').val()!=""){
                    if ($('#nombreusuario').val()!=""){
                        if ($('#cedula').val()!=""){
                            if ($('#rol').attr('selected', 'selected').val()!="-1"){
                                if ($('#correo').val()!=""){
                                    if ($('#clave').val()!=""){
                                        return true;
                                    }else{
                                        $('#clave').focus();
                                        return false;
                                    }
                                }else{
                                    $('#correo').focus();
                                    return false;
                                }
                            }else{
                                $('#rol').focus();
                                return false;
                            }
                        }else{
                            $('#cedula').focus();
                            return false;
                        }
                    }else{
                        $('#nombreusuario').focus();
                        return false;
                    }

                }else{
                    $('#apellidos').focus();
                    return false;
                }
            }else{
                $('#nombres').focus();
                return false;
            }
       }
  </script>
>>>>>>> main
