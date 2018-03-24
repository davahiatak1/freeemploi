<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Free-Emploi::Bienvenue</title>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="">
        <ul class="breadcrumb" style="margin-bottom: -550px; background-color: white">
            <li class="active"><a href="<?php site_url('Accueil/index') ?>">Accueil</a></li>
            <li><a href="#">Free-Lance</a></li>
            <li >Prêt</li>
        </ul>
    </div>


    <!--Carousel-->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"style="">
        <h1 class="text-success">En vedette</h1>
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <!--Indicator-->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1" ></li>
                <li data-target="#carousel" data-slide-to="2" ></li>
                <li data-target="#carousel" data-slide-to="3" ></li>
            </ol>
<!--height: 325px-->
            <!--Wrapper for slides-->
            <div class="carousel-inner img-responsive" role="listbox" style="height: 325px; margin-top: 0px; width: 100%;">
                <div class="item active">
                    <div class="carousel-caption" >
                        <h1>Free Lance </h1>
                        <p>Nunc consectetur risus et felis bibendum, at egestas dui pharetra.</p>
                    </div>
                    <img src="<?php echo base_url("asset/img/bg2.jpg"); ?>" class="img-responsive" alt="13">
                </div>
                <div class="item">
                    <div class="carousel-caption" >
                        <h1>Prêt du personnel </h1>
                        <p>Nunc consectetur risus et felis bibendum, at egestas dui pharetra.</p>
                    </div>
                    <img src="<?php echo base_url("asset/img/bg1.jpg"); ?>" class="img-responsive" alt="14">
                </div>
                <div class="item">
                    <div class="carousel-caption" >
                        <h1>Interview </h1>
                        <p>Nunc consectetur risus et felis bibendum, at egestas dui pharetra.</p>
                    </div>
                    <img src="<?php echo base_url("asset/img/bg3.jpg"); ?>" class="img-responsive" alt="14">
                </div>
                <div class="item">
                    <div class="carousel-caption" >
                        <h1>Morbi ac sapien  </h1>
                        <p>Nunc consectetur risus et felis bibendum, at egestas dui pharetra.</p>
                    </div>
                    <img src="<?php echo base_url("asset/img/bg4.jpg"); ?>" class="img-responsive" alt="14">
                </div>
            </div>

            <!--Controls-->

            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

    <!--End carousel--> 

    <!--Body tag-->

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: -40px">


        <!--<h1 class="page-header"style="color: #5bc0de; text-align: center;" >Nos Services</h1>-->
        <h1 class="text-success">Nos Services</h1>

        <div class="row placeholders">
            <a href="<?php echo site_url('FreeLance') ?>">
                <div class="col-xs-6 col-sm-4 placeholder">
                    <img src="<?php echo base_url("asset/img/ban1.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">


                    <div class="elementBorder">

                        <h4>Free Lance</h4>
                        <span class="text-muted" >
                            Morbi ac sapien id lectus fermentum aliquet. Nunc consectetur risus et 
                            felis bibendum, at egestas dui pharetra.
                        </span>

                    </div>

                </div>
            </a>

            <a href="<?php echo site_url('FreePret') ?>">
                <div class="col-xs-6 col-sm-4 placeholder">
                    <img src="<?php echo base_url("asset/img/ban2.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                    <div class="elementBorder">
                        <h4>Prêt de personnel</h4>
                        <span class="text-muted">
                            Morbi ac sapien id lectus fermentum aliquet. Nunc consectetur risus et 
                            felis bibendum, at egestas dui pharetra.
                        </span>
                    </div>

                </div>
            </a>
            
            <div class="col-xs-6 col-sm-4 placeholder">
                <img src="<?php echo base_url("asset/img/ban3.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                <div class="elementBorder">
                    <h4>Interview</h4>
                    <span class="text-muted">
                        Morbi ac sapien id lectus fermentum aliquet. Nunc consectetur risus et 
                        felis bibendum, at egestas dui pharetra.
                    </span>
                </div>

            </div>
            <!--            <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="<?php echo base_url("asset/img/ban4.jpg"); ?>" class="img-responsive" width="300" height="300"  alt="Generic placeholder thumbnail">
                            <div class="elementBorder">
                                <h4>Label</h4>
                                <span class="text-muted">
                                    Morbi ac sapien id lectus fermentum aliquet. Nunc consectetur risus et 
                                    felis bibendum, at egestas dui pharetra.
                                </span>
                            </div>
            
                        </div>-->
        </div>


        <!-- About -->
