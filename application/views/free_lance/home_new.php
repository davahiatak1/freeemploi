
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


    <div class="container-fluid content">
        <div class="row">
            <blockquote>
                <!--<h1 class="text-primary">Bienvenue <small class="text-primary">Freelance</small></h1>-->
                <p class="text-primary">Bienvenue <i class="text-muted"><?php echo $this->session->userdata('nom'); ?></i></p>
                <small> Freelance</small>
            </blockquote>
            <!--<h1 class="text-primary">Bienvenue <small class="text-primary">Freelance</small></h1>-->
            <div class="col-sm-3 pull-right">
                <!--Acco-->
                <div class="col-sm-12 " >
                    <div class="panel panel-info " style="margin-left: 5px">
                        <div style="height: 5%;  " class="panel-heading collapsed" data-parent="#accordion" data-toggle="collapse"  href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <a href="#collapseOne">
                                <h4 style="margin-top: -5px; font-family: serif; color: #ffffff" >Recherche <i style="float: right" class="fa fa-arrow-down "></i> </h4>
                            </a>
                        </div>
                        <div class="panel-body collapse" id="collapseOne"  role="tabpanel" aria-labelledby="headingOne">
                            <div class="">
                                <form class="form-horizontal" action="freeLance/search" method="post">
                                    <div class="row">
                                        <div class="form-group col-sm-6" >
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
                                        <div class="form-group col-sm-6" >
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
                                    </div>
                                    <!--                                    <a class="btn btn-default" href="">
                                                                            <span class="glyphicon glyphicon-search"></span>
                                                                        </a>-->
                                    <div class="row">
                                        <button type="submit" class="btn btn-default col-sm-6 col-sm-offset-3">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </div>

                                </form>
                            </div> 

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!--End Acco-->

        <!--LEFT SIDE-->
        <div class="row col-sm-9 ">

            <!--NEW CARD-->

            <div class="col-sm-12">
                <?php
                $posts = $_POST['postulant'];
//                if ($posts): foreach ($posts as $post):
                if ($user): foreach ($user as $post):
                        ?>
                        <div id="content">
                            <div id="data">

                                <div class="col-sm-4 ">
                                    <div class="card-container manual-flip">

                                        <div class="card">
                                            <div class="front">
                                                <div class="cover">
                                                    <img src="<?php echo base_url("asset/imgs/svg.svg"); ?>">
                                                </div>
                                                <div class="user">
                                                    <img class="img-circle" src="<?php echo base_url("{$post['avatar']}"); ?>">
                                                </div>
                                                <!-- Simple Pricing Tables -->
                                                <!--<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9155049400353686" data-ad-slot="6591520258" data-ad-format="auto" xoqznr6="" hidden=""></ins>-->
                                                <div class="content">
                                                    <div class="main">
                                                        <h3 style="margin-top: -10px" class="name"><?php echo (isset($post['iduser'][0])) ? $post['iduser'][0]['nomuser'] : ""; ?></h3>

                                                        <p class="profession"><?php echo $post['domaine']; ?>
                                                        <p style="margin-top: -20px" class="text-center"></p>
                                                        <!--<p style="margin-top: -10px"class="text-center"><?php echo $post['tarif']; ?> $</p>-->
                                                        </p>
                                                        <!--<p class="text-center">"Lamborghini Mercy <br>Your chick she so thirsty <br>I'm in that two seat Lambo"</p>-->

                                                    </div>
                                                    <div class="footers">
                                                        <button style="margin-top: -20px " class="btn btn-simple" onclick="rotateCard(this)">
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
                                                        <p style="
                                                           /*overflow-wrap: break-word;*/
                                                           display:inline-block;
                                                           width:250px;
                                                           white-space: nowrap;
                                                           overflow:hidden !important;
                                                           text-overflow: ellipsis;
                                                           margin-top: 5px
                                                           "
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
                                                    <p class="pull-right" style="margin-top: -25px">
                                                        <a href="<?php echo site_url("freeLance/profil/{$post['idPostulant']}") ?>" style="border-radius: 20px" class="btn btn-xs btn-default"><span class="fa fa-mail-forward"></span> Contacter</a>
                                                    </p>
                                                </div>
                                            </div> <!-- end back panel -->
                                        </div> <!-- end card -->
                                    </div> <!-- end card-container -->
                                </div> <!-- end col sm 3 -->

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
                <div id="ajax_paging">
                    <?php echo $pagination; ?>
                </div>

            </div>


        </div>



        <!-- End LEFT SIDE-->

        <!--Right Side-->

        <div class="row col-sm-3 pull-right" >
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div style=" " class="panel-heading collapsed" data-parent="#accordion"  data-toggle="collapse"  href="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                        <a href="#collapse2">
                            <h4 style="font-family: serif; color: #FFFFFF" >Derniers profil ajouté <i style="float: right" class="fa fa-arrow-right "></i> </h4>
                        </a>
                    </div>
                    <div class="panel-body collapse show " id="collapse23"  role="tabpanel" aria-labelledby="headingOne">
                        <div class="">
                            <div class="media">
                                <a class=" pull-left" href="#">
                                    <img class="col-sm-6 img-circle" src="<?php echo base_url().''.end($post['iduser'])['avatar'] ?>">
                                    <div class="col-sm-6 ">
                                        <h3><?php echo (isset($post['iduser'][0])) ? end($post['iduser'])['nomuser'] : ""; ?></h3>
                                        <button type="button" href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</button>
                                        <!--<a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>-->

                                    </div>

                                </a>
                                <div class="media-body">
                                    <!--<h4 class="media-heading">Jose Kinsella</h4>-->
                                    <h4 class="media-heading"><?php echo $this->session->userdata('pseudo'); ?></h4>
                                    <!--<h4 class="media-heading"><?php echo $this->session->userdata('nom'); ?></h4>-->
                                    <!--<p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>-->

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!--Right Side-->



    </div>



    <!--    <div class="container-fluid">
    <pre><?php print_r($user) ?> <?php echo $user[0]['iduser'][0]['nomuser']; ?></pre>
    <?php
    foreach ($user as $pag):
//     print_r($pag);
        ?>
            
                        <div id="content">
                            <div id="data">
            
                                <div><?php echo $pag['iduser'][0]['nomuser']; ?></div>
            
                            </div>
                        </div>
            
        <?php
    endforeach;
    ?>
            <div id="ajax_paging">
    <?php echo $pagination; ?>
            </div>
        </div>-->
    <script>
        $(function () {
            applyPagination();

            function applyPagination() {
                $("#ajax_paging a").click(function () {
                    var url = $(this).attr("href");
                    $.ajax({
                        type: "POST",
                        data: "ajax=1",
                        url: url,
                        beforeSend: function () {
                            $("#data").html("");


                        },
                        success: function (msg) {
                            $("#data").html(msg);
                            applyPagination();
                        }
                    });
                    return false;
                });
            }
        });
    </script>