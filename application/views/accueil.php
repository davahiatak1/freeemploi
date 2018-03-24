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

        <!--<div class="container-fluid">-->
        <!--Carousel-->
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <!--Indicator-->
        <!--                <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1" ></li>
                            <li data-target="#carousel" data-slide-to="2" ></li>
                            <li data-target="#carousel" data-slide-to="3" ></li>
                        </ol>-->
        <!--Wrapper for slides-->
        <div class="carousel-inner img-responsive" role="listbox" style="height: 200px; width: 100%; margin-top: 0px;  ">
            <div class="item active">
                <div class="carousel-caption" >
                    <h1>Free Lance </h1>
                    <p>Les annonces pour Freelance.</p>
                </div>
                <img src="<?php echo base_url("asset/img/bg2.jpg"); ?>" class="img-responsive" alt="13">
            </div>
            <div class="item">
                <div class="carousel-caption" >
                    <h1>Prêt du personnel </h1>
                    <p>Les annonces pour Prêt salarié.</p>
                </div>
                <img src="<?php echo base_url("asset/img/bg1.jpg"); ?>" class="img-responsive" alt="14">
            </div>
            <div class="item">
                <div class="carousel-caption" >
                    <h1>Interview </h1>
                    <p>Organiser des inerview en ligne.</p>
                </div>
                <img src="<?php echo base_url("asset/img/bg3.jpg"); ?>" class="img-responsive" alt="14">
            </div>
        </div>

        <!--Controls-->

        <!--                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>-->
    </div>
    <!--End carousel--> 
    <!--</div>-->

    <div class="container-fluid content" style="padding: 0">

        <!--<div class="col-sm-12">-->
        <!--Left SIDE-->
        <div class="col-sm-9" style="padding: 0">



            <!--Activite-->

            <div>
                
                <div class="container-fluid">
                    <h2 style="font-size: 20px"><i></i>Ils font partir de la communauté </h2>
                    <div style="background-color:#e1e1e1;border-radius:10px; padding:10px;padding-top:3px;padding-bottom:3px;" >			
                    <div >
                        <h4 ><strong style="color:#208aaa"> Nos consultants en ligne </strong></h4>
                        <!--<hr style="margin-top: 0px" />-->
                        <!--<img src="<?php echo base_url("asset/imgs/svg.svg"); ?>">-->
                        
                        <!--<hr style="margin-top: 0px;" />-->
                        <!--<hr style="margin-top: 0px;" />-->
                    </div>
                    <div class="row  " style="margin-top: 0px; ">
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


                        $postulants = $_POST['postulant'];


//                        print_r($users);
// print_r($_POST['posts']);
                        $i = 0;
						$j = 0;
                        if ($postulants): foreach ($postulants as $post):
