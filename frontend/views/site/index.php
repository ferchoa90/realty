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
$slider= Slider::find()->where(["estatus"=>"ACTIVO", "isDeleted"=>0])->orderby(['orden'=>SORT_ASC])->all();
$colaboradores= Colaboradores::find()->where(["estatus"=>"ACTIVO", "isDeleted"=>0])->orderby(['orden'=>SORT_ASC])->all();
$programas= Programas::find()->where(["estatus"=>"ACTIVO", "isDeleted"=>0])->orderby(['fechacreacion'=>SORT_DESC])->all();


$script = <<< JS
$(document).ready(function () {
    jQuery(document).ready(function ($) {
    });
});
JS;
$this->registerJs($script, View::POS_END);
?>

<!--// Main Banner \\-->
    <div class="wm-main-banner">

        <!--// Banner \\-->
        <div class="wm-banner">
            <?php $cont=0; ?>
            <?php foreach($slider as $key => $value ){ ?>
            <?php $cont++; ?>
            <div class="wm-banner-slide">
                <span class="wm-banner-layer"></span>
                <img src="images/slider/<?= $value->image ?>" alt="">
                <div class="wm-caption  wm-leftcaption">
                    <h1 style="font-size: 30px;"><?= $value->titulo ?></h1>
                    <h3 style="font-size: 14px; width: 40%;"><?= $value->extracto ?></h3>
                    <div class="clearfix"></div>
                    <?php if ($value->boton1){ ?>
                        <a href="#" class="wm-default-btn"><span><?= $value->textob1 ?></span></a>
                    <?php } ?>
                    <?php if ($value->boton2){ ?>
                        <a href="#" class="wm-default-btn"><span><?= $value->textob1 ?></span></a>-->
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <!--<div class="wm-banner-slide">
                <span class="wm-banner-layer"></span>
                <img src="images/extra-images/banner-2.jpg" alt="">
                <div class="wm-caption wm-leftcaption">
                    <div class="container">
                        <h1>Music is the poetry of the air</h1>
                        <div class="clearfix"></div>
                        <a href="#" class="wm-default-btn"><span>Check our events</span></a>
                        <a href="#" class="wm-default-btn"><span>Purchase tickets</span></a>
                    </div>
                </div>
            </div>
            <div class="wm-banner-slide">
                <span class="wm-banner-layer"></span>
                <img src="images/extra-images/2.jpg" alt="">
                <div class="wm-caption wm-rightcaption">
                    <div class="container">
                        <h1>The Best Music Band Ever</h1>
                        <div class="clearfix"></div>
                        <a href="#" class="wm-default-btn"><span>Check our events</span></a>
                        <a href="#" class="wm-default-btn"><span>Purchase tickets</span></a>
                    </div>
                </div>
            </div>-->
        </div>
        <!--// Banner \\-->

        <!--// Player \\-->
        <div class="wm-banner-player">
            <div class="container">
                <div id="jquery_jplayer_2" class="jp-jplayer"></div>
                <div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
                    <div class="jp-type-playlist">
                        <div class="jp-playlist">
                            <ul>
                                <li>&nbsp;</li>
                            </ul>
                        </div>
                        <div class="jp-gui jp-interface">
                            <div class="jp-controls">
                                <span class="wm-bgcolor-one jp-previous"><i class="flaticon-arrows-1"></i></span>
                                <span class="jp-play"><i class="fa fa-pause"></i> <i class="fa fa-play"></i></span>
                                <span class="wm-bgcolor-one jp-next"><i class="flaticon-arrows-1"></i></span>
                                <span class="jp-stop"><i class="flaticon-circle"></i></span>
                            </div>
                            <div class="wm-player-wrap">
                                <div id="current-track1" class="song-title">BABELATINO 419 - DE PREMIOS Y DE LIBROS</div>
                                <div class="jp-time-holder">
                                    <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                    <div class="jp-duration" role="timer" aria-label="duration">/&nbsp;</div>
                                </div>
                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                    </div>
                                </div>
                                <div class="jp-toggles">
                                    <span class="jp-shuffle"><i class="flaticon-arrows-2"></i></span>
                                    <span class="jp-repeat"><i class="flaticon-arrows-3"></i></span>
                                    <div class="wm-player-options">
                                        <a href="#"><i class="flaticon-social"></i> 876</a>
                                        <a href="#"><i class="flaticon-music"></i> 986</a>
                                        <a href="#"><i class="flaticon-web"></i> 489</a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="wm-playlist-btn"><i class="flaticon-music-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Player \\-->

    </div>
    <!--// Main Banner \\-->

    <!--// Main Content \\-->
    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section wm-element-holder-full">
            <div class="container-fluid wm-overflow-container">
                <div class="row">

                    <!--// Event Countdown \\-->
                    <!--<div class="col-md-12 col-offset-2">
                        <div class="wm-event-countdown">

                            <div class="wm-event-countdown-title">
                                <h2>Our Upcoming</h2>
                                <h3>Events</h3>
                            </div>

                            <div class="wm-countdown-section">
                                <h2>Upcoming Event @ Tennessee</h2>
                                <div id="wm-countdown"></div>
                            </div>
                            <a href="#" class="wm-event-viewbtn"><span>View All</span></a>

                        </div>
                    </div>-->
                    <!--// Event Countdown \\-->

                    <!--// Event ModrenGrid \\-->
                    <!--<div class="col-md-12 col-offset-2">
                        <div class="wm-modren-event">
                            <ul>
                                <li>
                                    <figure><a href="#"><img src="images/extra-images/event-modren-1.jpg" alt=""></a>
                                        <figcaption>
                                            <div class="wm-event-title-caption">
                                                <h2>24/03/16</h2>
                                                <span>@ Tennessee</span>
                                            </div>
                                            <div class="wm-check-eventbtn"><a href="#">Check Out Event</a></div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure><a href="#"><img src="images/extra-images/event-modren-2.jpg" alt=""></a>
                                        <figcaption>
                                            <div class="wm-event-title-caption">
                                                <h2>22/01/16</h2>
                                                <span>@ Tennessee</span>
                                            </div>
                                            <div class="wm-check-eventbtn"><a href="#">Check Out Event</a></div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure><a href="#"><img src="images/extra-images/event-modren-3.jpg" alt=""></a>
                                        <figcaption>
                                            <div class="wm-event-title-caption">
                                                <h2>23/04/16</h2>
                                                <span>@ Wyoming</span>
                                            </div>
                                            <div class="wm-check-eventbtn"><a href="#">Check Out Event</a></div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure><a href="#"><img src="images/extra-images/event-modren-4.jpg" alt=""></a>
                                        <figcaption>
                                            <div class="wm-event-title-caption">
                                                <h2>04/05/16</h2>
                                                <span>@ North Carolina</span>
                                            </div>
                                            <div class="wm-check-eventbtn"><a href="#">Check Out Event</a></div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure><a href="#"><img src="images/extra-images/event-modren-2.jpg" alt=""></a>
                                        <figcaption>
                                            <div class="wm-event-title-caption">
                                                <h2>23/05/16</h2>
                                                <span>@ Oregon</span>
                                            </div>
                                            <div class="wm-check-eventbtn"><a href="#">Check Out Event</a></div>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>-->
                    <!--// Event ModrenGrid \\-->

                    <!--// Promo Songs \\-->
                    <!--<div class="col-md-12 col-offset-2">
                        <div class="wm-promo-songs">
                            <figure class="wm-promosongs-thumb"><a href="#"><img src="images/extra-images/music-beat-disk-1.png" alt=""></a>
                                <figcaption>
                                    <a href="#" title="Add To Cart Songs"><span><i class="flaticon-tool"></i></span></a>
                                    <a href="#" title="Download Promo Songs"><span><i class="flaticon-interface"></i></span></a>
                                </figcaption>
                            </figure>
                            <div class="wm-promosong-text">
                                <div class="wm-promo-time">
                                    <time datetime="2008-02-14 20:00">February 16,2016</time>
                                    <ul>
                                        <li><a href="#" class="flaticon-technology"></a></li>
                                        <li><a href="#" class="flaticon-technology"></a></li>
                                        <li><a href="#" class="flaticon-technology"></a></li>
                                        <li><a href="#" class="flaticon-technology"></a></li>
                                        <li><a href="#" class="flaticon-technology"></a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="wm-text-inner">
                                    <span>New Album</span>
                                    <h2>Down To My Bad Habit</h2>
                                    <div class="ec-app-btn">
                                        <a href="https://itunes.apple.com/en/genre/ios/id36?mt=8"><img src="images/play-thumb1.png" alt=""></a>
                                        <a href="https://play.google.com/store?hl=en"><img src="images/play-thumb2.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--// Promo Songs \\-->

                    <!--// Gallery Slider \\-->
                    <div class="col-md-12 col-offset-2">
                        <div class="wm-gallery-section">
                            <div class="wm-fancy-title-one">
                                <span>Nuestros</span>
                                <h2>Programas</h2>
                            </div>
                            <div class="wm-gallery-slider gallery">
                                <?php $cont=0; ?>
                                <?php foreach($programas as $key => $value ){ ?>
                                <?php $cont++; ?>
                                <div class="wm-gallery-slide-layer">
                                    <figure><a href="#"><img src="https://i.ytimg.com/vi/<?= $value->video ?>/hqdefault.jpg" alt=""></a>
                                        <figcaption>
                                            <ul>
                                                <li><a href="#" class="flaticon-link"></a></li>
                                                <li><a href="#" class="flaticon-shapes"></a></li>
                                                <li class="wm-gallery-tags"><a title="" data-rel="prettyPhoto" href="https://youtu.be/<?= $value->video ?>">Video</a></li>
                                            </ul>
                                            <a class="wm-play-video" title="" data-rel="prettyPhoto" href="https://youtu.be/<?= $value->video ?>"><i class="flaticon-play"></i></a>
                                            <h2><a href="<?= URL::base() ?>/site/programa?id=<?= $value->id ?>"><?= $value->titulo ?></a></h2>
                                        </figcaption>
                                    </figure>
                                </div>
                                <?php } ?>
                                <!--<div class="wm-gallery-slide-layer">
                                    <figure><a href="#"><img src="images/extra-images/gallery-slider-2.jpg" alt=""></a>
                                        <figcaption>
                                            <ul>
                                                <li><a href="#" class="flaticon-link"></a></li>
                                                <li><a href="#" class="flaticon-shapes"></a></li>
                                                <li class="wm-gallery-tags"><a title="" data-rel="prettyPhoto" href="https://youtu.be/76TapKZ4_zM">Video</a></li>
                                            </ul>
                                            <a class="wm-play-video" title="" data-rel="prettyPhoto" href="https://youtu.be/76TapKZ4_zM"><i class="flaticon-play"></i></a>
                                            <h2><a href="#">“Running From The Blows” Concert</a></h2>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-gallery-slide-layer">
                                    <figure><a href="#"><img src="images/extra-images/gallery-slider-3.jpg" alt=""></a>
                                        <figcaption>
                                            <ul>
                                                <li><a href="#" class="flaticon-link"></a></li>
                                                <li><a href="#" class="flaticon-shapes"></a></li>
                                                <li class="wm-gallery-tags"><a title="" data-rel="prettyPhoto" href="https://youtu.be/76TapKZ4_zM">Video</a></li>
                                            </ul>
                                            <a class="wm-play-video" title="" data-rel="prettyPhoto" href="https://youtu.be/76TapKZ4_zM"><i class="flaticon-play"></i></a>
                                            <h2><a href="#">“Running From The Blows” Concert</a></h2>
                                        </figcaption>
                                    </figure>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <!--// Gallery Slider \\-->

                    <!--// Band Members \\-->
                    <div class="col-md-12 col-offset-2">
                        <div class="wm-members-slider">
                            <h2>Miembros del equipo</h2>
                            <span class="wm-transparent-layer"></span>
                            <div class="wm-members-slider-wrap">
                                <?php $cont=0; ?>
                                <?php foreach($colaboradores as $key => $value ){ ?>
                                <?php $cont++; ?>
                                <div class="wm-members-slide-layer">
                                    <figure><a href="#"><img src="<?= URL::base() ?>/images/equipo/<?= $value->imagen ?>" alt=""></a>
                                        <figcaption>
                                            <div class="wm-members-caption">
                                                <h2><a href="#"><?= $value->nombres ?></a></h2>
                                                <span><?= $value->programa ?></span>
                                                <div class="clearfix"></div>
                                                <ul>
                                                    <li><a href="#" class="flaticon-social-1"></a></li>
                                                    <li><a href="#" class="flaticon-social-2"></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <!--// Band Members \\-->



                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <!--<div class="wm-main-section wm-tourfull">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 no-padding">
                        <figure class="wm-thumb-frame"><img src="images/extra-images/tour-thumb-bg.jpg" alt=""> <span class="wm-transparent-thumb"></span> </figure>
                    </div>
                    <div class="col-md-6 no-padding">

                        <div class="wm-wrap-spacer">
                            <div class="wm-tour-title-section">
                                <div class="wm-title-area">
                                    <span>Worldwide</span>
                                    <h2>Next Tours</h2>
                                </div>
                                <a class="wm-event-viewbtn" href="#"><span>See All</span></a>
                            </div>
                            <div class="wm-tour wm-tour-list">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <time datetime="2008-02-14 20:00">25/05/16 <span>18:00</span></time>
                                        <figure><a href="#"><img src="images/extra-images/tour-list-1.jpg" alt=""> <span class="wm-transparent-thumb"></span></a></figure>
                                        <h2><a href="#">David Gilmour <br> Marlins Park, Miami, Florida</a></h2>
                                        <div class="wm-tour-stock">
                                            <span>$70.99</span>
                                            <small>Few In Stock</small>
                                        </div>
                                        <a class="wm-tourbtn" href="#"><span><i class="flaticon-tool"></i> Buy</span></a>
                                    </li>
                                    <li class="col-md-12 wm-sold-tour">
                                        <time datetime="2008-02-14 20:00">27/05/16 <span>20:00</span></time>
                                        <figure><a href="#"><img src="images/extra-images/tour-list-2.jpg" alt=""> <span class="wm-transparent-thumb"></span></a></figure>
                                        <h2><a href="#">Rolling Stones <br> Morumbi, São Paulo, Brazil</a></h2>
                                        <div class="wm-tour-stock">
                                            <span>$250.99</span>
                                            <small>VIP Ticket</small>
                                        </div>
                                        <a class="wm-tourbtn" href="#"><span>Sold Out</span></a>
                                    </li>
                                    <li class="col-md-12 wm-cancelled-tour">
                                        <time datetime="2008-02-14 20:00">01/06/16 <span>19:00</span></time>
                                        <figure><a href="#"><img src="images/extra-images/tour-list-3.jpg" alt=""> <span class="wm-transparent-thumb"></span></a></figure>
                                        <h2><a href="#">Iron Maiden <br> Tulsa, Oklahoma, USA</a></h2>
                                        <div class="wm-tour-stock">
                                            <span>$199.00</span>
                                            <small>Today’s Deal</small>
                                        </div>
                                        <a class="wm-tourbtn" href="#"><span>Cancelled</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>-->
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <!--<div class="wm-main-section wm-featured-albumfull">
            <div class="container">
                <div class="row">-->

                    <!--// Item Information \\-->
                    <!--<div class="col-md-4">
                        <div class="wm-item-info">
                            <span>Discography</span>
                            <h2>Featured Albums</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitami. Phasellus vulputate eta ex eget feugiat. Cras eget odiom et sapien. Ut ius sit amet.</p>
                            <a class="wm-event-viewbtn" href="#"><span>View All</span></a>
                        </div>
                    </div>-->
                    <!--// Item Information \\-->

                    <!--// Featured Album \\-->
                    <!--<div class="col-md-8">
                        <div class="wm-album wm-featured-album">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure><a href="#"><img src="images/extra-images/featured-album-1.jpg" alt=""></a> <span class="wm-album-category">New Album</span>
                                        <a href="#" class="wm-featured-album-hover"><i class="flaticon-music"></i></a>
                                    </figure>
                                    <div class="wm-featured-album-text">
                                        <p>Summary: The third full-length release for the sister duo was produced by Paul Mahern.</p>
                                        <div class="wm-album-time">
                                            <time datetime="2008-02-14 20:00">26/02/2016</time>
                                            <a href="#" class="wm-track-btn">12 Tracks</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4 wm-featuredalbum">
                                    <figure><a href="#"><img src="images/extra-images/featured-album-2.jpg" alt=""></a> <span class="wm-album-category">Featured Album</span>
                                        <a href="#" class="wm-featured-album-hover"><i class="flaticon-music"></i></a>
                                    </figure>
                                    <div class="wm-featured-album-text">
                                        <p>Summary: The latest release from the British rock band was acoustic and live recorded  in one day.</p>
                                        <div class="wm-album-time">
                                            <time datetime="2008-02-14 20:00">13/01/2016</time>
                                            <a href="#" class="wm-track-btn">14 Tracks</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4 wm-freealbum">
                                    <figure><a href="#"><img src="images/extra-images/featured-album-3.jpg" alt=""></a> <span class="wm-album-category">Free Album</span>
                                        <a href="#" class="wm-featured-album-hover"><i class="flaticon-music"></i></a>
                                    </figure>
                                    <div class="wm-featured-album-text">
                                        <p>Summary: The electronic artist worked with Vampire Weekend's Rostam Bat on her third full-length release.</p>
                                        <div class="wm-album-time">
                                            <time datetime="2008-02-14 20:00">02/01/2016</time>
                                            <a href="#" class="wm-track-btn">9 Tracks</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>-->
                    <!--// Featured Album \\-->

                <!--</div>
            </div>
        </div>-->
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-element-holder-full2">
            <div class="container-fluid">
                <div class="row">

                    <!--// Update Blog \\-->
                    <!--<div class="col-md-6 no-padding">
                        <div class="wm-update-bloglist">

                            <div class="wm-update-title-area">
                                <div class="wm-left-section"><span>Our Blog</span> <h2>News & Updates</h2></div>
                                <a class="wm-event-viewbtn" href="#"><span>See All</span></a>
                            </div>

                            <div class="wm-update-blog-wrap">
                                <figure><a href="#"><img src="images/extra-images/update-blog-1.jpg" alt=""></a></figure>
                                <div class="wm-update-info">
                                    <h2><a href="#">Brand of bluegrass infused jams to the Wilma</a></h2>
                                    <ul class="wm-update-blog-options">
                                        <li>25/02/16</li>
                                        <li>4 comm</li>
                                        <li><a href="#">345 views</a></li>
                                    </ul>
                                    <p>Railroad Earth brought their own brand of bluegrass infused jams to the Wilma this past Thursday. After a three-year hiatus from the high mountain town it was cooler than... <a href="#" class="wm-color-one">Read More</a></p>
                                </div>
                            </div>

                        </div>
                    </div>-->
                    <!--// Update Blog \\-->

                    <!--// Our Store \\-->
                    <!--<div class="col-md-10 no-padding">
                        <div class="wm-store-wrap">
                            <div class="wm-check-store">
                                <h2>Check Our Store</h2>
                                <div class="wm-store-slider">

                                    <div class="wm-store-slide-layer">
                                        <figure><a href="#"><img src="images/extra-images/check-store-1.jpg" alt=""></a>
                                            <figcaption>
                                                <div class="wm-storebtn">
                                                    <a title="Add To Cart" href="#"><span><i class="flaticon-tool"></i></span></a>
                                                    <a title="Read More Details" href="#"><span><i class="flaticon-link"></i></span></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-ourstore-text">
                                            <small>Accessories</small>
                                            <span>$9.99</span>
                                            <ul>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                            </ul>
                                            <h2><a href="#">Bag Men’s Ware Music Beat</a></h2>
                                        </div>
                                    </div>
                                    <div class="wm-store-slide-layer">
                                        <figure><a href="#"><img src="images/extra-images/check-store-2.jpg" alt=""></a>
                                            <figcaption>
                                                <div class="wm-storebtn">
                                                    <a title="Add To Cart" href="#"><span><i class="flaticon-tool"></i></span></a>
                                                    <a title="Read More Details" href="#"><span><i class="flaticon-link"></i></span></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-ourstore-text">
                                            <small>Body Spray</small>
                                            <span>$5.99</span>
                                            <ul>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                            </ul>
                                            <h2><a href="#">Music Beat Body Sprays</a></h2>
                                        </div>
                                    </div>
                                    <div class="wm-store-slide-layer">
                                        <figure><a href="#"><img src="images/extra-images/check-store-3.jpg" alt=""></a>
                                            <figcaption>
                                                <div class="wm-storebtn">
                                                    <a title="Add To Cart" href="#"><span><i class="flaticon-tool"></i></span></a>
                                                    <a title="Read More Details" href="#"><span><i class="flaticon-link"></i></span></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-ourstore-text">
                                            <small>Clothing Apparel</small>
                                            <span>$12.99</span>
                                            <ul>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                            </ul>
                                            <h2><a href="#">Men’s T-shirt Music Beat</a></h2>
                                        </div>
                                    </div>
                                    <div class="wm-store-slide-layer">
                                        <figure><a href="#"><img src="images/extra-images/check-store-2.jpg" alt=""></a>
                                            <figcaption>
                                                <div class="wm-storebtn">
                                                    <a title="Add To Cart" href="#"><span><i class="flaticon-tool"></i></span></a>
                                                    <a title="Read More Details" href="#"><span><i class="flaticon-link"></i></span></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-ourstore-text">
                                            <small>Body Spray</small>
                                            <span>$5.99</span>
                                            <ul>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                                <li><a class="flaticon-technology" href="#"></a></li>
                                            </ul>
                                            <h2><a href="#">Music Beat Body Sprays</a></h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--// Our Store \\-->

                    <!--// Footer \\-->
                    <footer id="wm-footer" class="footer-one">

                        <!--// Footer Widget's \\-->
                        <div class="wm-footer-newslatter">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wm-footer-title"><h2>Boletines</h2></div>
                                        <p>Únete a nuestra lista de correo y recibe notificaciones cuando grabemos nuevos episodios.</p>
                                        <ul>
                                            <li><a target="_blank" href="https://www.facebook.com/Radiobabelatino/" class="flaticon-social-1"></a></li>
                                            <li><a target="_blank" href="https://twitter.com/JPatriciaSosa" class="flaticon-social-2"></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com/jeanneth_sosa/" class="fa fa-instagram"></a></li>
                                            <li><a target="_blank" href="https://www.youtube.com/results?search_query=babelatino" class="fa fa-youtube"></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/in/jeanneth-patricia-sosa-33646618/" class="fa fa-linkedin"></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                        <form>
                                            <input type="text" value="Su correo electrónico" onblur="if(this.value == '') { this.value ='Su correo electrónico'; }" onfocus="if(this.value =='Su correo electrónico') { this.value = ''; }">
                                            <input type="submit" value="Subscribe">
                                        </form>
                                    </div>
                                    <div class="col-md-12 wm-copyrights-section"><p>© 2023 Babelatino, Todos los derechos <a href="#">Reservados</a> - by <a href="#">Acepsistemas</a></p></div>
                                </div>
                            </div>
                        </div>
                        <!--// Footer Widget's \\-->

                    </footer>
                    <!--// Footer \\-->

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

    <div class="clearfix"></div>
</div>
<!--// Main Wrapper \\-->
