
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>EasyHome::Bienvenue</title>
<style>
.stats-container{
width: 100%;
margin-top: 20px;
}
.stats{
display: block;
float: left;
width: 33.333333%;
text-align: center;
}

.stats:first-child{
border-right: 1px solid #EEEEEE;
}
.stats:last-child{
border-left: 1px solid #EEEEEE;
}
.stats h4{
font-family: 'Arima Madurai', cursive;
font-weight: 300;
margin-bottom: 5px;
}
.stats p{
color: #777777;
}

.stats div {
color: #777777;
}
</style>


<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
<div class="carousel-inner img-responsive" role="listbox" style="height: 160px; width: 100%; margin-top: 0px;  ">
<div class="item active">
<div class="carousel-caption" >
    <h2>Espace visibilité entreprise </h2>
    <p>la publicité</p>
</div>
<img src="<?php echo base_url("asset/img/bg2.jpg"); ?>" class="img-responsive" alt="13">
</div>
<div class="item">
<div class="carousel-caption" >
    <h2>Espace visibilité entreprise</h2>
    <p>la publicité</p>
</div>
<img src="<?php echo base_url("asset/img/bg1.jpg"); ?>" class="img-responsive" alt="14">
</div>
<div class="item">
<div class="carousel-caption" >
    <h2>Espace visibilité entreprise</h2>
    <p>la publicité</p>
</div>
<img src="<?php echo base_url("asset/img/bg3.jpg"); ?>" class="img-responsive" alt="14">
</div>
<div class="item">
<div class="carousel-caption" >
    <h2>Espace visibilité entreprise</h2>
    <p>la publicité</p>
</div>
<img src="<?php echo base_url("asset/img/bg4.jpg"); ?>" class="img-responsive" alt="14">
</div>
</div>

</div>



<br>

<div class="container; text-center" align="center">
<h1 style="font-size: 30px; margin: 0px" class="text-center"><strong class="text-success">Fr</strong><strong class="text-muted">ee</strong><strong class="text-primary">Ho</strong><strong class="text-danger">me</strong></h1>
<br>
<div class="row">





<div class="container-fluid">
    




    <?php
        //$postulants = $_POST['postulant'];
        $i = 0;
        //print_r($postulants);
    ?>
    <div class="row" style="margin-top: 25px">

        <?php 
            $color=["#849a84", "#ffbb33", "#849a84", "#ff4444", "#4285F4"];

        ?>
        

    <div style="background-color: #e1e1e1"> 
    <br> 
        <div class="panel" align="center">
            <div class="panel-heading " style="background-color: #849a84;" style="height: 50px"><h4 style="margin-top: 5px"><strong style="color: #fff">NOS CONDITIONS</strong></h4></div>
                <div class="panel-body" style="border-radius: 4px;background-color: #fff;
                         -webkit-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
                         -moz-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
                         box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);" > 
                       <div class="row">
  <div class="col-xs-12">
      <form class="form-horizontal" action="<?= site_url() ?>/Accueil/formPayement" method="post">
                           <!-- <div class="alert alert-success">
                                
                            </div>-->
                            <fieldset >
                                <div class="center col-md-12">
                                <div class="row">
                                    <div class="col-md-6" align="right">
                                        <input type="radio" name="mode" value="1">
                                        
                                    </div>
                                    <div class="col-md-6" align="left">
                                        <label>1- FLOOZ</label>
                                    </div>
                                   

                                </div>
                                <div class="row">
                                    <div class="col-md-6" align="right">
                                        <input type="radio" name="mode" value="2">
                                        
                                    </div>
                                    <div class="col-md-3" align="left"">
                                        <label >2- TMONEY</label>
                                    </div>
                                    

                                </div>
                                <div class="row">
                                    <div class="col-md-6" align="right">
                                        <input type="radio" name="mode" value="6">
                                        
                                    </div>
                                    <div class="col-md-3" align="left">
                                        <label >3- CARTE VISA</label>
                                    </div>
                                    

                                </div>

                                <div class="row" align="center">
                                    <div class="center col-md-4">
                                    
                                    </div>
                                    <div class="center col-md-4">
                                        <a href=""  align="center">
                                             <input type="submit" value="Valider" id="submit" name="envoyer"  class="btn btn-success btn-block btn-flat" /> <!---->
                                        </a>
                                    
                                    </div>
                                    <div class="center col-md-4">
                                    
                                    </div>
                                </div>
                                        
                                        
                                </div>
                                
                                

                                
                                    
                                

                                <!--<a href="">Inscription</a>-->
                            </fieldset>
                        </form>
  </div>
</div>


            </div>
        </div>

    </div>

    <div style="background-color: #e1e1e1">
    <br>

        

    </div>

</div>

</div> 




</div>
</div>




<script src="<?= base_url() ?>asset/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
/*$("#showJard").on("click", function () {
$("#domestique").hide();
$("#jardinier").show();

})
$("#showDom").on("click", function () {
$("#jardinier").hide();
$("#domestique").show();

})*/
})
</script>
