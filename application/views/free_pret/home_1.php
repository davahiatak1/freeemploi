
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prêt Employé::Accueil</title>

        <!--    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <ul class="breadcrumb" style="margin-bottom: -5px; background-color: white">
                    <li class="active"><a href="<?php site_url('FreeLance') ?>">Free-Lance</a></li>
                    <li >Accueil</li>            
                </ul>
            </div>-->
    <div class="container-fluid contents">


        <div class="row">
            <blockquote>
                    <!--<h1 class="text-primary">Bienvenue <small class="text-primary">Freelance</small></h1>-->
                <p class="text-success">Bienvenue</p>
                <small> Prêt d'employé</small>
            </blockquote>
            <div class="col-sm-4 pull-right">
                <!--<h1 class="text-primary">Bienvenue <small class="text-primary">Prêt Employé</small></h1>-->

                <!--Acco-->
                <div class="col-sm-12">
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
                                            <select name="entreprise" id="comboPE" >
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
        </div>





        <div class="row col-sm-9 ">
            <div class="col-sm-12">

                <?php
                //$posts=$this->session->userdata('posts');
                //$posts = $_POST['posts'];
// print_r($_POST['posts']);
                $logo=["l3.jpg","l2.PNG","l1.jpg"];
                $entreprises = $_POST['entreprise'];
                if ($entreprises): foreach ($entreprises as $key =>$post):
                        ?>
                        <div class=" col-sm-4">
                            <!--                        <div class="panel panel-default">
                                                        <div class="panel-heading"> 
                                                            <div class="media">
                                                                <a class=" pull-left" href="#">
                                                                    <img class="media" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                                                </a>
                            
                            
                                                                                 <h4 style="margin-top: 50px" class="media-heading"><?php echo $this->session->userdata('pseudo'); ?></h4>
                                                                                        <h4 style="margin-top: 50px" class="media-heading"><?php echo (isset($post['iduser'][0])) ? $post['iduser'][0]['nomuser'] : ""; ?></h4>
                                                                <h4 style="margin-top: 50px" class="media-heading"><?php echo (isset($post['iduser'][0])) ? $post['nomentreprise'] : ""; ?></h4>
                            
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                            
                                                            <div>
                            <?php
                            $compet = explode(",", $post['domaineprincipale']);
                            ?>
                            
                                                                <p>Niveau d'etude</p>
                                                                <p style="overflow-wrap: break-word;">Competence:<?php echo $post['competence']; ?> </p>
                                                                <p style="word-break: break-all">Competence:<?php echo $post['competence']; ?> </p>
                                                                <p >
                                                                    <strong>Domaine pricipale</strong>:<?php
                            foreach ($compet as $comp) {
//                                                echo $comp." "; 
                                echo implode("-", explode("_", $comp)) . ". ";
                            }
                            ?> 
                                                                </p>
                                                                <p>Numero Reference : <?php echo $post['numeroreference']; ?></p>
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
                                                                <a class="pull-right" href="<?php echo site_url("freeLance/profil/{$post['identreprise']}") ?>" >
                                                                    Tout voir</a>
                            
                                                            </div>
                                                        </div>
                                                        <div class="panel-footer">
                                                            <p>
                                                                <a href="<?php echo site_url("freeLance/send_mail/{$post['identreprise']}") ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                                            </p>
                                                        </div>
                                                    </div> -->
                            <!--NEW CARD-->
                            <div class="card-container manual-flip">

                                <div class="card ">
                                    <div class="front ">
                                    <!--                
                                    <div class="cover bg-primary">
                                        <img src="<?php echo base_url("asset/imgs/129556292-kyz84k3.jpg"); ?>">
                                    </div>-->
                                        <div class="user">
                                            <img class="img-circle" src="<?php echo base_url("asset/imgs/{$logo[$key]}"); ?>">
                                        </div>
                                        <!-- Simple Pricing Tables -->
                                        <!--<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9155049400353686" data-ad-slot="6591520258" data-ad-format="auto" xoqznr6="" hidden=""></ins>-->
                                        <div class="content ">
                                            <div class="main">
                                                <h4 style="margin-top: -10px" class="name"><?php echo (isset($post['iduser'][0])) ? $post['nomentreprise'] : ""; ?></h4>

                                                <?php
                                                $compet = explode(",", $post['domaineprincipale']);
                                                ?>

                                                <p class=" profession">
                                                    <strong>Domaine pricipale</strong>:<?php
                                                    foreach ($compet as $comp) {
                                                        //echo $comp." "; 
                                                        echo implode("-", explode("_", $comp)) . ". ";
                                                    }
                                                    ?> 
                                                </p>

                                                <p style="margin-top: 20px " class="text-center"><strong>Numero Reference :</strong> <?php echo $post['numeroreference']; ?></p>


                                            </div>
                                            <div class="footers">
                                                <button style="margin-top: 10px " class="btn btn-simple pull-left" onclick="rotateCard(this)">
                                                    <!--<i class="fa fa-mail-forward"></i> Voir plus-->
                                                    <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                                </button>
                                                <div style="margin-top: 20px" class="social-links text-center pull-right">
                                                    <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                                    <a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                                    <a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div> <!-- end front panel -->
<!--                                    <div class="back">
                                                                                        <div class="header">
                                                                                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                                                                        </div>
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
                                    </div>  end back panel -->
                                </div> <!-- end card -->
                            </div> <!-- end card-container -->
                        </div>
                        <?php
                    endforeach;

                else:
                    ?>


                    <h2>Aucun profil disponible.</h2>
                <?php endif; ?>
            </div>
        </div>

        <!--Right Side-->

        <div class="row col-sm-3 pull-right" >
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


</div>


<!--<div class="card">

                            <div class="front">
                                <img class=" img-circle pull-right" width="50px" height="50px" src="<?php echo base_url("asset/imgs/profile-Zeyad.jpg") ?>" alt="" />
                                <h4><?php echo (isset($post['iduser'][0])) ? $post['nomentreprise'] : ""; ?></h4>

<?php
$compet = explode(",", $post['domaineprincipale']);
?>

                                <p >
                                    <strong>Domaine pricipale</strong>:<?php
foreach ($compet as $comp) {
//                                                echo $comp." "; 
    echo implode("-", explode("_", $comp)) . ". ";
}
?> 
                                </p>
                                <p>Numero Reference : <?php echo $post['numeroreference']; ?></p>
                                <p class="encyclopedia">HARUN PEHLİVAN on <a>TEBİM/TEBİTAGEM</a></p>
                                <p class="flip"><img src="<?php echo base_url("asset/imgs/profile-Zeyad.jpg") ?>" alt="" /></p>
                                <p>
                                    <a style="margin-top: 40px" href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                    <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                </p>
                                <p class="social">
                                    <a href="https://twitter.com/HTERCUMANP"><span></span><img src="http://toddaustin.com/images/mod-dev/cardAssets/twitter.png" alt="" /></a>  <a href="https://github.com/harunpehlivan"><img src="http://toddaustin.com/images/mod-dev/cardAssets/github1.png" alt="" /></a>
                                    <a href="https://www.linkedin.com/in/harun-pehlivan-0aa34252/"><img src="http://toddaustin.com/images/mod-dev/cardAssets/linkedin.png" alt="" /></a>    
                                </p>
                            </div> 
                            <p class="nameplate">HARUN PEHLİVAN</p>
                        </div>-->