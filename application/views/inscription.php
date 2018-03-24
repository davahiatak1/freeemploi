<div class="container-fluid">
    <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->



    <br/>
    <br/>
    <!--<div class="row">-->
    <form class="form-horizontal " action="<?php echo site_url('accueil/redirectionForm') ?>" method="post" name="inscriptionForm" id="inscriptionForm" enctype="multipart/form-data">
        <fieldset >
            <legend>
                <h2 class="">Inscription</h2>
            </legend>
            <div class="form-group col-xs-offset-2">
                <label for="nom" class="control-label col-xs-2"> Nom</label>
                <div class="col-xs-7 input-group">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <input id="nom" type="text" name="nom" class="form-control" placeholder="Nom"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="prenom" class="control-label col-xs-2"> Prenom</label>
                <div class="col-xs-7 input-group">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <input id="prenom" type="text" name="prenom" class="form-control" placeholder="Prenom"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="pseudo" class="control-label col-xs-2"> Pseudo</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="psoeudo" type="text" name="pseudo" required="" class="form-control" placeholder="Psoeudo"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="mdp" class="control-label col-xs-2"> Mot de passe</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="mdp" type="password" name="mdp" required="" class="form-control" placeholder="Mot de passe"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="mail" class="control-label col-xs-2"> Email</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon">@</span>
                    <input id="mail" type="email" name="email" required="" class="form-control" placeholder="Email"/>
                </div>
            </div>
			<div class="form-group col-xs-offset-2">
                <label for="number" class="control-label col-xs-2"> Avatar</label>
                <div class="col-xs-7 input-group">
                    
                    <input id="" type="file" name="avatar" required="" class="" placeholder=""/>
                </div>
            </div>
            
            
            <div class="form-group col-xs-offset-2">
                <label for="select" class="col-xs-2 control-label">Type de compte</label>
                <div class="col-xs-7">

                    <select name="typecompte" id="example-multiple-optgroups">
                        <optgroup label="Type compte">
                            <option value="1">Free-Lance</option>
                            <option value="2" >Pret Emploi</option>
                        </optgroup>
                    </select>
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
                        <button type="submit" class="btn btn-success">Continuer</button>
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
