<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use common\models\Menu;
//use backend\models\Menuadmin;

//AppAsset::register($this);

//$productos= Productos::find()->where(['isDeleted' => '0',"estado"=>"ACTIVO"])->orderBy(["orden" => SORT_ASC])->limit(6)->all();
$menus= Menu::find()->where(["estatus"=>"ACTIVO","idparent"=>0,"isDeleted"=>0])->orderby(['orden'=>SORT_ASC])->all();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Google Fonts -->
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="<?= URL::base() ?>/css/bootstrap.min.css" rel="stylesheet">



    <!-- Libs CSS -->
    <link href="<?= URL::base() ?>/css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL::base() ?>/vendor/owl-carousel/owl.carousel.css" media="screen">
    <link rel="stylesheet" href="<?= URL::base() ?>/vendor/owl-carousel/owl.theme.css" media="screen">
    <link rel="stylesheet" href="<?= URL::base() ?>/vendor/flexslider/flexslider.css" media="screen">
    <link rel="stylesheet" href="<?= URL::base() ?>/vendor/chosen/chosen.css" media="screen">

    <!-- Theme -->
    <link href="<?= URL::base() ?>/css/theme-animate.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/theme-elements.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/theme-blog.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/theme-map.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/theme.css" rel="stylesheet">

    <link href="<?= URL::base() ?>/css/style.css" rel="stylesheet">

    <!-- Theme Responsive-->
    <link href="<?= URL::base() ?>/css/theme-responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <?php $this->head() ?>
</head>

<body>
<div id="page">
    <header>
        <div id="top">
            <div class="container">
                <p class="pull-left text-note hidden-xs"><i class="fa fa-phone"></i> Más información? (09) 82840034</p>
                <ul class="nav nav-pills nav-top navbar-right">
                    <li class="login"><a href="javascript:void(0);"><i class="fa fa-user"></i></a></li>
                    <li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-default pgl-navbar-main" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="logo" href="index.html"><img src="<?= URL::base() ?>/images/general/Logo-Realty-Ecuador-blanco.png" alt="Flatize"></a> </div>

                <div class="navbar-collapse collapse width">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown active"><a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">INICIO</a>
                        </li>
                        <li ><a href="about-us.html">QUIENES SOMOS</a>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">AGENTES</a>
                            <ul class="dropdown-menu">
                                <li><a href="ouragents.html">Realtys</a></li>
                                <li><a href="agentprofile.html">Perfiles de Agentes</a></li>
                            </ul>
                        </li>

                        <li ><a href="#" >Preguntas</a>

                        </li>
                        <li><a href="contact.html">Contáctenos</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </header>

</div>

<div id="page">
        <?php $this->beginBody() ?>
        <div>
            <?=$content ?>
        </div>

        <?php $this->endBody() ?>

    <!-- Begin footer -->
    <footer class="pgl-footer">
        <div class="container">
            <div class="pgl-upper-foot">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Realty Ecuador</h2>
                        <p>Nuestros datos de contacto son los siguientes: </p>
                        <address>
                            <i class="fa fa-map-marker"></i> Oficina : (593) 02 123 4567<br>
                            <i class="fa fa-phone"></i> Móvil : 09 5555555<br>
                            <i class="fa fa-envelope-o"></i> Correo : <a href="mailto:ventas@realtyecuador.com">ventas@realtyecuador.com</a>
                        </address>
                    </div>
                    <div class="col-sm-2">
                        <h2>MENÚ</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Quienes Somos</a></li>
                            <li><a href="#">Agentes</a></li>
                            <li><a href="#">Preguntas</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h2>&nbsp;</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">Contáctenos</a></li>
                            <li><a href="#">Politicas</a></li>
                            <li><a href="#">Ley de protección de datos</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h2>Suscribirse</h2>
                        <p>Suscríbete a nuestros boletines electrónicos.</p>
                        <form class="form-inline pgl-form-newsletter" role="form">
                            <div class="form-group">
                                <label class="sr-only w-100" for="exampleInputEmail2">Correo electrónico</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Ingrese su correo electrónico">
                            </div>
                            <button type="submit" class="btn btn-submit"><i class="icons icon-submit"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="pgl-copyrights">
                <p>Copyright © 2024 Realty Ecuador. Desarrollado y diseñado por <a href="http://acepsistemas.com/">Acepsistemas</a></p>
            </div>
        </div>
    </footer>
    <!-- End footer -->

</div>

</body>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= URL::base() ?>/vendor/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= URL::base() ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= URL::base() ?>/vendor/owl-carousel/owl.carousel.js"></script>
<script src="<?= URL::base() ?>/vendor/flexslider/jquery.flexslider-min.js"></script>
<script src="<?= URL::base() ?>/vendor/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
<script src="<?= URL::base() ?>/vendor/gmap/gmap3.infobox.min.js"></script>
<script src="<?= URL::base() ?>/vendor/masonry/imagesloaded.pkgd.min.js"></script>
<script src="<?= URL::base() ?>/vendor/masonry/masonry.pkgd.min.js"></script>

<!-- Theme Initializer -->
<script src="<?= URL::base() ?>/js/theme.plugins.js"></script>
<script src="<?= URL::base() ?>/js/theme.js"></script>
</html>

<?php $this->endPage() ?>
<script>
if (getCookie('sesion')){
  console.log("Cookie Detectada "+getCookie('sesion'));
}else{
  var d = new Date()
  var cookie= setCookie("sesion",d.getDate()+d.getTime()+'-'+Math.floor(Math.random() * 100000000),"1");
  console.log("Cookie Nueva "+getCookie('sesion'));
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

}
</script>