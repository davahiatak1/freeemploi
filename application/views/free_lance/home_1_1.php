
<?php
if (isset($_POST['resultat'])) {
    $search = $_POST['resultat'];

//    print_r($search);
}

//$search = $_POST['resultat'];
//echo $search;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Freelance::Accueil</title>
        <style>
            .btn:hover,
            .btn:focus,
            .btn:active{
                outline: 0 !important;
            }
            /* entire container, keeps perspective */
            .card-container {
                -webkit-perspective: 800px;
                -moz-perspective: 800px;
                -o-perspective: 800px;
                perspective: 800px;
                margin-bottom: 30px;
            }
            /* flip the pane when hovered */
            .card-container:not(.manual-flip):hover .card,
            .card-container.hover.manual-flip .card{
                -webkit-transform: rotateY( 180deg );
                -moz-transform: rotateY( 180deg );
                -o-transform: rotateY( 180deg );
                transform: rotateY( 180deg );
            }


            .card-container.static:hover .card,
            .card-container.static.hover .card {
                -webkit-transform: none;
                -moz-transform: none;
                -o-transform: none;
                transform: none;
            }
            /* flip speed goes here */
            .card {
                -webkit-transition: -webkit-transform .5s;
                -moz-transition: -moz-transform .5s;
                -o-transition: -o-transform .5s;
                transition: transform .5s;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                transform-style: preserve-3d;
                position: relative;
            }

            /* hide back of pane during swap */
            .front, .back {
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -o-backface-visibility: hidden;
                backface-visibility: hidden;
                position: absolute;
                top: 0;
                left: 0;
                background-color: #FFF;
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.14);
            }

            /* front pane, placed above back */
            .front {
                z-index: 2;
            }

            /* back, initially hidden pane */
            .back {
                -webkit-transform: rotateY( 180deg );
                -moz-transform: rotateY( 180deg );
                -o-transform: rotateY( 180deg );
                transform: rotateY( 180deg );
                z-index: 3;
            }

            .back .btn-simple{
                position: absolute;
                left: 0;
                bottom: 4px;
            }
            /*        Style       */


            .card{
                background: none repeat scroll 0 0 #FFFFFF;
                border-radius: 4px;
                color: #444444;
            }
            .card-container, .front, .back {
                width: 100%;
                height: 420px;
                border-radius: 4px;
                -webkit-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
                -moz-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
                box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
            }
            .card .cover{
                height: 105px;
                overflow: hidden;
                border-radius: 4px 4px 0 0;
            }
            .card .cover img{
                width: 100%;
            }
            .card .user{
                border-radius: 50%;
                display: block;
                height: 120px;
                margin: -55px auto 0;
                overflow: hidden;
                width: 120px;
            }
            .card .user img{
                background: none repeat scroll 0 0 #FFFFFF;
                border: 4px solid #FFFFFF;
                width: 100%;
            }

            .card .content{
                background-color: rgba(0, 0, 0, 0);
                box-shadow: none;
                padding: 10px 20px 20px;
            }
            .card .content .main {
                min-height: 160px;
            }
            .card .back .content .main {
                height: 215px;
            }
            .card .name {
                font-family: 'Arima Madurai', cursive;
                font-size: 22px;
                line-height: 28px;
                margin: 10px 0 0;
                text-align: center;
                text-transform: capitalize;
            }
            .card h5{
                margin: 5px 0;
                font-weight: 400;
                line-height: 20px;
            }
            .card .profession{
                color: #999999;
                text-align: center;
                margin-bottom: 20px;
            }
            .card .footers {
                border-top: 1px solid #EEEEEE;
                color: #999999;
                margin: 30px 0 0;
                padding: 10px 0 0;
                text-align: center;
            }
            .card .footers .social-links{
                font-size: 18px;
            }
            .card .footers .social-links a{
                margin: 0 7px;
            }
            .card .footers .btn-simple{
                margin-top: -6px;
            }
            .card .header {
                padding: 15px 20px;
                height: 90px;
            }
            .card .motto{
                font-family: 'Arima Madurai', cursive;
                border-bottom: 1px solid #EEEEEE;
                color: #999999;
                font-size: 14px;
                font-weight: 400;
                padding-bottom: 10px;
                text-align: center;
            }

            .card .stats-container{
                width: 100%;
                margin-top: 50px;
            }
            .card .stats{
                display: block;
                float: left;
                width: 33.333333%;
                text-align: center;
            }

            .card .stats:first-child{
                border-right: 1px solid #EEEEEE;
            }
            .card .stats:last-child{
                border-left: 1px solid #EEEEEE;
            }
            .card .stats h4{
                font-family: 'Arima Madurai', cursive;
                font-weight: 300;
                margin-bottom: 5px;
            }
            .card .stats p{
                color: #777777;
            }
            /*      Just for presentation        */

            .titles{
                color: #506A85;
                text-align: center;
                font-weight: 300;
                font-size: 44px;
                margin-bottom: 90px;
                line-height: 90%;
            }
            .titles small{
                font-size: 17px;
                color: #999;
                text-transform: uppercase;
                margin: 0;
            }
            .space-30{
                height: 30px;
                display: block;
            }
            .space-50{
                height: 50px;
                display: block;
            }
            .space-200{
                height: 200px;
                display: block;
            }
            .white-board{
                background-color: #FFFFFF;
                min-height: 200px;
                padding: 60px 60px 20px;
            }
            .ct-heart{
                color: #F74933;
            }

            pre.prettyprint{
                background-color: #ffffff;
                border: 1px solid #999;
                margin-top: 20px;
                padding: 20px;
                text-align: left;
            }
            .atv, .str{
                color: #05AE0E;
            }
            .tag, .pln, .kwd{
                color: #3472F7;
            }
            .atn{
                color: #2C93FF;
            }
            .pln{
                color: #333;
            }
            .com{
                color: #999;
            }

            .btn-simple{
                opacity: .8;
                color: #666666;
                background-color: transparent;
            }

            .btn-simple:hover,
            .btn-simple:focus{
                background-color: transparent;
                box-shadow: none;
                opacity: 1;
            }
            .btn-simple i{
                font-size: 16px;
            }

            .navbar-brand-logo{
                padding: 0;
            }
            .navbar-brand-logo .logo{
                border: 1px solid #333333;
                border-radius: 50%;
                float: left;
                overflow: hidden;
                width: 60px;
            }
            .navbar .navbar-brand-logo .brand{
                color: #FFFFFF;
                float: left;
                font-size: 18px;
                font-weight: 400;
                line-height: 20px;
                margin-left: 10px;
                margin-top: 10px;
                width: 60px;
            }
            .navbar-default .navbar-brand-logo .brand{
                color: #555;
            }


            /*       Fix bug for IE      */

            @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
                .front, .back{
                    -ms-backface-visibility: visible;
                    backface-visibility: visible;
                }

                .back {
                    visibility: hidden;
                    -ms-transition: all 0.2s cubic-bezier(.92,.01,.83,.67);
                }
                .front{
                    z-index: 4;
                }
                .card-container:not(.manual-flip):hover .back,
                .card-container.manual-flip.hover .back{
                    z-index: 5;
                    visibility: visible;
                }
            }
        </style>

    <div class="container-fluid content">
        <div class="row">
            <blockquote>
                <!--<h1 class="text-primary">Bienvenue <small class="text-primary">Freelance</small></h1>-->
                <p class="text-primary">Bienvenue</p>
                <small> Freelance</small>
            </blockquote>
            <!--<h1 class="text-primary">Bienvenue <small class="text-primary">Freelance</small></h1>-->
            <div class="col-sm-4 pull-right">
                <!--Acco-->
                <div class="col-sm-12 " >
                    <div class="panel panel-default ">
                        <div style="height: 5% " class="panel-heading collapsed" data-parent="#accordion" data-toggle="collapse"  href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <a href="#collapseOne">
                                <h4 style="margin-top: -5px" >Recherche <i style="float: right" class="fa fa-arrow-down "></i> </h4>
                            </a>
                        </div>
                        <div class="panel-body collapse" id="collapseOne"  role="tabpanel" aria-labelledby="headingOne">
                            <div class="">
                                <form class="form-horizontal" action="freeLance/search" method="post">
                                    <div class="form-group" >
                                        <!--<label class="col-xs-3 control-label">Color</label>-->
                                        <div class="col-xs-5 ">
                                            <select name="domaine" id="comboFD" >
                                                <option  selected disabled value="">Domaine</option>
                                                <optgroup label="">
                                                    <option value="Informatique">Informatique</option>
                                                    <option value="Graphistes_photographes" >Graphistes &amp; photographes</option>
                                                    <option value="Community_manager" >Community manager</option>
                                                    <option value="Webmasters" >Webmasters</option>
                                                    <option value="Administrateurs_systèmes_DBA" >Administrateurs systèmes &amp; DBA</option>
                                                </optgroup>
                                                <?php
