<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
use common\models\Slider;
use common\models\Colaboradores;
use common\models\Programas;

 $script = <<< JS
$(document).ready(function () {
    jQuery(document).ready(function ($) {
    });
});
JS;
$this->registerJs($script, View::POS_END);
?>
<!-- Begin Main -->
<div role="main" class="main">
    <!-- Begin Main Slide -->
    <section class="main-slide">
        <div id="owl-main-slide" class="owl-carousel pgl-main-slide" data-plugin-options='{"autoPlay": true}'>
            <div class="item" id="item1"><img src="<?= URL::base() ?>/images/slides/slider1.jpg" alt="Photo" class="img-responsive">
                <div class="item-caption">
                    <div class="container">
                        <div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">$13,000.00</span>
										<!--<span class="label"><a href="property-detail.html" class="btn-more">More Detail</a></span>-->
									</span>
                            <div class="property-thumb-info-content">
                                <h2><a href="property-detail.html">LOTICACIÓN ARCADIA</a></h2>
                                <p>Terreno de oportuniadad ubicado en Zhucay - La Troncal. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="item" id="item2"><img src="<?= URL::base() ?>/images/slides/slider2.jpg" alt="Photo" class="img-responsive">
                <div class="item-caption">
                    <div class="container">
                        <div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">$358,000</span>
										<span class="label"><a href="property-detail.html" class="btn-more">More Detail</a></span>
									</span>
                            <div class="property-thumb-info-content">
                                <h2><a href="property-detail.html">Presidential Parcel Frames Command Views of Mt. Rushmore</a></h2>
                                <p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item3"><img src="<?= URL::base() ?>/images/slides/slider3.jpg" alt="Photo" class="img-responsive">
                <div class="item-caption">
                    <div class="container">
                        <div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">$358,000</span>
										<span class="label"><a href="property-detail.html" class="btn-more">More Detail</a></span>
									</span>
                            <div class="property-thumb-info-content">
                                <h2><a href="property-detail.html">Alpine Rd, Stockton, CA 95215</a></h2>
                                <p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </section>
    <!-- End Main Slide -->

