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
                    <h1>Quienes Somos</h1>
                    <p>Conoce sobre nosotros</p>
                </div>
                <div class="clearfix"></div>
                <ul class="wm-breadcrumb">
                    <li><a href="/">Inicio</a></li>
                    <li>Quienes Somos</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--// Mini HEader \\-->

<!--// Main Content \\-->
<div class="wm-main-content" style="padding-top:10px">

    <!--// Main Section \\-->
    <div class="wm-main-section wm-tabs-full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-simple-facny-title wm-in-light"><h2>Sobre Nosotros</h2></div>
                    <div class="wm-tabs">
                        <ul role="tablist" class="wm-tabs-wrap">
                            <li class="active" role="presentation"><a data-toggle="tab" role="tab" href="#description" aria-expanded="true"> Historia</a></li>
                            <!--<li role="presentation" class=""><a data-toggle="tab" role="tab" href="#ticket" aria-expanded="false">Our future plans</a></li>
                            <li role="presentation" class=""><a data-toggle="tab" role="tab" href="#event" aria-expanded="false">our fans love us</a></li>-->
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <div class="wm-description-section">
                                    <p>Somos un programa radial intercultural audiovisual que une América Latina en Europa, es un espacio abierto al mundo dónde dialogamos, reflexionamos, nos une el amor por las culturas, el arte, los libros, la música, las causas sociales, nos reconocemos en la diversidad como un complemento y unidad, nos sentimos como parte de un  multi universo infinito, la  naturaleza  nos incluye en el mismo espacio a los  seres  humanos, cada uno somos parte del otro, en esa galaxia no hay fronteras, ni razas, ni diferencias que nos separen, ahí luchamos por la igualdad de género y la  hermandad en medio de un sistema perverso que nos quiere esclavos, nos quiere deshumanizados, desraizados de nuestra energía vital, nos quieren como ejércitos de consumidores que destruyen nuestro entorno con toneladas de basura, donde destruimos a otras especies sin piedad, pero especialmente a nosotros mismos con nuestro individualismo egoísta exacerbado y un conformismo vergonzoso que mira con indiferencia el dolor el otro.

                                        Babelatino tiene una razón de ser y es regalar a nuestros seguidores a través de  voces protagonistas los aprendizajes de nuestra esencia humana y espiritual que es pura, sencilla,  generosa, humilde,   y grande en voces, cantos, libros, vientos, sonidos, tierra, agua, fuego, arte, crítica social, rebeldía, por sobre todo en amor transversal, dejando  el miedo y la competitividad para cooperar entre nosotros, deja la frivolidad que nos encierra en sí mismos para arriesgarnos  y transformarnos en cada instante de nuestras vidas pasajeras y poder aportar a construir una mejor humanidad como soñadores y visionarios empedernidos.
                                        Somos un programa radial intercultural audiovisual que une América Latina en Europa, es un espacio abierto al mundo dónde dialogamos, reflexionamos, nos une el amor por las culturas, el arte, los libros, la música, las causas sociales, nos reconocemos en la diversidad como un complemento y unidad, nos sentimos como parte de un  multi universo infinito, la  naturaleza  nos incluye en el mismo espacio a los  seres  humanos, cada uno somos parte del otro, en esa galaxia no hay fronteras, ni razas, ni diferencias que nos separen, ahí luchamos por la igualdad de género y la  hermandad en medio de un sistema perverso que nos quiere esclavos, nos quiere deshumanizados, desraizados de nuestra energía vital, nos quieren como ejércitos de consumidores que destruyen nuestro entorno con toneladas de basura, donde destruimos a otras especies sin piedad, pero especialmente a nosotros mismos con nuestro individualismo egoísta exacerbado y un conformismo vergonzoso que mira con indiferencia el dolor el otro.
                                        <br><br>
                                        Babelatino tiene una razón de ser y es regalar a nuestros seguidores a través de  voces protagonistas los aprendizajes de nuestra esencia humana y espiritual que es pura, sencilla,  generosa, humilde,   y grande en voces, cantos, libros, vientos, sonidos, tierra, agua, fuego, arte, crítica social, rebeldía, por sobre todo en amor transversal, dejando  el miedo y la competitividad para cooperar entre nosotros, deja la frivolidad que nos encierra en sí mismos para arriesgarnos  y transformarnos en cada instante de nuestras vidas pasajeras y poder aportar a construir una mejor humanidad como soñadores y visionarios empedernidos.

                                    </p>
                                    <ul>
                                        <!--<li>Minimum Age Restriction 8 years</li>
                                        <li>Under 14s must be accompanied by an adult over 18</li>
                                        <li>Under 25s require ID to purchase Cigrates</li>-->
                                    </ul>
                                </div>
                            </div>
                            <!--<div role="tabpanel" class="tab-pane" id="ticket">
                                <div class="wm-accordian-element">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="wm-ticket-headings">
                                            <ul>
                                                <li><span>Ticket Type</span></li>
                                                <li><span>Total Tickets</span></li>
                                                <li><span>Tickets Deadline</span></li>
                                                <li><span>Price</span></li>
                                            </ul>
                                        </div>
                                        <a class="panel panel-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="panel-heading" role="tab">
                                                <div class="wm-ticket-deadline">
                                                    <ul>
                                                        <li><span>AURA Music & Arts 2016</span></li>
                                                        <li><span>750 Tickets</span></li>
                                                        <li><span>02/04/2016</span></li>
                                                        <li><span>$24.99</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                </div>
                                            </div>
                                        </a> <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="panel-heading" role="tab">
                                                <div class="wm-ticket-deadline">
                                                    <ul>
                                                        <li><span>The Lebrewski Cruise 2016</span></li>
                                                        <li><span>1200 Tickets</span></li>
                                                        <li><span>23/04/2016</span></li>
                                                        <li><span>$37.99</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                </div>
                                            </div>
                                        </a> <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="panel-heading" role="tab">
                                                <div class="wm-ticket-deadline">
                                                    <ul>
                                                        <li><span>Okeechobee Music Festival 2016</span></li>
                                                        <li><span>1000 Tickets</span></li>
                                                        <li><span>29/04/2016</span></li>
                                                        <li><span>$50.00</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                </div>
                                            </div>
                                        </a> <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <div class="panel-heading" role="tab">
                                                <div class="wm-ticket-deadline">
                                                    <ul>
                                                        <li><span>CRSSD Festival 2016</span></li>
                                                        <li><span>600 Tickets</span></li>
                                                        <li><span>06/05/2016</span></li>
                                                        <li><span>$45.50</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                </div>
                                            </div>
                                        </a> <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <div class="panel-heading" role="tab">
                                                <div class="wm-ticket-deadline">
                                                    <ul>
                                                        <li><span>BUKU Music and Art 2016</span></li>
                                                        <li><span>850 Tickets</span></li>
                                                        <li><span>09/05/2016</span></li>
                                                        <li><span>$105.00</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                </div>
                                            </div>
                                        </a> </div>
                                </div>
                            </div>-->
                            <!--<div role="tabpanel" class="tab-pane" id="event">
                                <div class="wm-event-performer">
                                    <ul>
                                        <li>
                                            <figure><a href="#"><img src="extra-images/evetn-performer-1.jpg" alt=""></a></figure>
                                            <div class="wm-performer-text">
                                                <h3><a href="#">Magdalena McNeil</a></h3>
                                                <span class="wm-color">Vocals, Bass, Piano, Guitar</span>
                                                <p>A life-long, second-generation Beatles fan, Steve taught himself guitar at 10 listening to them records and by 13 was fronting a Top 40 cover band in his native Philadelphia.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="#"><img src="extra-images/evetn-performer-2.jpg" alt=""></a></figure>
                                            <div class="wm-performer-text">
                                                <h3><a href="#">Joey Curatolo</a></h3>
                                                <span class="wm-color">Bass, Piano, Guitar</span>
                                                <p>Joey grew up in a Brooklyn household where classical music and opera formed the soundtrack. A natural musician, he was infatuated with them.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="#"><img src="extra-images/evetn-performer-3.jpg" alt=""></a></figure>
                                            <div class="wm-performer-text">
                                                <h3><a href="#">Aaron Chiazza</a></h3>
                                                <span class="wm-color">Rhythm Guitar, Piano, Harmonica</span>
                                                <p>He performed in local Chicago Beatle bands and learned the harmonica to master some of his early favorites.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="#"><img src="extra-images/evetn-performer-1.jpg" alt=""></a></figure>
                                            <div class="wm-performer-text">
                                                <h3><a href="#">Magdalena McNeil</a></h3>
                                                <span class="wm-color">Vocals, Bass, Piano, Guitar</span>
                                                <p>A life-long, second-generation Beatles fan, Steve taught himself guitar at 10 listening to them records and by 13 was fronting a Top 40 cover band in his native Philadelphia.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="#"><img src="extra-images/evetn-performer-2.jpg" alt=""></a></figure>
                                            <div class="wm-performer-text">
                                                <h3><a href="#">Joey Curatolo</a></h3>
                                                <span class="wm-color">Bass, Piano, Guitar</span>
                                                <p>Joey grew up in a Brooklyn household where classical music and opera formed the soundtrack. A natural musician, he was infatuated with them.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="#"><img src="extra-images/evetn-performer-1.jpg" alt=""></a></figure>
                                            <div class="wm-performer-text">
                                                <h3><a href="#">Magdalena McNeil</a></h3>
                                                <span class="wm-color">Vocals, Bass, Piano, Guitar</span>
                                                <p>A life-long, second-generation Beatles fan, Steve taught himself guitar at 10 listening to them records and by 13 was fronting a Top 40 cover band in his native Philadelphia.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="#"><img src="extra-images/evetn-performer-2.jpg" alt=""></a></figure>
                                            <div class="wm-performer-text">
                                                <h3><a href="#">Joey Curatolo</a></h3>
                                                <span class="wm-color">Bass, Piano, Guitar</span>
                                                <p>Joey grew up in a Brooklyn household where classical music and opera formed the soundtrack. A natural musician, he was infatuated with them.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-castgallery-full">
        <div class="container">
            <div class="row">

                <aside class="col-md-8 widget widget_slider">
                    <div class="wm-simple-section-heading"><h2>Nuestra Galería</h2></div>
                    <div class="widget_slider_wrap">
                        <div class="widget_slide_layer"><img src="extra-images/gallery-section-slider-1.jpg" alt=""></div>
                        <div class="widget_slide_layer"><img src="extra-images/gallery-section-slider-2.jpg" alt=""></div>
                    </div>
                </aside>

                <div class="col-md-4">
                    <div class="wm-simple-section-heading"><h2>Personal</h2></div>
                    <div class="wm-casting-list">
                        <ul>
                           <!-- <li>Jenny Power – <a href="#">vocals, guitar</a></li>
                            <li>Howard J. Valdez – <a href="#">only vocals</a></li>
                            <li>Peter Wilkinson – <a href="#">backing vocals, bass</a></li>
                            <li>Liam "Skin" Tyson – <a href="#">guitar</a></li>
                            <li>Keith O'Neill – <a href="#">drums</a></li>-->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-ourband-full"  style="padding-top:40px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-simple-facny-title wm-in-light"><h2>Nuestro Equipo</h2></div>
                    <div class="wm-artist-grid wm-ourband-slider">
                        <?php $cont=0; ?>
                        <?php foreach($colaboradores as $key => $value ){ ?>
                            <?php $cont++; ?>
                            <div class="wm-artist-slider-layer">
                                <figure><a href="#"><img src="<?= URL::base() ?>/images/equipo/<?= $value->imagen ?>" alt=""></a>
                                    <figcaption><a href="#"><i class="flaticon-link"></i></a></figcaption>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="#"><?= $value->nombres ?></a></h2>
                                    <span><?= $value->programa ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Section \\-->



    <!--// Main Content \\-->
    <div class="wm-main-section wm-contactus-services">
        <span class="wm-transparent-color"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-contactus-listing">
                        <ul class="row">
                            <li class="col-md-3">
                                <a href="#"><i class="flaticon-transport"></i></a>
                                <span class="word-count">295</span>
                                <p>Nuestra Audiencia</p>
                            </li>
                            <li class="col-md-3">
                                <a href="#"><i class="flaticon-music-2"></i></a>
                                <span class="word-count">420</span>
                                <p>Programas</p>
                            </li>
                            <li class="col-md-3">
                                <a href="#"><i class="flaticon-multimedia"></i></a>
                                <span class="word-count">420</span>
                                <p>En vivos</p>
                            </li>
                            <li class="col-md-3">
                                <a href="#"><i class="flaticon-social-4"></i></a>
                                <span class="word-count">600</span>
                                <p>Nuestros Seguidores</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Content \\-->

    <!--// Main Content \\-->
    <div class="wm-main-section wm-aboutinfo-full">
        <div class="container">
            <div class="row">
               <!--<div class="col-md-6">
                    <div class="wm-blog-heading"> <h2>Más sobre Nosotros</h2> </div>
                    <div class="wm-moreabout-info">
                        <p>Other great tittles are accidental. The Beatles released a self titled double album with a white cover on November 22nd, 1968.</p>
                        <div class="wm-blockquote">
                            <blockquote>I can't change the direction of the wind, but I can adjust my sails to always reach my destination.</blockquote>
                            <span class="wm-color">-Jimmy Dean</span>
                        </div>
                        <ul>
                            <li><a href="#"><i class="flaticon-arrows"></i> Information architecture</a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i> Website design</a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i> Blog planning & writing</a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i> iOS application design</a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i> Social media management</a></li>
                            <li><a href="#"><i class="flaticon-arrows"></i> Interactive prototyping</a></li>
                        </ul>
                    </div>
                </div>-->
                <!--<div class="col-md-6">-->
                    <!--// Album Player \\-->
                    <!--<div class="wm-albumplayer wm-aboutplayer">
                        <div id="jp_container_5" class="jp-audio" role="application" aria-label="media player">
                            <div class="jp-type-playlist">
                                <span class="jp-play"><i class="fa fa-pause"></i> <i class="fa fa-play"></i></span>
                                <div id="jquery_jplayer_5" class="jp-jplayer"></div>
                                <div class="jp-gui jp-interface">
                                    <div id="current-track5" class="song-title">Dangerous (feat. Sam Martin) [Robin Schulz Remix] [Radio Edit]</div>
                                    <div class="jp-controls">
                                        <span class="jp-shuffle"><i class="flaticon-arrows-2"></i></span>
                                        <span class="jp-previous"><i class="flaticon-arrows-1"></i></span>
                                        <span class="jp-next"><i class="flaticon-arrows-1"></i></span>
                                        <span class="jp-repeat"><i class="flaticon-arrows-3"></i></span>
                                    </div>
                                    <div class="jp-volume-controls">
                                        <span class="jp-mute"><i class="fa fa-volume-up"></i> <i class="fa fa-volume-off"></i></span>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value"></div>
                                        </div>
                                    </div>
                                    <div class="wm-player-wrap">
                                        <span class="jp-previous"><i class="flaticon-arrows-1"></i></span>
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div class="jp-play-bar"></div>
                                            </div>
                                        </div>
                                        <span class="jp-next"><i class="flaticon-arrows-1"></i></span>
                                        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="jp-playlist">
                                    <ul>
                                        <li>&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--// Album Player \\-->
                <!-- </div>-->
            </div>
        </div>
    </div>
    <!--// Main Content \\-->

</div>
<!--// Main Content \\-->