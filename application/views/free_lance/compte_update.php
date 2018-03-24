<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="col-xs-offset-5">Mise à jour du profil</h2>
    <br/>
    <br/>
    <div class="row">
        <form action="<?php echo site_url('freeLance/update_traitement')?>" method="post" name="inscriptionForm" id="inscriptionForm">

            <div class="form-group col-xs-offset-2">
                <label for="nom" class="control-label col-xs-2"> Nom</label>
                <div class="col-xs-7 input-group">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <input id="nom" type="text" name="nom" value="<?php echo $this->session->userdata('nom'); ?>" class="form-control" placeholder="Nom"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="prenom" class="control-label col-xs-2"> Prenom</label>
                <div class="col-xs-7 input-group">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <input id="prenom" type="text" value="<?php echo $this->session->userdata('prenom'); ?>" name="prenom" class="form-control" placeholder="Prenom"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="psoeudo" class="control-label col-xs-2"> Psoeudo</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="psoeudo" type="text" name="psoeudo" value="<?php echo $this->session->userdata('pseudo'); ?>" required="" class="form-control" placeholder="Psoeudo"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="mdp" class="control-label col-xs-2"> Mot de passe</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="mdp" type="password" value="<?php echo $this->session->userdata('password'); ?>" name="mdp" required="" class="form-control" placeholder="Mot de passe"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="mail" class="control-label col-xs-2"> Email</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon">@</span>
                    <input id="mail" type="email" name="mail" value="<?php echo $this->session->userdata('email'); ?>" required="" class="form-control" placeholder="Email"/>
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="adr" class="control-label col-xs-2"> Adresse</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                    <input id="adr" type="text" value="<?php echo $this->session->userdata('adresse'); ?>" name="adr" class="form-control" required="" />
                </div>
            </div>
            <div class="form-group col-xs-offset-2">
                <label for="number" class="control-label col-xs-2"> Numero</label>
                <div class="col-xs-7 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input id="number" type="tel" value="<?php echo $this->session->userdata('telephone'); ?>" name="number" required="" class="form-control" />
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
                        
                    </div>
                </div>

            </div>

        </form>

    </div>

</div>
