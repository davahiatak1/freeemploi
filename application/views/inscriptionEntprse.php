<div class="container-fluid">
    <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->



    <br/>
    <br/>
    <!--<div class="row">-->
    <form class="form-horizontal " action="<?php echo site_url('accueil/inscription_traitement_entreprise') ?>" method="post" name="inscriptionForm" id="inscriptionForm">
        <fieldset >
            <legend>
                <h2 class="">Fiche Pret Personnel</h2>
            </legend>
            <div class="form-group col-xs-offset-2">
                <label for="nom" class="control-label col-xs-2"> Nom d'entreprise</label>
                <div class="col-xs-7 input-group">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <input id="nomEns" type="text" name="nom_entrpse" class="form-control" placeholder="Nom entreprise"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="prenom" class="control-label col-xs-2">Numero de reference</label>
                <div class="col-xs-7 input-group">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <input id="numRef" type="text" name="ref" class="form-control" placeholder="reference"/>
                </div>
            </div>

            <div class="form-group col-xs-offset-2">
                <label for="select" class="col-xs-2 control-label">Domaine d'activité principale</label>
                <div class="col-xs-7">

                    <select name="domaine1[]" id="example-multiple-optgroups" multiple="multiple">
                        <optgroup label="Domaine">
                            <option value="1">Informatique</option>
                            <option value="2" >Graphistes &amp; photographes</option>
                            <option value="3" >Community manager</option>
                            <option value="4" >Webmasters</option>
                            <option value="5" >Administrateurs systèmes &amp; DBA</option>
                        </optgroup>
                    </select>

                </div>
            </div>

            <div class="form-group col-xs-offset-2">
                <label for="select" class="col-xs-2 control-label">Domaines d'activités secondaires</label>
                <div class="col-xs-7">

                    <select name="domaine2[]" id="example-multiple-optgroups" multiple="multiple">
                        <optgroup label="Domaine">
                            <option value="1">Informatique</option>
                            <option value="2" >Graphistes &amp; photographes</option>
                            <option value="3" >Community manager</option>
                            <option value="4" >Webmasters</option>
                            <option value="5" >Administrateurs systèmes &amp; DBA</option>
                        </optgroup>
                    </select>

                </div>
            </div>

            <div class="form-group col-xs-offset-2">
                <label for="adr" class="control-label col-xs-2">Contact</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input id="adr" type="text" name="contact" class="form-control" required="" placeholder="Contact"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="mail" class="control-label col-xs-2">Quartier</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                    <input id="mail" type="text" name="quartier" required="" class="form-control" placeholder="quartier"/>
                </div>
            </div>
                        <div class="form-group col-xs-offset-2">
                <label for="number" class="control-label col-xs-2"> Pays</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                    <input id="number" type="tel" name="pays" required="" class="form-control" placeholder="Pays"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="number" class="control-label col-xs-2">Ville</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                    <input id="number" type="tel" name="ville" required="" class="form-control" placeholder="ville"/>
                </div>
            </div>


            <div class="row col-xs-offset-4">
                <div class="">
                    <div class="col-xs-5 col-xs-offset-1">
                        <button type="reset" class="btn btn-default">Annuler</button>
                    </div>
                </div>
                <div class="">
                    <div class="col-xs-3 ">
                        <button type="submit" class="btn btn-success">Valider</button>
                        <script type="text/javascript">
                            function checkboxe() {
                                if (document.getElementById('cdt').checked) {
                                    document.getElementById('submit').disabled = '';
                                } else {
                                    document.getElementById('submit').disabled = 'disabled';
                                }

                            }
                        </script>
                    </div>
                </div>
            </div>
        </fieldset>


        <!--</div>-->

    </form>


</div>


<!--</div>-->
</div>