<!-- Begin Advanced Search -->
<section class="pgl-advanced-search pgl-bg-light">
    <div class="container">
        <form name="advancedsearch">
            <div class="row">
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <label class="sr-only" for="property-status">Tipo</label>
                        <select id="property-status" name="property-status" data-placeholder="Property Status" class="chosen-select" tabindex="1">
                            <option selected="selected" value="Property Status">Tipo</option>
                            <option value="venta">VENTA</option>
                            <option value="alquiler">ALQUILER</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <label class="sr-only" for="location">Location</label>
                        <select id="location" name="location" data-placeholder="Location" class="chosen-select" tabindex="2">
                            <option selected="selected" value="Location">País</option>
                            <?php foreach ($pais as $key => $value) { ?>
                                <option value="<?= $value->id ?>"><?= $value->nombre ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <label class="sr-only" for="property-types">Tipo</label>
                        <select id="property-types" name="property-types" data-placeholder="Property Types" class="chosen-select" tabindex="3">
                            <option selected="selected" value="Property Types">Tipo</option>
                            <?php foreach ($tipobien as $key => $value) { ?>
                                <option value="<?= $value->id ?>"><?= $value->tipo ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <label class="sr-only" for="area-from">Área</label>
                        <select id="area-from" name="area-from" data-placeholder="Area From" class="chosen-select" tabindex="4">
                            <option selected="selected" value="Area From">Área</option>
                            <option value="450">25 m2</option>
                            <option value="350">50 m2</option>
                            <option value="250">100 m2</option>
                            <option value="150">150 m2</option>
                            <option value="100">300 m2</option>
                            <option value="50">1000 m2</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <label class="sr-only" for="search-bedrooms">Dormitorios</label>
                        <select id="search-bedrooms" name="search-bedrooms" data-placeholder="Bedrooms" class="chosen-select" tabindex="5">
                            <option selected="selected" value="Bedrooms">Dormitorios</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="5plus">5+</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <label class="sr-only" for="search-bathrooms">Baños</label>
                        <select id="search-bathrooms" name="search-bathrooms" data-placeholder="Bathrooms" class="chosen-select">
                            <option selected="selected" value="Bathrooms">Baños</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="4plus">4+</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <div class="row pgl-narrow-row">
                            <div class="col-xs-6">
                                <label class="sr-only" for="search-minprice">Precio desde</label>
                                <select id="search-minprice" name="search-minprice" data-placeholder="Price From" class="chosen-select">
                                    <option selected="selected" value="Price From">Precio desde</option>
                                    <option value="0">$0</option>
                                    <option value="25000">$20,000</option>
                                    <option value="50000">$50,000</option>
                                    <option value="75000">$75,000</option>
                                    <option value="100000">$100,000</option>
                                    <option value="150000">$150,000</option>
                                    <option value="200000">$200,000</option>
                                    <option value="300000">$300,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="750000">$750,000</option>
                                    <option value="1000000">$1,000,000</option>
                                </select>
                            </div>
                            <div class="col-xs-6">
                                <label class="sr-only" for="search-maxprice">Precio Hasta</label>
                                <select id="search-maxprice" name="search-maxprice" data-placeholder="Price To" class="chosen-select">
                                    <option selected="selected" value="Price To">Precio Hasta</option>
                                    <option value="25000">$25,000</option>
                                    <option value="50000">$60,000</option>
                                    <option value="75000">$75,000</option>
                                    <option value="100000">$100,000</option>
                                    <option value="150000">$150,000</option>
                                    <option value="200000">$200,000</option>
                                    <option value="300000">$300,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="750000">$750,000</option>
                                    <option value="1000000">$1,000,000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Buscar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>
<!-- End Advanced Search -->

<!-- Begin Featured -->
<section class="pgl-featured pgl-bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 animation">
                <div class="pgl-property featured-item">
                    <div class="property-thumb-info">
                        <div class="property-thumb-info-image">
                            <img alt="" class="img-responsive" src="<?= URL::base() ?>/images/propiedades/<?= $propiedaddestacado->imagen ?>">
                        </div>
                        <div class="property-thumb-info-content">
                            <h3><a href="property-detail.html"><?= $propiedaddestacado->titulo ?></a></h3>
                            <p><?= $propiedaddestacado->descripcion ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php foreach ($propiedades as $key => $value){ ?>
            <div class="col-xs-6 col-md-3 animation">
                <div class="pgl-property featured-item">
                    <div class="property-thumb-info">
                        <div class="property-thumb-info-image">
                            <img alt="" class="img-responsive" src="<?= URL::base() ?>/images/propiedades/<?= $value->imagen ?>">
                        </div>
                        <div class="property-thumb-info-content">
                            <h3><a href="property-detail.html"><?= $value->titulo ?></a></h3>
                            <p><?= $value->descripcion ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <hr class="top-tall">
    </div>
</section>
<!-- End Featured -->
    <!-- Begin Agents -->
    <section class="pgl-agents">
        <div class="container">
            <h2>Nuestros Agentes</h2>
            <div class="row">
                <?php foreach ($colaboradores as $key => $value) { ?>
                <div class="col-md-6">
                    <div class="pgl-agent-item pgl-bg-light">
                        <div class="row pgl-midnarrow-row">
                            <div class="col-xs-5">
                                <div class="img-thumbnail-medium">
                                    <a href="agentprofile.html"><img src="<?= URL::base() ?>/images/agents/temp-agent.png" class="img-responsive" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="pgl-agent-info">
                                    <small>NO. <?=$value->orden ?></small>
                                    <h4><a href="agentprofile.html"><?=$value->nombres ?></a></h4>
                                    <p><?=$value->descripcion ?></p>
                                    <address>
                                        <i class="fa fa-phone"></i> Celular : <?=$value->telefono ?><br>
                                        <i class="fa fa-envelope-o"></i> Correo: <a href="mailto:<?=$value->mail ?>"><?=$value->mail ?>/a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <hr class="top-tall">
        </div>
    </section>
    <!-- End Agents -->

    <!-- Begin About -->
    <section class="pgl-about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animation about-item">
                    <h2 class="titulo-h2">¿Quienes somos?</h2>
                    <p><img src="<?= URL::base() ?>/images/content/demo-1.jpg" alt="" class="img-responsive"></p>
                    <p>Somos una empresa de muchos años de experiencia en el campo de venta de terrenos y construcción de proyectos inmobiliarios.</p>
                    <a href="about-us.html" class="btn btn-lg btn-default">Ver más</a>
                </div>
                <div class="col-md-4 animation about-item">
                    <h2 class="titulo-h2">¿Porqué elegirnos?</h2>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Mínimo Papeleo</a> </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Solicitud mínima de documentos para legalización de terrenos / casas / departamentos / lotes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Facilidades de Pago</a> </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body"> <p>Pagos por diferentes canales y planes de financiemiento (crédito).</p> </div>
                            </div>
                        </div>
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Entrega Inmediata *</a> </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Luego de la legalización se hace la entrega de inmediato.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFouth" class="collapsed">Papeleo Ágil</a> </h4>
                            </div>
                            <div id="collapseFouth" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Rapidez en nuestros trámites y legalizaciones.</p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed">Unique Design</a> </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-4 animation about-item">
                    <h2 class="titulo-h2">Clientes Satisfechos</h2>
                    <div class="owl-carousel pgl-bg-dark pgl-testimonial" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
                        <?php foreach ($clientessatisfechos as $key => $value) { ?>
                        <div class="col-md-12">
                            <div class="testimonial-author">
                                <div class="img-thumbnail-small img-circle">
                                    <img src="<?= URL::base() ?>/images/clientessatisfechos/<?= $value->imagen ?>" class="img-circle imagen-clientesatisfecho" alt="<?= $value->nombres ?>">
                                </div>
                                <h4><?= $value->nombres ?></h4>
                                <p><strong>Cliente</strong></p>
                            </div>
                            <div class="divider-quote-sign"><span>“</span></div>
                            <blockquote class="testimonial">
                                <p><?= $value->mensaje ?></p>
                            </blockquote>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->
</div>
<!-- End Main -->