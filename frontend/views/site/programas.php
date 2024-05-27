<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
$script = <<< JS
$(document).ready(function () {
    jQuery(document).ready(function ($) {
    });
});
JS;
$this->registerJs($script, View::POS_END);
header('Content-Type: text/html; charset=utf-8');
?>
<!--// Mini HEader \\-->
<div class="wm-mini-header">
    <span class="wm-black-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-page-heading">
                    <h1><?=$programa->nombre ?></h1>
                    <p>Programa</p>
                </div>
                <div class="clearfix"></div>
                <ul class="wm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><?=$programa->nombre ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--// Mini HEader \\-->

<!--// Main Content \\-->
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section wm-latestartist-albumfull">
        <div class="container">
            <div class="row">
                <aside class="col-md-3">
                    <div class="wm-album-nav">
                        <ul>
                            <li class="active"><a href="#">Todos</a></li>
                        </ul>
                    </div>
                </aside>
                <div class="col-md-9">
                    <!--// Album List \\-->
                    <div class="wm-album wm-album-medium">
                        <ul class="row">
                            <?php $cont=0; ?>
                            <?php foreach($programas as $key => $value ){ ?>
                            <?php $cont++; ?>
                            <li class="col-md-12">
                                <div class="wm-album-medium-wrap">
                                    <figure><a href="#" class="graythumb"><img src="https://i.ytimg.com/vi/<?= $value->video ?>/hqdefault.jpg" alt=""> <span class="wm-hoverlink wm-color"><i class="flaticon-link"></i></span></a></figure>
                                    <div class="wm-album-medium-text" style="padding-bottom: 20px;">
                                        <h2><a href="<?= URL::base() ?>/site/programa?id=<?= $value->id ?>"><?= $value->titulo ?></a></h2>
                                        <div class="wm-album-social-icon">
                                            <a href="#" class="flaticon-social-1"></a>
                                            <a href="#" class="flaticon-social-2"></a>
                                            <a href="#" class="flaticon-shape"></a>
                                            <a href="#" class="flaticon-social-3"></a>
                                        </div>
                                        <ul class="wm-album-options">
                                            <li><span class="wm-bgcolor wm-album-track-count"><?=$programa->nombre ?></span></li>
                                            <li><span>Fecha:</span> <?= $value->fechavisual ?></li>

                                        </ul>
                                        <p><?= $value->descripcion ?></p>
                                        <a class="wm-bayalbum-listbtn wm-bgcolor" href="<?= URL::base() ?>/site/programa?id=<?= $value->id ?>"><i class="flaticon-link"></i> Ver</a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="wm-checkall-btn"><a href="#">Ver más</a></div>
                    <!--// Album List \\-->
                </div>
            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->

<!--// Footer \\-->
<footer id="wm-footer" class="footer-two">

    <!--// Footer Widget \\-->
    <div class="wm-footer-widgets">
        <div class="container">

        </div>
    </div>
    <!--// Footer Widget \\-->

    <!--// Footer Bottom Section \\-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-footer-bottom-section">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="wm-newslatter-section">
                                <div class="wm-footer-widget-title"> <h2>Suscríbete:</h2> </div>
                                <form>
                                    <input type="text" value="Su correo electrónico" onblur="if(this.value == '') { this.value ='Su correo electrónico'; }" onfocus="if(this.value =='Su correo electrónico') { this.value = ''; }">
                                    <input type="submit" value="Suscribirse" class="wm-color wm-bordercolor">
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wm-footer-social-media">
                                <ul class="wm-footer-icons">
                                    <li><a href="#"><i class="flaticon-social-2"></i> twitter</a></li>
                                    <li><a href="#"><i class="flaticon-social-1"></i> facebook</a></li>
                                    <li><a href="#"><i class="flaticon-social-3"></i> spotify</a></li>
                                    <li><a href="#"><i class="flaticon-shape"></i> Musicbeat</a></li>
                                </ul>
                                <p>© 2023. Todos los derechos <a href="#">reservados</a> - by <a href="#">AcepSistemas</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Footer Bottom Section \\-->