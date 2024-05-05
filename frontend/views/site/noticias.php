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


<div class="wm-mini-header">
    <span class="wm-black-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-page-heading">
                    <h1>Noticias</h1>
                    <p>Noticias Generales</p>
                </div>
                <div class="clearfix"></div>
                <ul class="wm-breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li>Noticias</li>
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
                <aside class="col-md-3">
                    <!--<div class="widget widget_add">
                        <a href="#"><img alt="" src="extra-images/widget-add.jpg"></a>
                    </div>
                    <div class="widget widget_artists">
                        <div class="wm-widget-heading">
                            <h2>featured artists:</h2>
                        </div>
                        <ul>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/featured-widget-1.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <h3><a href="#">Annie Myers–Pop</a></h3>
                                    <a href="#">9 Albums on Sale</a>
                                    <div class="clearfix"></div>
                                </section>
                            </li>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/featured-widget-2.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <h3><a href="#">Annie Myers–Pop</a></h3>
                                    <a href="#">7 Albums on Sale</a>
                                    <div class="clearfix"></div>
                                </section>
                            </li>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/featured-widget-3.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <h3><a href="#">Ralph Franz–Rock</a></h3>
                                    <a href="#">8 Albums on Sale</a>
                                    <div class="clearfix"></div>
                                </section>
                        </ul>
                    </div>
                    <div class="widget widget_upcoming_listing">
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
                    </div>
                    <div class="widget widget_recent_post">
                        <div class="wm-widget-heading">
                            <h2>recent posts</h2>
                        </div>
                        <ul>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/recent-widget-1.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <a href="#">
                                        <h3>Capitán Tapón</h3>
                                        <h4>Alejandro Sanz</h4>
                                    </a> <a href="#">Read More<i class="flaticon-arrows"></i> </a>
                                    <div class="clearfix"></div>
                                </section>
                            </li>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/recent-widget-2.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <a href="#">
                                        <h3>Chrome Pony</h3>
                                        <h4>stopped by</h4>
                                    </a> <a href="#">Read More<i class="flaticon-arrows"></i> </a>
                                    <div class="clearfix"></div>
                                </section>
                            </li>
                            <li>
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/recent-widget-3.jpg"></a>
                                </figure>
                                <section class="wm-newsinfo">
                                    <a href="#">
                                        <h3>Although Lana </h3>
                                        <h4>Del Rey is huge</h4>
                                    </a> <a href="#">Read More<i class="flaticon-arrows"></i> </a>
                                    <div class="clearfix"></div>
                                </section>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_archive">
                        <div class="wm-widget-heading">
                            <h2>Calendar archive</h2>
                        </div>
                        <ul>
                            <li><a href="#">March 2016</a></li>
                            <li><a href="#">February 2016</a></li>
                            <li><a href="#">January 2016</a></li>
                            <li><a href="#">December 2015</a></li>
                        </ul>
                    </div>
                    <div class="widget widget_comments">
                        <div class="wm-widget-heading">
                            <h2>recent comments</h2>
                        </div>
                        <ul>
                            <li><a href="#">Jessica posted on<em> Getting Your Co...</em></a></li>
                            <li><a href="#">Meredith posted on<em> Music Festival</em></a></li>
                            <li><a href="#">Derrick54 posted on<em> Los Angeles...</em></a></li>
                            <li><a href="#">DoloresM posted on<em> Christian Met...</em></a></li>
                        </ul>
                    </div>
                    <div class="widget widget_categories">
                        <div class="wm-widget-heading">
                            <h2>Categories</h2>
                        </div>
                        <ul>
                            <li><a href="#">Music Festivals</a></li>
                            <li><a href="#">Concerts</a></li>
                            <li><a href="#">Worldwide</a></li>
                            <li><a href="#">Fan Group</a></li>
                        </ul>
                    </div>-->
                </aside>
                <div class="col-md-9">
                    <div class="wm-blog wm-blog-mediam">
                        <ul class="row">
                            <?php $cont=0; ?>
                            <?php foreach($noticias as $key => $value ){ ?>
                            <?php $cont++; ?>
                            <li class="col-md-12" >
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img style="max-width: 320px;" alt="" src="<?= URL::base() ?>/images/noticias/<?= $value->imagen ?>"> </a>
                                    <a href="#" class="wm-featured-post">Noticia Destacada</a>
                                </figure>
                                <div class="wm-blog-text" style="padding-bottom: 20px;">
                                    <h2><a href="#"><?= $value->titulo ?></a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">0 Likes</a></li>
                                        <li>Creado por:<a href="#"> Babelatino</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">0</a></li>
                                    </ul>
                                    <p><?= $value->extracto ?></p>
                                    <span><a href="#">Leer Noticia</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <?php } ?>
                            <!--<li class="col-md-12">
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img alt="" src="extra-images/blog-mediam-2.jpg"> </a>
                                </figure>
                                <div class="wm-blog-text">
                                    <h2><a href="#">Win a WayHome prize pack!</a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">17 Likes</a></li>
                                        <li>Posted By:<a href="#"> Meredith Hor</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">20</a></li>
                                    </ul>
                                    <p>Welcome to a brand-new episode of In The Loop! Today AMBY owner Aliciais here about an amazing WayHome </p>
                                    <span><a href="#">Read Article</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img alt="" src="extra-images/blog-mediam-3.jpg"> </a>
                                </figure>
                                <div class="wm-blog-text">
                                    <h2><a href="#">Photos: Marina and the Diamonds @ Roundhouse</a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">14 Likes</a></li>
                                        <li>Posted By:<a href="#"> Jessica Forgers</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">13</a></li>
                                    </ul>
                                    <p>Follow updates from Marina and the Diamonds here. Photos by Daniel Robson | @danielnrobson | Website […]</p>
                                    <span><a href="#">Read Article</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img alt="" src="extra-images/blog-mediam-4.jpg"> </a> <a href="#" class="wm-featured-post">Featured Post</a> </figure>
                                <div class="wm-blog-text">
                                    <h2><a href="#">Shearwater and Cross Record @ Night & Day Cafe</a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">17 Likes</a></li>
                                        <li>Posted By:<a href="#"> Jessica Forgers</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">31</a></li>
                                    </ul>
                                    <p>Ross Mitchell is a brilliant solo musician from Scotland who has a talent for song writing as well as singing.</p>
                                    <span><a href="#">Read Article</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img alt="" src="extra-images/blog-mediam-5.jpg"> </a>
                                </figure>
                                <div class="wm-blog-text">
                                    <h2><a href="#">Answers: A Video Interview w/ Neck Deep</a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">19 Likes</a></li>
                                        <li>Posted By:<a href="#"> Jessica Forgers</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">24</a></li>
                                    </ul>
                                    <p>It wasn’t until the release of fourth record Palo Santo in 2006 that people began to take Shearwater seriously.</p>
                                    <span><a href="#">Read Article</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img alt="" src="extra-images/blog-mediam-6.jpg"> </a>
                                </figure>
                                <div class="wm-blog-text">
                                    <h2><a href="#">Blajk @ The Mod Club – Toronto</a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">21 Likes</a></li>
                                        <li>Posted By:<a href="#"> Jessica Forgers</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">18</a></li>
                                    </ul>
                                    <p>The Dirty Nil Solids Century Palm Casper Skulls *** For all features and interviews with The Dirty Nil, click here […]</p>
                                    <span><a href="#">Read Article</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img alt="" src="extra-images/blog-mediam-7.jpg"> </a>
                                </figure>
                                <div class="wm-blog-text">
                                    <h2><a href="#">Metalcore group For Today kicked off their 2016 </a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">21 Likes</a></li>
                                        <li>Posted By:<a href="#"> Carmen mendez</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">22</a></li>
                                    </ul>
                                    <p>TFollow updates from Marina and the Diamonds here. Photos by Daniel Robson | @danielnrobson | Website […]</p>
                                    <span><a href="#">Read Article</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img alt="" src="extra-images/blog-mediam-8.jpg"> </a>
                                </figure>
                                <div class="wm-blog-text">
                                    <h2><a href="#">Los Angeles fans on February 9th.</a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">15 Likes</a></li>
                                        <li>Posted By:<a href="#"> Mary Ann</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">29</a></li>
                                    </ul>
                                    <p>Ross Mitchell is a brilliant solo musician from Scotland who has a talent for song writing as well as singing.</p>
                                    <span><a href="#">Read Article</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img alt="" src="extra-images/blog-mediam-9.jpg"> </a>
                                </figure>
                                <div class="wm-blog-text">
                                    <h2><a href="#">US bands Cage The Elephant and Chrome Pony.</a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">32 Likes</a></li>
                                        <li>Posted By:<a href="#"> Mark James</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">24</a></li>
                                    </ul>
                                    <p>It wasn’t until the release of fourth record Palo Santo in 2006 that people began to take Shearwater seriously. The</p>
                                    <span><a href="#">Read Article</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="col-md-12">
                                <a href="#"> </a>
                                <figure>
                                    <a href="#"> <img alt="" src="extra-images/blog-mediam-10.jpg"> </a> <a href="#" class="wm-featured-post">Featured Post</a> </figure>
                                <div class="wm-blog-text">
                                    <h2><a href="#">Denmark on the last night of this year's European </a></h2>
                                    <ul class="blog-post-options">
                                        <li><i class="flaticon-shape-1"></i><a href="#">21 Likes</a></li>
                                        <li>Posted By:<a href="#"> Dana Mokers</a></li>
                                        <li><i class="flaticon-social-5"></i><a href="#">43</a></li>
                                    </ul>
                                    <p>The Dirty Nil Solids Century Palm Casper Skulls *** For all features and interviews with The Dirty Nil, click here […]</p>
                                    <span><a href="#">Read Article</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </li>-->
                        </ul>
                        <div class="wm-pagination-wrap">
                            <ul class="wm-pagination">
                                <li><a href="#">1</a></li>
                                <!--<li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li> . . . </li>
                                <li><a href="#">38</a></li>-->
                                <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            </ul>
                        </div>
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
    <div class="wm-footer-widgets">
        <div class="container">
            <div class="row">

            </div>
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