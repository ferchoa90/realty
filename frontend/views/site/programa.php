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
                    <h1><?=$programa->titulo  ?></h1>
                    <p><?=$programa->tipoprograma  ?></p>
                </div>
                <div class="clearfix"></div>
                <ul class="wm-breadcrumb">
                    <li><a href="/">Inicio</a></li>
                    <li>Programas</li>
                    <li><?=$programa->tipoprograma  ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--// Mini HEader \\-->

<!--// Main Content \\-->
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section wm-albumsingle-full">
        <div class="container">
            <div class="row">
                <aside class="col-md-3">
                    <div class="widget widget_add">
                        <a href="#"><img alt="" src="extra-images/widget-add-3.jpg"></a>
                    </div>
                    <div class="widget widget_artists">
                        <div class="wm-widget-heading">
                            <h2>Otros programas:</h2>
                        </div>
                        <ul>
                            <?php $cont=0; ?>
                            <?php foreach($listadoprogramas as $key => $value ){ ?>
                            <?php $cont++; ?>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/featured-widget-1.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <h3><a href="#"><?= $value->nombre ?></a></h3>
                                    <a href="#"><?= $value->numeroprogramas; ?> Programas</a>
                                    <div class="clearfix"></div>
                                </section>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!--<div class="widget wm_albumplayer_widget wm-albumplayer">
                        <div id="jp_container_6" class="jp-audio" role="application" aria-label="media player">
                            <div class="jp-type-playlist">
                                <span class="jp-play"><i class="fa fa-pause"></i> <i class="fa fa-play"></i></span>
                                <div id="jquery_jplayer_6" class="jp-jplayer"></div>
                                <div class="jp-gui jp-interface">
                                    <div id="current-track6" class="song-title">California Dreamin</div>
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
                    <!--<div class="widget widget_upcoming_listing">
                        <div class="wm-widget-heading">
                            <h2>upcoming listing</h2>
                        </div>
                        <ul>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/listing-widget-1.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <h3><a href="#">Capitán Tapón</a></h3>
                                    <h4>Alejandro Sanz</h4>
                                    <span>Played: 2 mins ago</span>
                                    <div class="clearfix"></div>
                                </section>
                            </li>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/listing-widget-2.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <h3><a href="#">Same Old Love</a></h3>
                                    <h4>Jennifer James</h4>
                                    <span>Played: 3 mins ago</span>
                                    <div class="clearfix"></div>
                                </section>
                            </li>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/listing-widget-3.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <h3><a href="#">I Found A Girl</a></h3>
                                    <h4>The Vamps</h4>
                                    <span>Played: 5 mins ago</span>
                                    <div class="clearfix"></div>
                                </section>
                            </li>
                        </ul>
                    </div>-->
                </aside>


                <div class="col-md-9">

                    <!--// Album List \\-->
                    <div class="wm-album wm-album-medium">
                        <ul class="row">
                            <li class="col-md-12">
                                <div class="wm-album-medium-wrap">
                                    <figure><a href="#" class="graythumb"><img src="https://i.ytimg.com/vi/<?= $programa->video ?>/hqdefault.jpg" alt=""></a></figure>
                                    <div class="wm-album-medium-text">
                                        <h2><a href="#"><?=$programa->titulo  ?></a></h2>
                                        <div class="wm-album-social-icon">
                                            <a href="#" class="flaticon-social-1"></a>
                                            <a href="#" class="flaticon-social-2"></a>
                                            <a href="#" class="flaticon-shape"></a>
                                            <a href="#" class="flaticon-social-3"></a>
                                        </div>
                                        <ul class="wm-album-options">
                                            <li><span class="wm-bgcolor wm-album-track-count">12 Visitas</span></li>
                                            <li><span>Fecha:</span> <?=$programa->fechavisual  ?></li>
                                            <li><span>Categoría:</span> Babelatino</li>
                                        </ul>
                                        <p><?= ((nl2br($programa->contenido)))  ?></p>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--// Album List \\-->



                    <!--// Editore \\-->
                    <div class="wm-editore">
                        <!--<div class="wm-blog-heading"> <h2>Album Description</h2> </div>-->


                    </div>
                    <!--// Editore \\-->

                    <!--// Video Player \\-->
                    <div class="wm-videoplayer wm-albumplayer">
                        <div class="wm-blog-heading"> <h2>Video</h2> </div>
                        <div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$programa->video ?>"
                                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                            <!--<div class="jp-type-playlist">
                                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                                <div class="jp-gui">
                                    <div class="jp-video-play">
                                        <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
                                    </div>
                                    <div class="jp-interface">
                                        <div class="jp-controls-holder">
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
                                            <div class="jp-controls">
                                                <span class="jp-shuffle"><i class="flaticon-arrows-2"></i></span>
                                                <span class="jp-previous"><i class="flaticon-arrows-1"></i></span>
                                                <span class="jp-play"><i class="fa fa-pause"></i> <i class="fa fa-play"></i></span>
                                                <span class="jp-next"><i class="flaticon-arrows-1"></i></span>
                                                <span class="jp-repeat"><i class="flaticon-arrows-3"></i></span>
                                            </div>
                                            <div class="jp-volume-controls">
                                                <span class="jp-mute"><i class="fa fa-volume-up"></i> <i class="fa fa-volume-off"></i></span>
                                                <div class="jp-volume-bar">
                                                    <div class="jp-volume-bar-value"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-details">
                                            <div class="jp-title" aria-label="title">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jp-playlist">
                                    <ul>-->
                            <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                            <!--<li>&nbsp;</li>
                        </ul>
                    </div>

                </div>-->
                        </div>
                    </div>
                    <!--// Video Player \\-->

                    <div class="wm-albumteam-wrap">
                        <div class="wm-blog-heading"> <h2>Participantes</h2> </div>
                        <div class="wm-artist-grid wm-albumteam-slider">
                            <div class="wm-artist-slider-layer">
                                <figure><a href="#"><img src="extra-images/artist-grid-1.jpg" alt=""></a>
                                    <figcaption><a href="#"><i class="flaticon-link"></i></a></figcaption>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="#">Victor Meliveo</a></h2>
                                    <span>Artista español multidisciplinar</span>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-recent-releases-full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-simple-facny-title"><h2>Más programas</h2></div>
                    <div class="wm-album wm-recent-releases-album">
                        <ul class="row">
                            <?php $cont=0; ?>
                            <?php foreach($masprogramas as $key => $value ){ ?>
                            <?php $cont++; ?>
                            <li class="col-md-4">
                                <figure><a href="#"><img src="https://i.ytimg.com/vi/<?= $value->video ?>/hqdefault.jpg" alt=""></a>
                                    <figcaption>
                                        <div class="wm-album-caption">
                                            <h2><a href="#"><?= $value->titulo ?></a></h2>
                                            <!--<ul>
                                                <li><span>Available on:</span></li>
                                                <li><a href="#" class="flaticon-icon-2406"></a></li>
                                                <li><a href="#" class="flaticon-technology-2"></a></li>
                                                <li><a href="#" class="flaticon-shape"></a></li>
                                            </ul>-->
                                            <div class="clearfix"></div>
                                            <a href="<?= URL::base() ?>/site/programa?id=<?= $value->id ?>" class="wm-album-linkbtn wm-color"><i class="flaticon-link"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="wm-recent-releases-text">
                                    <h2 style="float: none; text-align: center;"><a href="#"> <?= $value->titulo ?></a></h2>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="wm-seeall-btn"><a href="#" class="wm-bgcolor">Ver todos</a></div>
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