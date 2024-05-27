<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
use common\models\Slider;

//$this->title = ' Clases y módulos';
//$this->params['breadcrumbs'][] = $this->title;

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
                    <h1>Contáctanos</h1>
                    <p>Formulario de contacto</p>
                </div>
                <div class="clearfix"></div>
                <ul class="wm-breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li>Contáctanos</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--// Mini HEader \\-->

<!--// Main Content \\-->
<div class="wm-main-content">
    <!--// Main Section \\-->
    <div class="wm-main-section wm-contact-us-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-contact-us-info">
                        <ul class="row">
                            <li class="col-md-3">
                                <a href="#"><i class="fa fa-home"></i></a>
                                <p>Italia - Via Borgo Ruga 13, - Feltre - BL</p>
                            </li>
                            <li class="col-md-3">
                                <a href="#"><i class="fa fa-phone"></i></a>
                                <p>(+39) 3516 321 762</p>
                            </li>
                            <li class="col-md-3">
                                <a href="#"><i class="fa fa-print"></i></a>
                                <p>(+39) 3516 321 762</p>
                            </li>
                            <li class="col-md-3">
                                <a href="#"><i class="flaticon-symbol"></i></a>
                                <p>jpatricia@babelatino.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wm-main-section">
        <div class="wm-contact-us-map-full">
            <div id="map"></div>
        </div>
    </div>
    <div class="wm-main-section wm-contactus-form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-contactus-title">
                        <h2>Contáctanos</h2>
                    </div>
                    <div class="wm-contact-us-form-section">
                        <form>
                            <ul>
                                <li class="full">
                                    <input type="text" onfocus="if(this.value =='Your Name') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your Name'; }" value="Su nombre">
                                </li>
                                <li>
                                    <input type="text" onfocus="if(this.value =='Your E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your E-mail'; }" value="Su correo electrónico">
                                </li>
                                <li>
                                    <input type="text" onfocus="if(this.value =='Your Phone Number') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your Phone Number'; }" value="Su número de teléfono">
                                </li>
                                <li class="full">
                                    <textarea name="send" placeholder="Su Mensaje..."></textarea>
                                </li>
                                <li class="full">
                                    <input type="submit" value="Enviar">
                                </li>
                            </ul>
                        </form>
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