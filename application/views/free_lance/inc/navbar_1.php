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
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
<!--                <form id="searchbox" class="navbar-form navbar-left" role="form" style="background-color: #fff;">
    
                    <div >
                        <span class="bor">
                        <i class="fa fa-search" ></i>
                        <input id="recherche" required="required" 
                               data-validation-message="Indiquez un métier ou une compétence, ex : webdesigner, java maven spring, développeur ios..." 
                               type="text" 
                               name="text" value="" placeholder="Ex : Développeur PHP" 
                               autocomplete="off" aria-autocomplete="list" 
                               type="text">
                        <ul hidden=""></ul>
                        <span class="visually-hidden" role="status" aria-live="assertive" 
                               ria-relevant="additions">
                            <label for="recherche" class="sr-only">Recherche par mots-clés</label>
                        </span>
                        </span>
                        <span>
                            <i class="fa fa-map-marker"></i>
                            <input id="location2" type="text" name="location" value="" placeholder="Ex: Lome">
                            <label for="location2" class="sr-only">Localité</label>
                        </span>

                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                        

                        
                </form>-->
            </ul>
        </div>
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
            $(window).on("scroll", function(){
            if(window.scrollY===0){
                $(".navbar ").css("box-shadow", "0px 0px 0px");
            }else{
                $(".navbar").css("box-shadow", "1px 0px 3px");
//                $(".navbar").addClass("");
            }
        });
    
    </script>