//                        if ($users): foreach ($users as $user):
                                ?>
                                <!--                                <div class="col-sm-6 col-md-4">
                                                                    <div style="border-radius: 4px;
                                                                         box-shadow: 0 0 8px 0 rgba(1, 0, 0, 0.16);
                                                                         width: 100%;" class="panel panel-info">
                                                                        <div class="panel-heading"> 
                                                                            <div class="media">
                                                                                <a class=" pull-left" href="#">
                                                                                    <img width="40px" height="40px" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                                                                </a>
                                
                                                                                                                        <h5 style="margin-top:5px" class="media-heading"><?php echo $post['iduser'][0]['nomuser']; ?> <?php echo $post['iduser'][0]['prenomuser']; ?></h5>
                                                                                <h5 style="margin-top:5px" class="media-heading"><span style="display:inline-block;
                                                                                                                                       width:50px;
                                                                                                                                       white-space: nowrap;
                                                                                                                                       overflow:hidden !important;
                                                                                                                                       text-overflow: ellipsis;
                                                                                                                                       margin-top: 5px"><?php echo $post['iduser'][0]['pseudo']; ?></span> <strong>|</strong> <?php echo $post['tarif']; ?> $ | <strong>Freelancer</strong></h5>
                                                                            </div>
                                
                                                                        </div>
                                                                        <div class="panel-body">
                                
                                                                            <div>
                                <?php
                                $compet = explode(",", $post['competence']);
                                ?>
                                
                                                                                <p><strong>Niveau d'etude</strong>: <?php echo $post['diplome']; ?></p>
                                                                                <p style="overflow-wrap: break-word;">Competence:<?php echo $post['competence']; ?> </p>
                                                                                <p style="word-break: break-all">Competence:<?php echo $post['competence']; ?> </p>
                                                                                <p style="display:inline-block;
                                                                                   width:205px;
                                                                                   white-space: nowrap;
                                                                                   overflow:hidden !important;
                                                                                   text-overflow: ellipsis;">
                                                                                    <strong>Competence</strong>: <?php
                                foreach ($compet as $comp) {
//                                            echo ($comp) . " ";
                                    echo implode("-", explode("_", $comp)) . ", ";
                                }
                                ?> 
                                                                                </p>
                                                                                <p><strong>Zone</strong>: <?php echo $post['adresse']; ?></p>
                                                                                        <form method="post" action="<?php echo site_url('freeLance/profil') ?>">
                                                                                    
                                                                                    <input name="<?php $this->input->post('idPostulant') ?>" type="hidden">
                                                                                    
                                                                                    <input type="submit" value="tout voir 2">
                                                                                </form>
                                
                                                                                                         Procedure 1 
                                                                                                       l'id a été dans l'url avec GET
                                                                                                     de preference on devait faire un formulaire avec des input hidden et recuper les informations
                                                                                                    sur le controleur freeLance/profil.
                                                                                                    Apres avoir recuperer les donner (l'id) on le passe a un model ou on fait une requette pour 
                                                                                                    recuperer les informations relative a cet utilisateur qu'on affiche ensuite
                                                                                <a class="pull-right" href="<?php echo site_url("freeLance/profil/{$post['idPostulant']}") ?>" >
                                                                                                                                Tout voir</a>
                                                                                Pour ce projet Nous utiliseront les Uri Routing de CI
                                                                                <a class="pull-right" href="<?php echo site_url("freeLance/profil/{$post['idPostulant']}") ?>" >
                                                                                    Tout voir</a>
                                                                                <p>
                                                                                    <a href="<?php echo site_url("freeLance/send_mail/{$post['idPostulant']}") ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                
                                                                    </div> 
                                                                </div>-->
                                <div class="col-sm-4 ">
                                    <div class="card-container manual-flip">

                                        <div class="card ">
                                            <div class="front ">
                                                <div class="cover">
                                                    <img src="<?php echo base_url("asset/imgs/svg.svg"); ?>">
                                                </div>
                                                <div class="user">
                                                    <img class="img-circle" src="<?php echo base_url($_POST['3lastUser'][$j]); ?>">
                                                </div>
                                                <!-- Simple Pricing Tables -->
                                                <!--<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9155049400353686" data-ad-slot="6591520258" data-ad-format="auto" xoqznr6="" hidden=""></ins>-->
                                                <div class="content ">
                                                    <div class="main">
                                                        <h3 style="margin-top: -10px" class="name"><?php echo (isset($post['iduser'][0])) ? $post['iduser'][0]['nomuser'] : ""; ?></h3>

                                                        <p class="profession"><?php echo $post['domaine']; ?>
                                                        <p style="margin-top: -20px"class="text-center">"Lamborghini Mercy "</p>
                                                        <!--<p style="margin-top: -10px"class="text-center"><?php echo $post['tarif']; ?> $</p>-->
                                                        </p>
                                                        <!--<p class="text-center">"Lamborghini Mercy <br>Your chick she so thirsty <br>I'm in that two seat Lambo"</p>-->

                                                    </div>
                                                    <div class="footers bg-info">
                                                        <button style="margin-top: -10px " class="btn btn-simple" onclick="rotateCard(this)">
                                                            <i class="fa fa-mail-forward"></i> Voir plus
                                                        </button>
                                                    </div>
                                                </div>
                                            </div> <!-- end front panel -->
                                            <div class="back">
                                                <!--                                                <div class="header">
                                                                                                    <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                                                                                </div>-->
                                                <div class="content">
                                                    <div class="main">
                                                        <?php
                                                        $compet = explode(",", $post['competence']);
                                                        ?>
                                                        <h4 class="text-center text-info">Competence</h4>
                                                        <p style="overflow-wrap: break-word;"
                                                           class="text-center"><?php
                                                               foreach ($compet as $comp) {
//                                                echo $comp." "; 
                                                                   echo implode(" ", explode("_", $comp)) . ", ";
                                                               }
                                                               ?> </p>

                                                        <div class="stats-container" style="margin-top: 0px">
                                                            <div class="stats">
                                                                <h4 class="text-info">Zone</h4>
                                                                <p> <?php echo $post['adresse']; ?></p>
                                                            </div>
                                                            <div class="stats">
                                                                <h4 class="text-info">Tarif</h4>
                                                                <p> <?php echo $post['tarif']; ?> $</p>
                                                            </div>
                                                            <div class="stats">
                                                                <h4 class="text-info">Diplome</h4>
                                                                <p> <?php echo $post['diplome']; ?></p>
                                                            </div>
                                                        </div>


                                                        <!--                                            <div class="stats-container">
                                                                                                        <div class="stats">
                                                                                                            <h4>235</h4>
                                                                                                            <p>
                                                                                                                Followers
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div class="stats">
                                                                                                            <h4>114</h4>
                                                                                                            <p>
                                                                                                                Following
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div class="stats">
                                                                                                            <h4>35</h4>
                                                                                                            <p>
                                                                                                                Projects
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>-->

                                                    </div>
                                                </div>
                                                <div class="footers">
                                                    <button class="btn btn-simple" rel="tooltip" titles="" onclick="rotateCard(this)" data-original-titles="Flip Card">
                                                        <i class="fa fa-reply"></i> Back
                                                    </button>
                                                    <div class="social-links text-center">
                                                        <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                                        <a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                                        <a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                                    </div>
                                                </div>
                                            </div> <!-- end back panel -->
                                        </div> <!-- end card -->
                                    </div> <!-- end card-container -->
                                </div> <!-- end col sm 3 -->
                                <?php
                                $i++;
								$j++;
                                if ($i == 3) {
                                    break;
                                }
                            endforeach;
//                        endif;
//                    endforeach;
                        else:
                            ?>
                            <h2>Aucun profil disponible.</h2>
                        <?php endif; ?>

                    </div>
					</div>
					</br>

					<div style="border-bottom: 1px solid #e1e1e1"></div>
                    </br>
                    <!--Second-->
                    <div style="background-color:#e1e1e1;border-radius:10px; padding:10px;padding-top:3px;padding-bottom:3px" >			
                    <div >
                        <h4 ><strong style="color:#5cb85c">Prêt de personnels en ligne </strong></h4>

                        <!--<hr style="margin-top: 0px" />-->
                        <!--<img src="<?php echo base_url("asset/imgs/svg.svg"); ?>">-->
                        
                        <!--<hr style="margin-top: 0px;" />-->
                        <!--<hr style="margin-top: 0px;" />-->
                    </div>

                    <div class="row" style="margin-top: 0px;">



                        <?php
                        $entreprises = $_POST['entreprise'];
                        ?>
<!--<pre><?php print_r($entreprises); ?></pre>-->

                        <?php
                        if ($entreprises): foreach ($entreprises as $ent):
//                        if ($users): foreach ($users as $user):
                                ?>
                                <div class="col-sm-6 col-md-4">
                                    <div style="border-radius: 4px;
                                         box-shadow: 0 0 8px 0 rgba(1, 1, 1, 0.16);
                                         width: 100%;" class="panel panel-success">
                                        <div class="panel-heading"> 
                                            <div class="media">
                                                <a class=" pull-left" href="#">
                                                    <img width="40px" height="40px" src="<?php echo base_url("asset/imgs/profile-Zeyad.jpg") ?>">
                                                </a>


                                                                                                     <!--<h4 style="margin-top: 50px" class="media-heading"><?php echo $this->session->userdata('pseudo'); ?></h4>-->
                                                                                                                <!--<h5 style="margin-top: 5px" class="media-heading"><?php echo (isset($ent['iduser'][0])) ? $ent['iduser'][0]['nomuser'] : ""; ?></h5>-->
                                                <h5 style="margin-top: 5px" class="media-heading"><span style="display:inline-block;
                                                                                                        width:100px;
                                                                                                        white-space: nowrap;
                                                                                                        overflow:hidden !important;
                                                                                                        text-overflow: ellipsis;
                                                                                                        margin-top: 5px"><?php echo (isset($ent['iduser'][0])) ? $ent['nomentreprise'] : ""; ?></span> | <strong>Entreprise</strong></h5>

                                            </div>
                                        </div>
                                        <div class="panel-body">

                                            <div>
                                                <?php
                                                $compet = explode(",", $ent['domaineprincipale']);
                                                ?>

                                                <p>Niveau d'etude</p>
                                                <!--<p style="overflow-wrap: break-word;">Competence:<?php echo $post['competence']; ?> </p>-->
                                                <!--<p style="word-break: break-all">Competence:<?php echo $post['competence']; ?> </p>-->
                                                <p >
                                                    <strong>Domaine pricipale</strong>:<?php
                                                    foreach ($compet as $comp) {
//                                                echo $comp." "; 
                                                        echo implode("-", explode("_", $comp)) . ". ";
                                                    }
                                                    ?> 
                                                </p>
                                                <p><strong>Zone</strong> : <?php echo $ent['ville']; ?> <strong>/</strong> <?php echo $ent['pays']; ?></p>
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
                                                <a class="pull-right" href="<?php echo site_url("freeLance/profil/{$ent['identreprise']}") ?>" >
                                                    Tout voir</a>
                                                <p>
                                                    <a href="<?php echo site_url("freeLance/send_mail/{$ent['identreprise']}") ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                                </p>
                                            </div>
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
                    </div>
                    </br>

                    <div style="border-bottom: 1px solid #e1e1e1"></div>
                    </br>
					
					<div style="background-color:#e1e1e1;border-radius:10px; padding:10px;padding-top:3px;padding-bottom:3px" >			
                    <div >
                        <h4 ><strong class="text-warning">Interview </strong></h4>

                    </div>
                    <!--<hr style="margin-top: 0px" />-->
                    <div class="row" style="margin-top: 0px;">



                        <?php
                        $entreprises = $_POST['entreprise'];
                        ?>
<!--<pre><?php print_r($entreprises); ?></pre>-->

                        <?php
                        if ($entreprises): foreach ($entreprises as $ent):
//                        if ($users): foreach ($users as $user):
                                ?>
                                <div class="col-sm-6 col-md-4">
                                    <div style="border-radius: 4px;
                                         box-shadow: 0 0 8px 0 rgba(1, 5, 1, 0.16);
                                         width: 100%;" class="panel panel-warning">
                                        <div class="panel-heading"> 
                                            <div class="media">
                                                <!--                                                <a class=" pull-left" href="#">
                                                                                                    <img class="media" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                                                                                </a>-->


                                                                                                     <!--<h4 style="margin-top: 50px" class="media-heading"><?php echo $this->session->userdata('pseudo'); ?></h4>-->
                                                <h5 style="margin-top: 5px" class="media-heading"><?php echo (isset($ent['iduser'][0])) ? $ent['nomentreprise'] : ""; ?></h5>

                                            </div>
                                        </div>
                                        <div class="panel-body">

                                            <div>
                                                <?php
                                                $compet = explode(",", $ent['domaineprincipale']);
                                                ?>
                                                <p class="card-text">
                                                    Bienvenue chère visiteur.  GCent Consulting Sarl est un cabinet informatique 
                                                    qui offre des stages de perfectionnement et des formatioons à chaque personne qualifié.
                                                </p>

                                                                                                                <!--<p>Niveau d'etude</p>-->
                                                                                                                <!--<p style="overflow-wrap: break-word;">Competence:<?php echo $post['competence']; ?> </p>-->
                                                                                                                <!--<p style="word-break: break-all">Competence:<?php echo $post['competence']; ?> </p>-->
                                                <p >
                                                   <!-- <strong>Domaine pricipale</strong>:--><?php
                                                    foreach ($compet as $comp) {
//                                                echo $comp." "; 
//                                                        echo implode("-", explode("_", $comp)) . ". ";
                                                    }
                                                    ?> 
                                                </p>
                                                <!--<p>Numero Reference : <?php echo $ent['numeroreference']; ?></p>-->
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
        <!--                                                <a class="pull-right" href="<?php echo site_url("freeLance/profil/{$ent['identreprise']}") ?>" >
                                                    Tout voir</a>-->
                                                <p>
                                                    <a href="<?php echo site_url("freeLance/send_mail/{$ent['identreprise']}") ?>" class="btn btn-block btn-xs btn-default"><span class="glyphicon glyphicon-inbox"></span> Interview</a>
                                                </p>
                                            </div>
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
            <h2 style="font-size: 20px">Nos services</h2>
            <div class=" placeholders">

                <div class="col-sm-12 ">
                    <!--<h4 style="margin-bottom: 20px ">Free Lance</h4>-->
                    <!--<hr/>-->
                    <a href="<?php echo site_url('FreeLance') ?>" class="pull-left" style="margin-top: 2%">
                        <img src="<?php echo base_url("asset/img/ban1.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                        <button class="btn btn-info btn-block "> <span class=""> </span> <strong class="text-center">Comminauté de Freelancer</strong></button>
                    </a>


                </div>

            </div>

            <div class=" placeholders">

                <div class="col-sm-12">
                </br>
                <div class="panel">
                    Rechercher des consultants ou se positionner comme 
                    consultant dans l'espace FreeLance
                </div>
                    
                </div>
            </div>


            <div class=" placeholders" style="margin-top:-25px">

                <div class="col-sm-12">
                   
                    <!--<h4 style="margin-bottom: 20px; margin-top: 20px "></h4>-->
                    <div class="bg-success" style="margin-top: 0px" >
                        <hr/>
                        <hr/>
                        <hr/>
                    </div>
                    <a href="<?php echo site_url('FreePret') ?>" class="pull-left" style="margin-top: 2%">
                        <img src="<?php echo base_url("asset/img/ban2.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                        <button class="btn btn-block btn-success ">  <strong> Communauté de prêts salariés</strong></button>
                    </a>

                </div>

            </div>

            <div class="placeholders">

                <div class="col-sm-12">
                    </br>
                    <div class="panel">
                        Vous cherchez à prêter votre salarié ou vous êtes à la recherche d'un prêt d'un salarié qualifié pour votre mission
                    </div>
                </div>
           
            </div>

            <div class=" placeholders" >
                <div class="col-sm-12 " style="margin-top: -20px">
                    
                    <h4 style="margin-bottom: 20px; margin-top: 20px "></h4>
                    <div class="bg-warning" style="margin-top: 30px" >
                        <hr/>
                        <hr/>
                        <hr/>
                    </div>
                    <a href="<?php echo site_url('Interview') ?>" class="pull-left" style="margin-top: 2%">
                        <img src="<?php echo base_url("asset/img/ban3.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                        <button class="btn btn-block btn-warning ">  <strong> Espace Interview</strong></button>
                    </a>



                </div>
            </div>

            <div class="placeholders">
                <div class="col-sm-12">
                    </br>
                    <div class="panel">
                        vous voulez faire une interview en ligne lors de vos recrutements.
                    </div>
                    
                </div>
            </div>
        </div>

        <!--</div>-->
        <!--Right SIDE-->
    </div>