//                                                    foreach ($this->session->userdata('listDomaine') as $row) {
//                                                    echo "<option value=".$row['idDomaine'].">".$row['nom']."</option>";
//                                                  }
                                                ?> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" >
                                        <!--<label class="col-xs-3 control-label">Color</label>-->
                                        <div class="col-xs-7 ">
                                            <select name="competence" id="comboFC"  size="10">
                                                <option  selected disabled value="">Compétences</option>
                                                <optgroup label="Développeurs Back-End">
                                                    <option value="Java">Java</option>
                                                    <option value="Php" >Php</option>
                                                    <option value="Php" >Php</option>
                                                    <option value="Zend" >Zend</option>
                                                    <option value="Symfony2" >Symfony2</option>
                                                    <option value="Python" >Python</option>
                                                    <option value="C#" >C#</option>
                                                    <option value="CMS" >CMS</option>
                                                </optgroup>
                                                <optgroup label="Développeurs Front-End">
                                                    <option value="Javascript">Javascript</option>
                                                    <option value="HTML5">HTML5</option>
                                                    <option value="AngularJS" >AngularJS</option>
                                                    <option value="jQueryr" >jQueryr</option>
                                                    <option value="Bootstrap" >Bootstrap</option>
                                                    <option value="CSS3" >CSS3</option>
                                                </optgroup>
                                                <optgroup label="Développeurs mobile">
                                                    <option value="Android">Android</option>
                                                    <option value="iOS" >iOS</option>
                                                    <option value="Cordova" >Cordova</option>
                                                    <option value="Xamarin" >Xamarin</option>
                                                    <option value="Phonegap" >Phonegap</option>
                                                </optgroup>
                                                <optgroup label="Webmasters">
                                                    <option value="Wordpress">Wordpress</option>
                                                    <option value="Joomla" >Joomla</option>
                                                    <option value="Drupal" >Drupal</option>
                                                    <option value="Prestashop" >Prestashop</option>
                                                </optgroup>
                                                <optgroup label="Administrateurs systèmes &amp; DBA">
                                                    <option value="Administrateurs_base_de_données">Administrateurs base de données</option>
                                                    <option value="Administrateurs_systèmes_et_réseaux" >Administrateurs systèmes et réseaux</option>
                                                    <option value="Experts_cybersécurité" >Experts cybersécurité</option>
                                                </optgroup>
                                                <optgroup label="Community managers">
                                                    <option value="Community_managers">Community managers</option>
                                                    <option value="Traducteurs" >Traducteurs</option>
                                                    <option value="Chargés_de_relations_presse" >Chargés de relations presse</option>
                                                </optgroup>
                                                <optgroup label="Graphistes &amp; photographes">
                                                    <option value="Webdesigners">Webdesigners</option>
                                                    <option value="Photographes" >Photographes</option>
                                                    <option value="Graphistes" >Graphistes</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!--                                    <a class="btn btn-default" href="">
                                                                            <span class="glyphicon glyphicon-search"></span>
                                                                        </a>-->
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>

                                </form>
                            </div> 

                        </div>
                    </div>
                </div>

            </div>
            <!--Account-->
            <!--            <div style="margin-top: -50px;z-index: 90000000000000000000000000000000;" class="col-md-3">
                            <a class="pull-right"  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <img style="width: content-box;height:45px ;margin-top: 10px ;margin-right: 10px" class="media-object img-responsive img-circle " src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                <i style="width: content-box;height:45px ;margin-top: 10px ;margin-right: 10px" class="media-object img-responsive img-circle fa fa-user fa-2x " ></i>
                            </a>
            
                            <div class=" panel panel-heading collapse pull-right" id="collapseExample">
            
                                <ul class="nav nav-pills nav-stacked">
                                    <h5 class="text-center"><?php echo $this->session->userdata('nom'); ?></h5>
                                    <hr/>
                                    <li  ><a href="<?php echo site_url('freeLance/update') ?>">Mise à jour</a></li>
                                    <li  ><a href="<?php echo site_url('accueil/deco') ?>">Déconnexion</a></li>
                                </ul>
                            </div>
                        </div>-->
        </div>

        <!--End Acco-->

        <!--LEFT SIDE-->
        <div class="row col-sm-8 pull-left">



            <div class="">
                <!--<pre><?php print_r($_POST['postulant']) ?></pre>-->

                <?php
                //$posts=$this->session->userdata('posts');
                $posts = $_POST['postulant'];


