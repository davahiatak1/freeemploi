<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('FreeLance') ?> "> <strong>Free Emploi</strong> || Free-lance</a>
        </div>
<?php if(!$this->session->userdata('nom')): ?>
                <div  id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <form id="signin" style="margin-top: 12px" class="navbar-form navbar-right pull-left " method="post" action="<?php echo site_url('accueil/connexion') ?>" role="form">
                            <div class="input-group" style="width: 180px">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="tel" class="form-control" name="phone" value="" placeholder="Number">                                        
                            </div>

                            <div class="input-group" style="width: 180px">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control col-sm-3" name="pwd" value="" placeholder="Password">                                        
                            </div>

                            <a>
                                <button class="btn btn-default"><span class="glyphicon glyphicon-send"></span></button>
                            </a>

                        </form>
                        <li><a href="<?php echo site_url('accueil/inscription') ?>"><span><i style="margin-right: 5px" class="glyphicon glyphicon-plus-sign"></i></span>S'inscrire</a></li>

                    </ul>

            <?php endif; ?>


            <?php if($this->session->userdata('nom')): ?>



                <ul class="nav nav-pills pull-right">

                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img width="40px" height="40px" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>" class="img img-circle "> <span class=""></span>
                        </a>
                        <ul class="dropdown-menu" style="margin-left: -75px">
                            <li><a class="navbar-link"><?php echo $this->session->userdata('nom'); ?></a></li>
                            <li><a class="navbar-link" href="<?php echo site_url('freeLance/update') ?>">Mon Compte</a></li>
                            <li><a class="navbar-link" href="<?php echo site_url('accueil/deco') ?>">Se déconnecter</a></li>
                        </ul>
                    </li>
                 
                </ul>






        
            <?php endif; ?>
             
        
        <!--        <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right headersearch-fields">
                        <li><a href="<?php echo site_url('FreeLance') ?>">Connexion</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-link"></i>Connexion</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>Help</a></li>
                        <form id="searchbox" class="navbar-form navbar-left" role="form">
        
                            <span class="inputPicto inputPicto-blue headersearch-field-wrapper jsinit " >
                                <i class="fa fa-search"></i>
                                <input id="recherche" required="required" 
                                       data-validation-message="Indiquez un métier ou une compétence, ex : webdesigner, java maven spring, développeur ios..." 
                                       type="text" 
                                       name="text" value="" placeholder="Ex : Développeur PHP" 
                                       autocomplete="off" aria-autocomplete="list" 
                                       type="text"><ul hidden=""></ul><span class="visually-hidden" role="status" aria-live="assertive" 
                                       ria-relevant="additions">
                                    <label for="recherche" class="sr-only">Recherche par mots-clés</label>
                                </span>
        
                                <span class="inputPicto inputPicto-blue headersearch-field-wrapper jsinit ">
                                    <i class="fa fa-map-marker"></i>
                                    <input id="location2" type="text" name="location" value="" placeholder="Ex: Lome">
                                    <label for="location2" class="sr-only">Localité</label>
                                </span>
        
                                <button type="submit" class="headersearch-submit">
                                    <i class="fa fa-search"></i><span class="headersearch-submit-label">RECHERCHER</span>
                                </button>
                        </form>
                    </ul>
                              <form class="navbar-form navbar-right">
                                <input type="text" class="form-control" placeholder="Search...">
                              </form>
                </div>-->
    </div>
</nav>
<script>
    $(window).on("scroll", function () {
        if (window.scrollY === 0) {
            $(".navbar ").css("box-shadow", "0px 0px 0px");
        } else {
            $(".navbar").css("box-shadow", "1px 0px 3px");
//                $(".navbar").addClass("");
        }
    });

</script>