<!--        <div class="content-agileits" id="about">
            <div class="welcome-w3">


                Début de la boucle de pagination

                <div class="pagination-container" >
                    <div data-page="1" >
                        <div class="welcome-grids">
                            <div class="col-md-4 ">
                                <div class="port-7 effect-2" style="margin-top: 70px;">
                                    <div class="img-responsive ">
                                        <img src="<?php echo base_url("asset/img/ban1.jpg"); ?>" alt="Image-2">
                                    </div>
                                    <div class="text-desc">
                                        <h4>Free Lance</h4>
                                        <p>Bienvenue sur votre plateforme free lance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 wel-grid">
                                <div class="row">
                                    <div class="" style="float: top;">
                                        <h2 class="text-success">Free-Lance </h2>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate Praesent eu est quilrs turpis posuere sodales. 
                                            elit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                        <legend>Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere sodales. 
                                            Mauris tempus placerat felvel iaculis.</legend>
                                    </div>
                                    <div class="" style="float: bottom; float: right;">
                                        <a href="#">
                                            <button class="btn btn-info "> <span class="glyphicon glyphicon-comment"> </span> <strong>Allez !!! Commencez la visite de la plateforme :)</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-page="2" style="display:none;">
                        <div class="welcome-grids">
                            <div class="col-md-4 ">
                                <div class="port-7 effect-2" style="margin-top: 70px;">
                                    <div class="img-responsive ">
                                        <img src="<?php echo base_url("asset/img/ban2.jpg"); ?>" alt="Image-2">
                                    </div>
                                    <div class="text-desc">
                                        <h4>Prêt Employé</h4>
                                        <p>Bienvenue sur votre plateforme free lance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 wel-grid">
                                <div class="row">
                                    <div class="" style="float: top;">
                                        <h2 class="text-success">Prêt Employé</h2>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate Praesent eu est quilrs turpis posuere sodales. 
                                            elit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                        <legend>Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere sodales. 
                                            Mauris tempus placerat felvel iaculis.</legend>
                                    </div>
                                    <div class="" style="float: bottom; float: right;">
                                        <a href="#">
                                            <button class="btn btn-info "> <span class="glyphicon glyphicon-comment"> </span> <strong>Allez !!! Commencez la visite de la plateforme :)</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-page="3" style="display:none;">
                        <div class="welcome-grids">
                            <div class="col-md-4 ">
                                <div class="port-7 effect-2" style="margin-top: 70px;">
                                    <div class="img-responsive ">
                                        <img src="<?php echo base_url("asset/img/ban3.jpg"); ?>" alt="Image-2">
                                    </div>
                                    <div class="text-desc">
                                        <h4>Interview</h4>
                                        <p>Bienvenue sur votre plateforme free lance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 wel-grid">
                                <div class="row">
                                    <div class="" style="float: top;">
                                        <h2 class="text-success">Interview</h2>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate Praesent eu est quilrs turpis posuere sodales. 
                                            elit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                        <legend>Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere sodales. 
                                            Mauris tempus placerat felvel iaculis.</legend>
                                    </div>
                                    <div class="" style="float: bottom; float: right;">
                                        <a href="#">
                                            <button class="btn btn-info "> <span class="glyphicon glyphicon-comment"> </span> <strong>Allez !!! Commencez la visite de la plateforme :)</strong></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                        <div data-page="4" style="display:none;">
                                            <p>Content for Div Number 4</p>
                                        </div>
                                        <div data-page="5" style="display:none;">
                                            <p>Content for Div Number 5</p>
                                        </div>

                    <div class="text-center">
                        <div class="pagination pagination-centered">
                            <ul class="pagination ">
                                <li data-page="-" ><a href="#" >&lt;</a></li>
                                <li data-page="1"><a href="#" >1</a></li>
                                <li data-page="2"><a href="#" >2</a></li>
                                <li data-page="3"><a href="#" >3</a></li>
                                                                <li data-page="4"><a href="#" >4</a></li>
                                                                <li data-page="5"><a href="#" >5</a></li>
                                <li data-page="+"><a href="#" >&gt;</a></li>
                            </ul>
                        </div></div></div>
                Fin Début de la boucle de pagination

            </div>
        </div>-->
        <!-- //About -->


        <script src="<?= base_url() ?>asset/js/jquery-2.1.4.min.js"></script>
        <script>
            var paginationHandler = function () {
                // store pagination container so we only select it once
                var $paginationContainer = $(".pagination-container"),
                        $pagination = $paginationContainer.find('.pagination ul');
                // click event
                $pagination.find("li a").on('click.pageChange', function (e) {
                    e.preventDefault();
                    // get parent li's data-page attribute and current page
                    var parentLiPage = $(this).parent('li').data("page"),
                            currentPage = parseInt($(".pagination-container div[data-page]:visible").data('page')),
                            numPages = $paginationContainer.find("div[data-page]").length;
                    // make sure they aren't clicking the current page
                    if (parseInt(parentLiPage) !== parseInt(currentPage)) {
                        // hide the current page
                        $paginationContainer.find("div[data-page]:visible").hide();
                        if (parentLiPage === '+') {
                            // next page
                            $paginationContainer.find("div[data-page=" + (currentPage + 1 > numPages ? numPages : currentPage + 1) + "]").show();
                        } else if (parentLiPage === '-') {
                            // previous page
                            $paginationContainer.find("div[data-page=" + (currentPage - 1 < 1 ? 1 : currentPage - 1) + "]").show();
                        } else {
                            // specific page
                            $paginationContainer.find("div[data-page=" + parseInt(parentLiPage) + "]").show();
                        }
                    }
                });
            };
            $(document).ready(paginationHandler);
        </script>

    </div>



    <!--End Body tag-->



    <!--    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    
            <h1 class="page-header"style="color: #5bc0de; text-align: center;" >Pub</h1>
        </div>-->


</div>
