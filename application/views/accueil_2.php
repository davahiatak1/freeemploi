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


        <!--    <div class="container-fluid header" style=" margin-top: 15px; margin-left: 25px">
                <div class="row header">
                    <div class="">
                        <img src="img/logo2.png" class="img-responsive">
                        <ul class="breadcrumb" style="background-color: white">
                            <li class="active"><a href="<?php site_url('Accueil/index') ?>">Accueil</a></li>
                                            <li><a href="#">Free-Lance</a></li>
                                            <li >Prêt</li>
                        </ul>
                    </div>
                    <div class=" ">
                        <blockquote>
                            <p> Free-Emploi</p>
                            <small> Bienvenue sur votre plateforme</small>
                        </blockquote>
                    </div>
                </div>
            </div>-->
    <!--<div>-->
<!--        <h1><strong class="text-success">Bien</strong><strong class="text-warning">ve</strong><strong class="text-danger">nue</strong> <strong class="text-muted">
        <?php
//                echo $this->session->userdata('nom');
        ?> </strong></h1>-->
<!--                <h4><strong>Hello</strong> <strong class="text-muted">
        <?php echo $this->session->userdata('nom'); ?> !!</strong></h4>-->

    <!--</div>-->


    <div class="container-fluid content">

        <!--<div class="col-sm-12">-->
        <!--Left SIDE-->
        <div class="col-sm-9">

            <!--Carousel-->
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!--Indicator-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1" ></li>
                    <li data-target="#carousel" data-slide-to="2" ></li>
                    <li data-target="#carousel" data-slide-to="3" ></li>
                </ol>
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
            <!--End carousel--> 

            <!--Activite-->

            <div>
                <h2>Activités </h2>
                <div class="container-fluid">
                    <div class="row">
                        <!--                        <div class="img-responsive col-sm-4">
                                                    <img class="img-responsive" src="<?php echo base_url("asset/img/ban1.jpg"); ?>" alt="Image-2">
                                                    <span class="fa fa-user fa-5x "></span>
                                                </div>
                        
                                                <div class=" col-sm-8">
                                                    <div class="" style="float: top;" >
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate Praesent eu est quilrs turpis posuere sodales. 
                                                            elit esse cillum dolore eu fugiat nulla pariatur. 
                                                            Lorem ipsum dolor. reprehenderit</p>
                                                        <p>Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere sodales. 
                                                            Mauris tempus placerat felvel iaculis.</p>
                        
                                                    </div>
                                                    <div class="" style="float: bottom; float: right;">
                                                        <a href="#">
                                                            <button class="btn btn-info "> <span class="glyphicon glyphicon-comment"> </span> <strong>Voir plus :)</strong></button>
                                                        </a>
                                                    </div>
                                                </div>-->
                        <?php
                        //$posts=$this->session->userdata('posts');
                        $posts = $_POST['posts'];
                        $users = $_POST['user'];


