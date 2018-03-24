<div class="container-fluid">
    <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->



    <br/>
    <br/>
    <!--<div class="row">-->
    <form class="form-horizontal " action="<?php echo site_url('accueil/inscription_traitement_perso') ?>" method="post" name="inscriptionForm" id="inscriptionForm" enctype="multipart/form-data">
        <fieldset >
            <legend>
                <h2 class="">Fiche de Free Lance</h2>
            </legend>
            <div class="form-group col-xs-offset-2">
                <label for="nom" class="control-label col-xs-2"> Diplome</label>
                <div class="col-xs-7 input-group">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <input id="nom" type="text" name="diplome" class="form-control" placeholder="diplome"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="prenom" class="control-label col-xs-2">Formation</label>
                <div class="col-xs-7 input-group">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <input id="prenom" type="text" name="formation" class="form-control" placeholder="formation"/>
                </div>
            </div>
        
            <div class="form-group col-xs-offset-2">
                <label for="select" class="col-xs-2 control-label">Domaines</label>
                <div class="col-xs-7">

                    <select name="domaine[]" id="example-multiple-optgroups" multiple="multiple">
                        <optgroup label="Domaine">
                            <option value="Informatique">Informatique</option>
                            <option value="Graphistes_photographes" >Graphistes &amp; photographes</option>
                            <option value="Community_manager" >Community manager</option>
                            <option value="Webmasters" >Webmasters</option>
                            <option value="Administrateurs_systèmes_DBA" >Administrateurs systèmes &amp; DBA</option>
                        </optgroup>
                    </select>

                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="select" class="col-xs-2 control-label">Compétences</label>
                <div class="col-xs-7">
                    <select id="example-multiple-optgroups2" name="competence[]" multiple="multiple" size="10">
                        <optgroup label="Développeurs Back-End">
                            <option value="Java">Java</option>
                            <option value="Php">Php</option>
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

             <div class="form-group col-xs-offset-2">
                <label for="prenom" class="control-label col-xs-2">Tarif journalier</label>
                <div class="col-xs-7 input-group">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <input id="prenom" type="text" name="tarif" class="form-control" placeholder="Tarif journalier"/>
                </div>
            </div>
             
            <div class="form-group col-xs-offset-2">
                <label for="number" class="control-label col-xs-2">Adresse</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                    <input id="number" type="tel" name="adresse" required="" class="form-control" placeholder="Adresse"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="number" class="control-label col-xs-2"> Numero</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input id="number" type="tel" name="number" required="" class="form-control" placeholder="Numero"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="mdp" class="control-label col-xs-2">Curriculum Vitae</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon"></i></span>
                    <input id="mdp" type="file" name="cv" required="" class="form-control" placeholder="curriculum vitae"/>
                </div>
            </div>
            <div class="row">
          <div class="col-xs-12">
              <div class="col-lg-2">
                  <br><br>J'ai lu et j'accepte les conditions</label>
              </div>
              <div class="col-lg-2" align="left">
                <br><br>
                <input type="checkbox" name="checkbox" OnClick="checkboxe();" id="checkbox" />
                
              </div>
              <div class="col-lg-6">
                 
              </div>
              <div class="col-lg-2">
                
              </div>
          </div>
        </div>
          <div class="row">
            <div class="col-xs-12">
              
                <div class="col-xs-6">
                <!--<form action="retourForm1" method="post">-->
                  <input type="submit" value="Je m'abonne" id="submit" name="envoyer" disabled="disabled" class="btn btn-green btn-block btn-flat" />
                 <!---->
                  
                <!--</form> -->
                </div>
                <div class="col-xs-6">
                    <a href="" class="btn btn-green btn-block btn-flat">ANNULER</a>
                </div>
           </div>
        </div>
        <script type="text/javascript">
          function checkboxe(){
            if(document.getElementById('checkbox').checked){
              document.getElementById('submit').disabled='';
            }else{
              document.getElementById('submit').disabled='disabled';
            }
          }
        </script>

                    
        </fieldset>


        <!--</div>-->

    </form>


</div>


<!--</div>-->
</div>
