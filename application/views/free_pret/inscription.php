<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="col-xs-offset-5">INSCRIPTION</h2>
    <br/>
    <br/>
    <div class="row">
        <form action="<?php echo site_url('freeLance/inscription_traitement')?>" method="post" name="inscriptionForm" id="inscriptionForm">

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
                <label for="psoeudo" class="control-label col-xs-2"> Psoeudo</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="psoeudo" type="text" name="psoeudo" required="" class="form-control" placeholder="Psoeudo"/>
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
                    <input id="mail" type="email" name="mail" required="" class="form-control" placeholder="Email"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="adr" class="control-label col-xs-2"> Adresse</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                    <input id="adr" type="text" name="adr" class="form-control" required="" placeholder="Adresse"/>
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
                <label for="cdt1" class="control-label col-xs-2"> </label>
                <div class="col-xs-7 input-group">
                    <legend>
                        <p><strong class="text-danger">Conditions d'utilisation</strong></p>
                        Lorem ipsum dolor sit ame sectetur adipsing elit. 
                        Praesent eu est quilrs turpis posuere sodales. 
                        Mauris tempus placerat felvel iaculis. Suspendisse blandit id dolor eu bibendum. 
                        Integer gravida diam ut quam eleifend, sed tristiqu diam laoreet. </legend> 
                    <div class="form-group">
                        <label for="cdt" class="control-label col-xs-7">Je confirme avoir lu et accepté les conditions du site</label>
                        <div class="col-xs-2" style="margin-top: -8px">
                            <input id="cdt" type="checkbox" name="condition" required="" class="form-control" onclick="checkboxe();" />
                        </div>
                    </div>
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

        </form>

    </div>

</div>