// print_r($_POST['posts']);
                        if ($posts): foreach ($posts as $post):
                        if ($users): foreach ($users as $user):
                        ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-info">
                                <div class="panel-heading"> 
                                    <div class="media">
                                        <!--                                        <a class=" pull-left" href="#">
                                                                                    <img class="media" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                                                                </a>-->

                                        <h5 style="margin-top:5px" class="media-heading"><?php echo $user['nom']; ?> <?php echo $user['prenom']; ?></h5>
                                        <!--<h4 style="margin-top: 5px" class="media-heading"><?php echo $user['prenom']; ?></h4>-->
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div>
                                        <?php
                                        $compet = explode(",", $post['competence']);
                                        ?>

                                        <p>Niveau d'etude</p>
                                        <!--<p style="overflow-wrap: break-word;">Competence:<?php echo $post['competence']; ?> </p>-->
                                        <!--<p style="word-break: break-all">Competence:<?php echo $post['competence']; ?> </p>-->
                                        <p >
                                            <strong>Competence</strong>:<?php
                                            foreach ($compet as $comp) {
                                            echo $comp . " ";
                                            }
                                            ?> 
                                        </p>
                                        <p>Tarif moyen journalier: <?php echo $post['tarif']; ?></p>
        <!--                                        <form method="post" action="<?php echo site_url('freeLance/profil') ?>">
                                            
                                            <input name="<?php $this->input->post('idPostulant') ?>" type="hidden">
                                            
                                            <input type="submit" value="tout voir 2">
                                        </form>-->

                                        <!--                         Procedure 1 
                                                               l'id a été dans l'url avec GET
                                                             de preference on devait faire un formulaire avec des input hidden et recuper les informations
                                                            sur le controleur freeLance/profil.
                                                            Apres avoir recuperer les donner (l'id) on le passe a un model ou on fait une requette pour 
                                                            recuperer les informations relative a cet utilisateur qu'on affiche ensuite-->
                                        <!--<a class="pull-right" href="<?php echo site_url("freeLance/profil/{$post['idPostulant']}") ?>" >
                                                                                        Tout voir</a>-->
                                        <!--Pour ce projet Nous utiliseront les Uri Routing de CI-->
                                        <a class="pull-right" href="<?php echo site_url("freeLance/profil/{$post['idPostulant']}") ?>" >
                                            Tout voir</a>
                                        <p>
                                            <a href="<?php echo site_url("freeLance/send_mail/{$post['idPostulant']}") ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="panel-footer">

                                </div>
                            </div> 
                        </div>
                        <?php
                        endforeach;
                        else:
                        ?>
                        <h2>Aucun profil disponible.</h2>
                        <?php endif; ?>

                    </div>

                    <div class="row" style="margin-top: 50px;">
                        <div class="img-responsive col-sm-4">
                            <!--<img class="img-responsive" src="<?php echo base_url("asset/img/ban1.jpg"); ?>" alt="Image-2">-->
                            <span class="fa fa-user fa-5x "></span>
                        </div>

                        <div class=" col-sm-8">
                            <div class="" style="float: top;">
                                <p>Duis aute irure dolor in reprehenderit in voluptate Praesent eu est quilrs turpis posuere sodales. 
                                    elit esse cillum dolore eu fugiat nulla pariatur. 
                                    Lorem ipsum dolor. reprehenderit</p>
                                <p>Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere sodales. 
                                    Mauris tempus placerat felvel iaculis.</p>

                            </div>
                            <div class="" style="float: bottom; float: right;">
                                <a href="#">
                                    <button class="btn btn-success "> <span class="glyphicon glyphicon-comment"> </span> <strong>Voir plus :)</strong></button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--                    <div class="row" style="margin-top: 50px;">
                                            <div class="img-responsive col-sm-4">
                                                <img class="img-responsive" src="<?php echo base_url("asset/img/ban1.jpg"); ?>" alt="Image-2">
                                                <span class="fa fa-user fa-5x "></span>
                                            </div>
                    
                                            <div class=" col-sm-8">
                                                <div class="" style="float: top;">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate Praesent eu est quilrs turpis posuere sodales. 
                                                        elit esse cillum dolore eu fugiat nulla pariatur. 
                                                        Lorem ipsum dolor. reprehenderit</p>
                                                    <p>Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere sodales. 
                                                        Mauris tempus placerat felvel iaculis.</p>
                    
                                                </div>
                                                <div class="" style="float: bottom; float: right;">
                                                    <a href="#">
                                                        <button class="btn btn-info "> <span class="glyphicon glyphicon-comment"> </span> <strong>Voir plus :)</strong></button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>-->
                </div>




            </div>


            <!--End Activite-->


        </div>
        <!--END Left SIDE-->


        <!--Right SIDE-->
        <div class="col-sm-3" style="margin-top: ">
            <h2>Nos services</h2>
            <div class=" placeholders">

                <div class="col-sm-12 ">
                    <!--<h4 style="margin-bottom: 20px ">Free Lance</h4>-->
                    <!--<hr/>-->
                    <a href="<?php echo site_url('FreeLance') ?>" class="pull-left" style="margin-top: 2%">
                        <img src="<?php echo base_url("asset/img/ban1.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">

                    </a>
                    <button class="btn btn-info btn-block "> <span class=""> </span> <strong class="text-center">Free Lance</strong></button>

                </div>
            </div>



            <div class=" placeholders">
                <div class="col-sm-12">
                    <!--<h4 style="margin-bottom: 20px; margin-top: 20px "></h4>-->
                    <hr/>
                    <a href="<?php echo site_url('FreePret') ?>" class="pull-left" style="margin-top: 2%">
                        <img src="<?php echo base_url("asset/img/ban2.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                    </a>
                    <button class="btn btn-block btn-success ">  <strong> Prêt de personnel</strong></button>

                </div>

            </div>



            <div class=" placeholders">
                <div class="col-sm-12 ">
                    <h4 style="margin-bottom: 20px; margin-top: 20px "></h4>
                    <hr/>
                    <a href="<?php echo site_url('Interview') ?>" class="pull-left" style="margin-top: 2%">
                        <img src="<?php echo base_url("asset/img/ban3.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                    </a>
                    <button class="btn btn-block btn-warning ">  <strong> Interview</strong></button>


                </div>
            </div>
        </div>

        <!--</div>-->
        <!--Right SIDE-->
    </div>










































<!--    <div class="">-->




        <!--Body tag-->





        <!--End Body tag-->



        <!--    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        
                <h1 class="page-header"style="color: #5bc0de; text-align: center;" >Pub</h1>
            </div>-->

<!--    </div>
    <div class="col-xs-4" >-->


        <!--<h1 class="page-header"style="color: #5bc0de; text-align: center;" >Nos Services</h1>-->
        <!--<h1 class="text-success">Nos Services</h1>-->

        <!--        <div class="row placeholders">
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
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <img src="<?php echo base_url("asset/img/ban4.jpg"); ?>" class="img-responsive" width="300" height="300"  alt="Generic placeholder thumbnail">
                                    <div class="elementBorder">
                                        <h4>Label</h4>
                                        <span class="text-muted">
                                            Morbi ac sapien id lectus fermentum aliquet. Nunc consectetur risus et 
                                            felis bibendum, at egestas dui pharetra.
                                        </span>
                                    </div>
                    
                                </div>
                </div>-->


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
