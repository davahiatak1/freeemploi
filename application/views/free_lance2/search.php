
<?php
if(isset($_POST['resultat'])){
    $search = $_POST['resultat'];
//    print_r($search);
}
//$search = $_POST['resultat'];
//echo $search;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Free Lance::Accueil</title>


    <div class="container-fluid content">
        <div class="row">
            <div class="col-sm-9">
                <h1 class="text-primary">Bienvenue <small class="text-primary">Free-Lance</small></h1>
                <!--Acco-->
                <div class="col-sm-4">
                    <div class="panel panel-default ">
                        <div style="height: 5% " class="panel-heading collapsed" data-parent="#accordion" data-toggle="collapse"  href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <a href="#collapseOne">
                                <h4 style="margin-top: -5px" >Recherche <i style="float: right" class="fa fa-arrow-down "></i> </h4>
                            </a>
                        </div>
                        <div class="panel-body collapse" id="collapseOne"  role="tabpanel" aria-labelledby="headingOne">
                            <div class="">
                                <form class="form-horizontal" action="search" method="post">
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
            <div style="margin-top: -50px;z-index: 90000000000000000000000000000000;" class="col-md-3">
                <a class="pull-right"  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <img style="width: content-box;height:45px ;margin-top: 10px ;margin-right: 10px" class="media-object img-responsive img-circle " src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                    <!--<i style="width: content-box;height:45px ;margin-top: 10px ;margin-right: 10px" class="media-object img-responsive img-circle fa fa-user fa-2x " ></i>-->
                </a>

                <div class=" panel panel-heading collapse pull-right" id="collapseExample">

                    <ul class="nav nav-pills nav-stacked">
                        <h5 class="text-center"><?php echo $this->session->userdata('nom'); ?></h5>
                        <hr/>
                        <li  ><a href="<?php echo site_url('freeLance/update') ?>">Mise à jour</a></li>
                        <li  ><a href="<?php echo site_url('accueil/deco') ?>">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--End Acco-->

        <!--LEFT SIDE-->
        <div class="row col-sm-8 pull-left">
            <div class="">


                <?php
                //$posts=$this->session->userdata('posts');
                
// print_r($_POST['posts']);
                if (!empty($search)): foreach ($search as $row):
                        ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading"> 
                                    <div class="media">
                                        <a class=" pull-left" href="#">
                                            <img class="media" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                        </a>
                                        <h4 style="margin-top: 50px" class="media-heading"><?php echo $row['nom']; ?></h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div>

                                        <p>Niveau d'etude</p>
                                        <p>Competence:  </p>
                                        <p>Tarif moyen journalier: <?php echo $row['tarif']; ?></p>
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
                                        <a class="pull-right" href="<?php echo site_url("freeLance/profil/{$row['idPostulant']}") ?>" >
                                                                                        Tout voir</a>

                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <p>
                                        <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                    </p>
                                </div>
                            </div> 
                        </div>
                        <?php
                    endforeach;
                else:
                    ?>
                <div style="height: 30%"><h5>Le profil que vous recherchez n'est pas disponible.</h5></div>
                <?php endif; ?>

            </div>
        </div>
        <!-- End LEFT SIDE-->

        <!--Right Side-->

        <div class="row col-sm-4 pull-right" >
            <div class="col-sm-12">
<!--                <div class="panel panel-default">
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
                                    <h4 class="media-heading">Jose Kinsella</h4>
                                    <h4 class="media-heading"><?php echo $post['nom']; ?></h4>
                                    <h4 class="media-heading"><?php echo $this->session->userdata('nom'); ?></h4>
                                    <p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                                    <p>
                                        <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-bookmark"></span> Contacter</a>
                                        <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>-->
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