//                print_r($users);
// print_r($_POST['posts']);
                if ($posts): foreach ($posts as $post):
//                    if ($lances): foreach ($lances as $lancer):
                        ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading"> 
                                    <div class="media">
                                        <a class=" pull-left" href="#">
                                            <img class="media" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                        </a>


                                                     <!--<h4 style="margin-top: 50px" class="media-heading"><?php echo $this->session->userdata('pseudo'); ?></h4>-->
                                        <h4 style="margin-top: 50px" class="media-heading"><?php echo (isset($post['iduser'][0])) ? $post['iduser'][0]['nomuser'] : ""; ?></h4>

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
                                        <p style="display:inline-block;
                                           width:200px;
                                           white-space: nowrap;
                                           overflow:hidden !important;
                                           text-overflow: ellipsis;">
                                            <strong>Competence</strong>:<?php
                                            foreach ($compet as $comp) {
//                                                echo $comp." "; 
                                                echo implode("-", explode("_", $comp)) . ", ";
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

                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <p>
                                        <a href="<?php echo site_url("freeLance/send_mail/{$post['idPostulant']}") ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                    </p>
                                </div>
                            </div> 
                        </div>
                        <?php
                    endforeach;
//                    endif;
//                    endforeach;
                else:
                    ?>
                    <h2>Aucun profil disponible.</h2>
                <?php endif; ?>

            </div>
        </div>


        <!--NEW CARD-->

        <div class="">
            <?php
            //$posts=$this->session->userdata('posts');
            $posts = $_POST['postulant'];


//                print_r($users);
// print_r($_POST['posts']);
            if ($posts): foreach ($posts as $post):
//                    if ($lances): foreach ($lances as $lancer):
                    ?>


                    <div class="col-sm-6 col-md-4">
                        <div class="card-container manual-flip">

                            <div class="card">
                                <div class="front">
                                    <div class="cover">
                                        <img src="<?php echo base_url("asset/imgs/129556292-kyz84k3.jpg"); ?>">
                                    </div>
                                    <div class="user">
                                        <img class="img-circle" src="<?php echo base_url("asset/imgs/profile-Zeyad.jpg"); ?>">
                                    </div>
                                    <!-- Simple Pricing Tables -->
                                    <!--<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9155049400353686" data-ad-slot="6591520258" data-ad-format="auto" xoqznr6="" hidden=""></ins>-->
                                    <div class="content">
                                        <div class="main">
                                            <h3 class="name"><?php echo (isset($post['iduser'][0])) ? $post['iduser'][0]['nomuser'] : ""; ?></h3>

                                            <p class="profession"><?php echo $post['domaine']; ?></p>
                                            <p class="text-center">"Lamborghini Mercy <br>Your chick she so thirsty <br>I'm in that two seat Lambo"</p>
                                        </div>
                                        <div class="footers">
                                            <button class="btn btn-simple" onclick="rotateCard(this)">
                                                <i class="fa fa-mail-forward"></i> Manual Rotation
                                            </button>
                                        </div>
                                    </div>
                                </div> <!-- end front panel -->
                                <div class="back">
                                    <div class="header">
                                        <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <?php
                                            $compet = explode(",", $post['competence']);
                                            ?>
                                            <h4 class="text-center">Job Description</h4>
                                            <p style="overflow-wrap: break-word;"
                                               class="text-center"><?php
                                                   foreach ($compet as $comp) {
//                                                echo $comp." "; 
                                                       echo implode(" ", explode("_", $comp)) . ", ";
                                                   }
                                                   ?> </p>

                                            <div class="stats-container">
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
                                            </div>

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
                endforeach;
//                    endif;
//                    endforeach;
            else:
                ?>
                <h2>Aucun profil disponible.</h2>
<?php endif; ?>

        </div>
        <!-- End LEFT SIDE-->

        <!--Right Side-->

        <div class="row col-sm-4 pull-right" >
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div style=" " class="panel-heading collapsed" data-parent="#accordion"  data-toggle="collapse"  href="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                        <a href="#collapse2">
                            <h4 style="" >Derniers profil ajouté <i style="float: right" class="fa fa-arrow-right "></i> </h4>
                        </a>
                    </div>
                    <div class="panel-body collapse show " id="collapse23"  role="tabpanel" aria-labelledby="headingOne">
                        <div class="">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#">
                                    <img class="media-object" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                </a>
                                <div class="media-body">
                                    <!--<h4 class="media-heading">Jose Kinsella</h4>-->
                                    <h4 class="media-heading"><?php echo $this->session->userdata('pseudo'); ?></h4>
                                    <!--<h4 class="media-heading"><?php echo $this->session->userdata('nom'); ?></h4>-->
                                    <!--<p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>-->
                                    <p>
                                        <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                        <!--<a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>-->
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!--Right Side-->



    </div>




    <!--<div class="col-sm-6 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><a href="<?php echo site_url('freeLance/profil') ?>" class="pull-right " style=""> Tout voir</a> <h4>Domaine</h4></div>
                                    <div class="panel-body">
    
                                        <div >
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#">
                                                    <img class="media-object" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Jose Kinsella</h4>
                                                    <h4 class="media-heading"><?php echo $post['nom']; ?></h4>
                                                    <h4 class="media-heading"><?php echo $this->session->userdata('nom'); ?></h4>
                                                    <p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                                                            <p>
                                                        <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                                                        <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                                    </p>
                                                    <p>Niveau d'etude</p>
                                                    <p>Competence</p>
                                                    <p>Tarif moyen journalier</p>
                                                    <p>
                                                        <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                                        <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>-->