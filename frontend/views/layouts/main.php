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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <meta name="description" content="Radio Babelatino">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= URL::base() ?>/images/favicon.ico" type="image/x-icon">
    <meta name="author" content="">
    <title>BABELATINO</title>

    <!-- Css Files -->
    <link href="<?= URL::base() ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/flaticon.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/style.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/color.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/color-one.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/color-two.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/slick-slider.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/prettyphoto.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/jplayer.css" rel="stylesheet">
    <link href="<?= URL::base() ?>/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-92085539-1');
    </script>-->
    <?php $this->head() ?>
</head>

<div class="wm-main-wrapper">

    <!--// Header \\-->
    <header id="wm-header" class="wm-header-one">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><a href="/" class="wm-logo"><img style="width: 130px;height: 37px;" src="<?= URL::base() ?>/images/BABELATINO.svg" alt=""></a></div>
                <div class="col-md-9">

                    <!--// Plugin Section \\-->
                    <div class="wm-plugin-section">
                        <form class="wm-search">
                            <i class="flaticon-search"></i>
                            <input type="text" value="Buscar..." onblur="if(this.value == '') { this.value ='Buscar...'; }" onfocus="if(this.value =='Buscar...') { this.value = ''; }">
                            <input type="submit" value="">
                        </form>
                        <div class="wm-right-section">
                            <div class="wm-language">
                                <ul>
                                    <li><a href="#">ES <i class="flaticon-arrows"></i></a></li>

                                </ul>
                            </div>
                            <div class="wm-language" style="padding-left:10px;">
                                <ul>
                                    <li style="padding-left:10px;"><a target="_blank" href="https://www.facebook.com/Radiobabelatino/" class="flaticon-social-1"></a></li>
                                    <li style="padding-left:10px;"><a target="_blank" href="https://twitter.com/JPatriciaSosa" class="flaticon-social-2"></a></li>
                                    <li style="padding-left:10px;"><a target="_blank" href="https://www.instagram.com/jeanneth_sosa/" class="fa fa-instagram"></a></li>
                                    <li style="padding-left:10px;"><a target="_blank" href="https://www.youtube.com/results?search_query=babelatino" class="fa fa-youtube"></a></li>
                                    <li style="padding-left:10px;"><a target="_blank" href="https://www.linkedin.com/in/jeanneth-patricia-sosa-33646618/" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                            <!-- <a href="#" class="wm-cart"><i class="flaticon-tool"></i> <span>0</span></a> -->
                            <div class="wm-cart-box">
                                <h2>3 items in the cart</h2>
                                <ul>
                                    <li id="wmremove1">
                                        <figure><a href="#"><img src="images/extra-images/cartbox-1.jpg" alt=""></a></figure>
                                        <div class="wm-cartbox-text">
                                            <h6><a href="#">1 x Golden Trumpet</a></h6>
                                            <div class="wm-rating"><span class="wm-rating-box" style="width:45%"></span></div>
                                            <small>$32.00</small>
                                            <a href="#" class="wm-close-cart" id="wmbtnremove1"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                    <li id="wmremove2">
                                        <figure><a href="#"><img src="images/extra-images/cartbox-2.jpg" alt=""></a></figure>
                                        <div class="wm-cartbox-text">
                                            <h6><a href="#">2 x Electric Guitar</a></h6>
                                            <div class="wm-rating"><span class="wm-rating-box" style="width:45%"></span></div>
                                            <small>$43.99</small>
                                            <a href="#" class="wm-close-cart" id="wmbtnremove2"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                    <li id="wmremove3">
                                        <figure><a href="#"><img src="images/extra-images/cartbox-3.jpg" alt=""></a></figure>
                                        <div class="wm-cartbox-text">
                                            <h6><a href="#">1 x Bass Amps</a></h6>
                                            <div class="wm-rating"><span class="wm-rating-box" style="width:45%"></span></div>
                                            <small>$89.99</small>
                                            <a href="#" class="wm-close-cart" id="wmbtnremove3"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <p>Subtotal <span>$165.98</span></p>
                                <div class="wm-cart-link"><a href="#" class="wm-cartbox-btn"><i class="flaticon-tool"></i> checkout</a></div>
                            </div>
                        </div>
                    </div>
                    <!--// Plugin Section \\-->

                    <!--// Navigation \\-->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <?php $cont=0; ?>
                                <?php foreach($menus as $key => $value ){ ?>
                                    <?php $cont++; ?>
                                    <?php $submenu= Menu::find()->where(["estatus"=>"ACTIVO","idparent"=>$value->id,"isDeleted"=>0])->orderby(['orden'=>SORT_ASC])->all(); ?>

                                    <?php if($submenu){ ?>
                                        <li class="<?php if($cont==1){ echo 'active'; } ?>"><a href="#"><?= $value->menu ?></a>
                                        <ul class="wm-dropdown-menu">
                                        <?php foreach($submenu as $keyS => $valueS ){ ?>
                                            <li><a href="<?= URL::base() ?>/<?=$valueS->link ?>"><?=$valueS->menu ?></a></li>
                                        <?php } ?>
                                        </ul>
                                    <?php }else{ ?>
                                        <li class="<?php if($cont==1){ echo 'active'; } ?>"><a href="<?= URL::base() ?>/<?= $value->link ?>"><?= $value->menu ?></a>
                                    <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                    <!--// Navigation \\-->

                </div>
            </div>
        </div>
    </header>
    <!--// Header \\-->

<body>
<?php $this->beginBody() ?>
<!--
<div class="wrap">
    <div class="container">-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

<!-- Page Wrapper -->
        <?= $content ?>
<!--    </div>
</div>
 -->

<!-- jQuery (necessary for JavaScript plugins) -->
<script type="text/javascript" src="<?= URL::base() ?>/js/script/jquery.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/modernizr.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/jquery-ui.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/jquery.prettyphoto.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/fitvideo.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/skills.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/slick.slider.min.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/jquery.jplayer.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/jplayer.playlist.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/moment.min.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/fullcalendar.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/waypoints-min.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/isotope.min.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/functions.js"></script>
<script type="text/javascript" src="<?= URL::base() ?>/js/script/jplayer.functions.js"></script>

<?php $this->endBody() ?>

 <footer>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Desea salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">¿Esta seguro de cerrar sesión?</div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn  btn-sm btn-primary" href="/frontend/web/site/logout">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
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