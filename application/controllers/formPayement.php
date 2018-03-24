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


            <div>
                <h2>Activités </h2>
                <div class="container-fluid">
                    <div style="background-color:#e1e1e1;border-radius:10px; padding:10px;padding-top:3px;padding-bottom:3px;" >			
                    <div >
                        <h4 ><strong style="color:#208aaa"> Freelancer en ligne </strong></h4>
                        
                    </div>
                    <div class="row  " style="margin-top: 0px; ">
                        
                                            </div> <!-- end front panel -->
                                            <div class="back">
                                               
                                                

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
                                                </div>
                                            </div> <!-- end back panel -->
                                        </div> <!-- end card -->
                                    </div> <!-- end card-container -->
                                </div> <!-- end col sm 3 -->
                               

                    </div>
					</div>
					</br>
					</br>
					
                   
        <div class="panel-body">
            <form action="<?=trim(site_url()).'Main/traitementPayementTest'?>" method="post" name="" id="inscriptionForm">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-lg-2">
                                      <label> Numéro de téléphone </label>
                                  </div>
                                  <div class="col-lg-4">
                                      <div class="form-group has-feedback"><!----- Téléphone -------------->
                                  <input class="form-control" data-rule="email" placeholder="Telephone"  id="loginid" type="text" autocomplete="off" name="number" required />
                                  <span style="displaynone;font-weightbold; positionabsolute;color grey;position absolute;padding4px;font-size 11px;background-colorrgba(128, 128, 128, 0.26);z-index 17;  right 27px; top 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                                  <!--<span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
                                </div>
                                </div>
                                  <div class="col-lg-2">
                                      <label>Montant</label>
                                  </div>
                                  <div class="col-lg-4">
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
                                    <input type="submit" value="ENREGISTRER" id="submit" name="envoyer" disabled="disabled" class="btn btn-green btn-block btn-flat" /> <!---->
                                      
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


        <!--Right SIDE-->
        <div class="col-sm-3" style="margin-top: ">
            <h2>Nos services</h2>
            <div class=" placeholders">

                <div class="col-sm-12 ">
                    <!--<h4 style="margin-bottom: 20px ">Free Lance</h4>-->
                    <!--<hr/>-->
                    <a href="<?php echo site_url('FreeLance') ?>" class="pull-left" style="margin-top: 2%">
                        <img src="<?php echo base_url("asset/img/ban1.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                        <button class="btn btn-info btn-block "> <span class=""> </span> <strong class="text-center">Freelance</strong></button>
                    </a>


                </div>

            </div>



            <div class=" placeholders">
                <div class="col-sm-12">
                    <!--<h4 style="margin-bottom: 20px; margin-top: 20px "></h4>-->
                    <div class="bg-success" style="margin-top: 30px" >
                        <hr/>
                        <hr/>
                        <hr/>
                    </div>
                    <a href="<?php echo site_url('FreePret') ?>" class="pull-left" style="margin-top: 2%">
                        <img src="<?php echo base_url("asset/img/ban2.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                        <button class="btn btn-block btn-success ">  <strong> Prêt de personnel</strong></button>
                    </a>

                </div>

            </div>



            <div class=" placeholders">
                <div class="col-sm-12 ">
                    <h4 style="margin-bottom: 20px; margin-top: 20px "></h4>
                    <div class="bg-warning" style="margin-top: 30px" >
                        <hr/>
                        <hr/>
                        <hr/>
                    </div>
                    <a href="<?php echo site_url('Interview') ?>" class="pull-left" style="margin-top: 2%">
                        <img src="<?php echo base_url("asset/img/ban3.jpg"); ?>" class="img-responsive"   alt="Generic placeholder thumbnail">
                        <button class="btn btn-block btn-warning ">  <strong> Interview</strong></button>
                    </a>



                </div>
            </div>
        </div>

        <!--</div>-->
        <!--Right SIDE-->
    </div>

