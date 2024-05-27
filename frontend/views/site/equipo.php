<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
use common\models\Slider;
use common\models\Colaboradores;
use common\models\Programas;

//$this->title = ' Clases y módulos';
//$this->params['breadcrumbs'][] = $this->title;
//$slider= Slider::find()->where(["estatus"=>"ACTIVO", "isDeleted"=>0])->orderby(['orden'=>SORT_ASC])->all();
$colaboradores= Colaboradores::find()->where(["estatus"=>"ACTIVO", "isDeleted"=>0])->orderby(['orden'=>SORT_ASC])->all();
//$programas= Programas::find()->where(["estatus"=>"ACTIVO", "isDeleted"=>0])->orderby(['fechacreacion'=>SORT_ASC])->all();


$script = <<< JS
$(document).ready(function () {
    jQuery(document).ready(function ($) {
    });
});
JS;
$this->registerJs($script, View::POS_END);
?>

<!--// Mini HEader \\-->
<div class="wm-mini-header">
    <span class="wm-black-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-page-heading">
                    <h1>Equipo</h1>
                    <p>Nuestro equipo de trabajo</p>
                </div>
                <div class="clearfix"></div>
                <ul class="wm-breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li>Equipo</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--// Mini HEader \\-->

<!--// Main Content \\-->
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-artist wm-artist-grid">
                        <ul class="row">
                            <?php $cont=0; ?>
                            <?php foreach($colaboradores as $key => $value ){ ?>
                            <?php $cont++; ?>
                            <li class="col-md-3">
                                <figure><a href="#"><img src="<?= URL::base() ?>/images/equipo/<?= $value->imagen ?>" alt=""></a>

                                    <figcaption>
                                        <a href="#"><i class="flaticon-link"></i></a>
                                    </figcaption>
                                </figure>

                                <div class="wm-artist-title">
                                    <h2><a href="#"><?= $value->nombres ?></a></h2>
                                    <span><?= $value->programa ?></span>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="wm-pagination-wrap">
                        <ul class="wm-pagination">
                            <li><a href="#">1</a></li>
                            <!--<li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li> . . . </li>
                            <li><a href="#">38</a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i></a></li>-->
                        </ul>
                    </div>
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
    <!--<div class="wm-footer-widgets">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 widget widget_slider">
                    <div class="wm-footer-widget-title"> <h2>Don’t miss this:</h2> </div>
                    <div class="widget_slider_wrap">
                        <div class="widget_slide_layer"><img src="extra-images/widget-slider-1.jpg" alt=""></div>
                        <div class="widget_slide_layer"><img src="extra-images/widget-slider-1.jpg" alt=""></div>
                    </div>
                    <h4>Photo Recap: Charles Jemmington @ <span>Joy Theater New Orleans</span> on 25/04/16</h4>
                </aside>
                <aside class="col-md-4 widget widget_artists">
                    <div class="wm-footer-widget-title"> <h2>featured artists:</h2> </div>
                    <ul>
                        <li>
                            <figure> <a href="#"><img src="extra-images/artist-widget-1.jpg" alt=""></a> </figure>
                            <section class="wm-newsinfo">
                                <h3><a href="#">Annie B. Myers – Pop Singer</a></h3>
                                <a href="#">9 Albums on Sale</a>
                                <div class="clearfix"></div>
                            </section>
                        </li>
                        <li>
                            <figure> <a href="#"><img src="extra-images/artist-widget-2.jpg" alt=""></a> </figure>
                            <section class="wm-newsinfo">
                                <h3><a href="#">Chris R. Gonzalez – Soul Singer</a></h3>
                                <a href="#">7 Albums on Sale</a>
                                <div class="clearfix"></div>
                            </section>
                        </li>
                        <li>
                            <figure> <a href="#"><img src="extra-images/artist-widget-3.jpg" alt=""></a> </figure>
                            <section class="wm-newsinfo">
                                <h3><a href="#">Ralph L. Franz – Rock Band</a></h3>
                                <a href="#">8 Albums on Sale</a>
                                <div class="clearfix"></div>
                            </section>
                        </li>
                    </ul>
                </aside>
                <aside class="col-md-4 widget widget_weekstracks">
                    <div class="wm-footer-widget-title"> <h2>this week’s tracks:</h2> </div>
                    <ul>
                        <li>
                            <time datetime="2008-02-14 20:00">/01</time>
                            <section class="wm-weekstracks-text">
                                <h5><a href="#">Of All Things (feat. Too $hort) Top 100 Uk</a></h5>
                                <span class="wm-color">201.123 listeners</span>
                            </section>
                        </li>
                        <li>
                            <time datetime="2008-02-14 20:00">/02</time>
                            <section class="wm-weekstracks-text">
                                <h5><a href="#">Everything Will Be OK (feat. Kehlani) Top 100 Uk</a></h5>
                                <span class="wm-color">176.009 listeners</span>
                            </section>
                        </li>
                        <li>
                            <time datetime="2008-02-14 20:00">/03</time>
                            <section class="wm-weekstracks-text">
                                <h5><a href="#">Some Kind of Drug (feat. Marc Bass) Top 100 Uk</a></h5>
                                <span class="wm-color">101.865 listeners</span>
                            </section>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>-->
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