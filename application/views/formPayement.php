<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Free-Emploi::Bienvenue</title>

        <!--<div class="container-fluid">-->
        <!--Carousel-->
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <!--Indicator-->
        <!--                <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1" ></li>
                            <li data-target="#carousel" data-slide-to="2" ></li>
                            <li data-target="#carousel" data-slide-to="3" ></li>
                        </ol>-->
        <!--Wrapper for slides-->
        <div class="carousel-inner img-responsive" role="listbox" style="height: 200px; width: 100%; margin-top: 0px;  ">
            <div class="item active">
                <div class="carousel-caption" >
                    <h1>Free Lance </h1>
                    <p>Les annonces pour Freelance.</p>
                </div>
                <img src="<?php echo base_url("asset/img/bg2.jpg"); ?>" class="img-responsive" alt="13">
            </div>
            <div class="item">
                <div class="carousel-caption" >
                    <h1>Prêt du personnel </h1>
                    <p>Les annonces pour Prêt salarié.</p>
                </div>
                <img src="<?php echo base_url("asset/img/bg1.jpg"); ?>" class="img-responsive" alt="14">
            </div>
            <div class="item">
                <div class="carousel-caption" >
                    <h1>Interview </h1>
                    <p>Organiser des inerview en ligne.</p>
                </div>
                <img src="<?php echo base_url("asset/img/bg3.jpg"); ?>" class="img-responsive" alt="14">
            </div>
        </div>

    </div>

                    
   
    <div class="container-fluid content">

        <div class="col-sm-9">


      
        </div>
	</div>
					
        </br>
                    </br>
                    </br>
                                
        <div class="row" style="margin-top: 0px;">

                                        
        <div class="panel-body">
            <h2 align="center"><strong>Formulaire d'abonnement</strong></h2>
            <form action="<?=trim(site_url()).'Accueil/traitementAbonnement'?>" method="post" name="" id="inscriptionForm">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-lg-6" align="right">
                                      <label> Numéro de téléphone </label>
                                  </div>
                                  <div class="col-lg-6" align="left">
                                      <div class="form-group has-feedback"><!----- Téléphone -------------->
                                  <input class="form-control" data-rule="email" placeholder="Telephone"  id="loginid" type="text" autocomplete="off" name="number" required />
                                  <span style="displaynone;font-weightbold; positionabsolute;color grey;position absolute;padding4px;font-size 11px;background-colorrgba(128, 128, 128, 0.26);z-index 17;  right 27px; top 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                                  <!--<span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
                                </div>
                                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-lg-6" align="right">
                                      <label>Montant</label>
                        </div>
                        <div class="col-lg-6" align="left">
                            <div class="form-group has-feedback"> <!----- Telephone-------------->
                                <input class="form-control" placeholder="amount"  id="loginid" type="text" autocomplete="off" name="amount" required />  
                                  <span class="spanMod" id="span_loginid"></span><!---Alredy exists  ! -->
                                  <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
                            </div>
                        </div>
                    </div>
                </div>
                              
                            </div>

                              
                              
                                    <br/><br/><br/><br/>
                              

                              <br/><br/>
                              <div class="row">
                                <div class="col-xs-12">
                                  
                                  <div class="col-xs-6">
                                    <!--<form action="retourForm1" method="post">-->
                                    <input type="submit" value="ENREGISTRER" id="submit" name="envoyer"  class="btn btn-green btn-block btn-flat" /> <!---->
                                      
                                    <!--</form> -->
                                </div>
                                <div class="col-xs-6">
                                      <a href="index" class="btn btn-green btn-block btn-flat">ANNULER</a>
                                </div>
                               </div>
                            </div>
                                   
                            
                        </form>

            
        </div>
    </div> 
</div>
                               








                    </div>
                    </div>
                    </br>
                    </br>
					
					
                    </div>

                    
                </div>




            </div>


            <!--End Activite-->


        </div>
        <!--END Left SIDE-->


        

        <!--</div>-->
        <!--Right SIDE-->
    </div>

