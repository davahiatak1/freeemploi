<?php
//$id = $_POST['id'];
//print_r($postulants);
//if ($postulants): foreach ($postulants as $post):
//        print_r($post);
//    endforeach;
//endif;
//$postulant = $_POST['data'];
//$postulants = $postulant[0];
?>
<script src="<?= base_url() ?>asset/js/jquery-2.1.4.min.js"></script>
<!--<div class="container">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-default" >
            <div class="panel-heading">
                <a href="#" class="pull-right">View all</a> 
                
                <h4>Profiles</h4>
                <div class="media">
                    <a class=" pull-left " style="margin-left: 47%" href="#">
                        <img class="media-object img-responsive img-circle " src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                    </a>
                </div>
                <h3 class="text-center"><?php echo $this->session->userdata('pseudo'); ?></h3>
            </div>
            <div class="panel-body">
<?php echo $this->session->userdata('prenom'); ?>
                <hr>
<?php echo $this->session->userdata('tarif'); ?>
                <hr>
<?php echo $this->session->userdata('competence'); ?>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>

            </div>

            <div class="panel-footer">
                <div class="media">
                    <div class="media-body ">
                        <h4 class="media-heading">Jose Kinsella</h4>
                        <p class="pull-right">

                            <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-comment"></span> Contactez!!</a>
                            <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                        </p>

                    </div>
                </div>

            </div>
        </div> 

        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body  ">
                        <div class="alert alert-dismissable alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                        </div>
                    </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container-fluid">
    <style>
        .btn:hover,
        .btn:focus,
        .btn:active{
            outline: 0 !important;
        }
        /* entire container, keeps perspective */
        .card-container {
            -webkit-perspective: 800px;
            -moz-perspective: 800px;
            -o-perspective: 800px;
            perspective: 800px;
            margin-bottom: 30px;
        }
        /* flip the pane when hovered */
        .card-container:not(.manual-flip):hover .card,
        .card-container.hover.manual-flip .card{
            -webkit-transform: rotateY( 180deg );
            -moz-transform: rotateY( 180deg );
            -o-transform: rotateY( 180deg );
            transform: rotateY( 180deg );
        }


        .card-container.static:hover .card,
        .card-container.static.hover .card {
            -webkit-transform: none;
            -moz-transform: none;
            -o-transform: none;
            transform: none;
        }
        /* flip speed goes here */
        .card {
            -webkit-transition: -webkit-transform .5s;
            -moz-transition: -moz-transform .5s;
            -o-transition: -o-transform .5s;
            transition: transform .5s;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
            position: relative;
        }

        /* hide back of pane during swap */
        .front, .back {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #FFF;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.14);
        }

        /* front pane, placed above back */
        .front {
            z-index: 2;
        }

        /* back, initially hidden pane */
        .back {
            -webkit-transform: rotateY( 180deg );
            -moz-transform: rotateY( 180deg );
            -o-transform: rotateY( 180deg );
            transform: rotateY( 180deg );
            z-index: 3;
        }

        .back .btn-simple{
            position: absolute;
            left: 0;
            bottom: 4px;
        }
        /*        Style       */


        .card{
            background: none repeat scroll 0 0 #FFFFFF;
            border-radius: 4px;
            color: #444444;
        }
        .card-container, .front, .back {
            width: 100%;
            height: 365px;
            border-radius: 4px;
            -webkit-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
            -moz-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
            box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
        }
        .card .cover{
            height: 105px;
            overflow: hidden;
            border-radius: 4px 4px 0 0;
        }
        .card .cover img{
            width: 100%;
        }
        .card .user{
            border-radius: 50%;
            display: block;
            height: 120px;
            margin: -55px auto 0;
            overflow: hidden;
            width: 120px;
        }
        .card .user img{
            background: none repeat scroll 0 0 #FFFFFF;
            border: 4px solid #FFFFFF;
            width: 100%;
        }

        .card .content{
            background-color: rgba(0, 0, 0, 0);
            box-shadow: none;
            padding: 10px 20px 20px;
        }
        .card .content .main {
            min-height: 160px;
        }
        .card .back .content .main {
            height: 215px;
        }
        .card .name {
            font-family: 'Arima Madurai', cursive;
            font-size: 22px;
            line-height: 28px;
            margin: 10px 0 0;
            text-align: center;
            text-transform: capitalize;
        }
        .card h5{
            margin: 5px 0;
            font-weight: 400;
            line-height: 20px;
        }
        .card .profession{
            color: #999999;
            text-align: center;
            margin-bottom: 20px;
        }
        .card .footers {
            border-top: 1px solid #EEEEEE;
            color: #999999;
            margin: 30px 0 0;
            padding: 10px 0 0;
            text-align: center;
        }
        .card .footers .social-links{
            font-size: 18px;
        }
        .card .footers .social-links a{
            margin: 0 7px;
        }
        .card .footers .btn-simple{
            margin-top: -6px;
        }
        .card .header {
            padding: 15px 20px;
            height: 90px;
        }
        .card .motto{
            font-family: 'Arima Madurai', cursive;
            border-bottom: 1px solid #EEEEEE;
            color: #999999;
            font-size: 14px;
            font-weight: 400;
            padding-bottom: 10px;
            text-align: center;
        }

        .card .stats-container{
            width: 100%;
            margin-top: 50px;
        }
        .card .stats{
            display: block;
            float: left;
            width: 33.333333%;
            text-align: center;
        }

        .card .stats:first-child{
            border-right: 1px solid #EEEEEE;
        }
        .card .stats:last-child{
            border-left: 1px solid #EEEEEE;
        }
        .card .stats h4{
            font-family: 'Arima Madurai', cursive;
            font-weight: 300;
            margin-bottom: 5px;
        }
        .card .stats p{
            color: #777777;
        }
        /*      Just for presentation        */

        .titles{
            color: #506A85;
            text-align: center;
            font-weight: 300;
            font-size: 44px;
            margin-bottom: 90px;
            line-height: 90%;
        }
        .titles small{
            font-size: 17px;
            color: #999;
            text-transform: uppercase;
            margin: 0;
        }
        .space-30{
            height: 30px;
            display: block;
        }
        .space-50{
            height: 50px;
            display: block;
        }
        .space-200{
            height: 200px;
            display: block;
        }
        .white-board{
            background-color: #FFFFFF;
            min-height: 200px;
            padding: 60px 60px 20px;
        }
        .ct-heart{
            color: #F74933;
        }

        pre.prettyprint{
            background-color: #ffffff;
            border: 1px solid #999;
            margin-top: 20px;
            padding: 20px;
            text-align: left;
        }
        .atv, .str{
            color: #05AE0E;
        }
        .tag, .pln, .kwd{
            color: #3472F7;
        }
        .atn{
            color: #2C93FF;
        }
        .pln{
            color: #333;
        }
        .com{
            color: #999;
        }

        .btn-simple{
            opacity: .8;
            color: #666666;
            background-color: transparent;
        }

        .btn-simple:hover,
        .btn-simple:focus{
            background-color: transparent;
            box-shadow: none;
            opacity: 1;
        }
        .btn-simple i{
            font-size: 16px;
        }

        .navbar-brand-logo{
            padding: 0;
        }
        .navbar-brand-logo .logo{
            border: 1px solid #333333;
            border-radius: 50%;
            float: left;
            overflow: hidden;
            width: 60px;
        }
        .navbar .navbar-brand-logo .brand{
            color: #FFFFFF;
            float: left;
            font-size: 18px;
            font-weight: 400;
            line-height: 20px;
            margin-left: 10px;
            margin-top: 10px;
            width: 60px;
        }
        .navbar-default .navbar-brand-logo .brand{
            color: #555;
        }


        /*       Fix bug for IE      */

        @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
            .front, .back{
                -ms-backface-visibility: visible;
                backface-visibility: visible;
            }

            .back {
                visibility: hidden;
                -ms-transition: all 0.2s cubic-bezier(.92,.01,.83,.67);
            }
            .front{
                z-index: 4;
            }
            .card-container:not(.manual-flip):hover .back,
            .card-container.manual-flip.hover .back{
                z-index: 5;
                visibility: visible;
            }
        }
    </style>
    <div class="">
        <?php
        //$posts=$this->session->userdata('posts');
        $posts = $_POST['postulant'];


//                print_r($users);
// print_r($_POST['posts']);
        if ($postulants): foreach ($postulants as $post):
//                    if ($lances): foreach ($lances as $lancer):
                ?>


                <div class="col-sm-12 col-md-8">
                    <div class="card-container manual-flip">

                        <div class="card">
                            <div class="front">
                                <div class="cover">
                                    <img src="<?php echo base_url("asset/imgs/svg.svg"); ?>">

                                </div>
                                <div class="user">
                                    <img class="img-circle" src="<?php echo base_url("asset/imgs/profile-Zeyad.jpg"); ?>">
                                </div>
                                <!-- Simple Pricing Tables -->
                                <!--<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9155049400353686" data-ad-slot="6591520258" data-ad-format="auto" xoqznr6="" hidden=""></ins>-->
                                <div class="content">
                                    <div class="main">
                                        <h3 class="name"><?php echo (isset($post['iduser'][0])) ? $post['iduser'][0]['nomuser'] : ""; ?></h3>

                                        <p class="profession"><?php echo $post['domaine']; ?></p>
                                        <!--<p class="text-center">"Lamborghini Mercy <br>Your chick she so thirsty <br>I'm in that two seat Lambo"</p>-->
                                        <?php
                                        $compet = explode(",", $post['competence']);
                                        ?>
                                        <!--<h4 class="text-center">Competence</h4>-->
                                        <h5 style="overflow-wrap: break-word;
                                            margin-top: -20px"
                                            class="text-center"><?php
                                                foreach ($compet as $comp) {
//                                                echo $comp." "; 
                                                    echo implode(" ", explode("_", $comp)) . ", ";
                                                }
                                                ?> </h5>

                                        <div style="float: right; margin-top: 60px" class="row">
                                            <a class="btn btn-simple" href="<?php echo site_url("freeLance/index") ?>" ><span class="fa fa-reply"></span> Retour</a>
                                            <a id="like"  class="btn btn-simple" href="#" ><span   class="fa fa-heart-o"></span> J'aime</a>
                                            <a href="#" data-toggle="modal" data-target="#myModal45" class="btn btn-simple" ><span class="fa fa-money"></span> Payer</a>
                                        </div>
                                        <script>
                                            $("#like").on("click", function (e) {
                                                e.preventDefault();
                                                console.log($(this));
                                                $(this).children().eq(0).removeClass("fa-heart-o");
                                                $(this).children().eq(0).addClass("fa-heart");
                                                $.post(<?php echo site_url("freeLance/send_mail/") ?>, {idPostulant:<?= $post['idPostulant'] ?>}, function (retour) {
                                                    console.log(retour);
                                                    location.reload();
                                                });
                                            })
                                        </script>

                                    </div>
                                    <!--                                    <div class="footers">
                                                                            <button class="btn btn-simple" onclick="rotateCard(this)">
                                                                                <i class="fa fa-mail-forward"></i> Manual Rotation
                                                                            </button>
                                                                        </div>-->
                                </div>
                            </div> <!-- end front panel -->
                            <div class="back">
                                <div class="header">
                                    <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                </div>
                                <div class="content">
                                    <div class="main">
                                        <?php
                                        $compet = explode(",", $post['competence']);
                                        ?>
                                        <h4 class="text-center">Job Description</h4>
                                        <p style="overflow-wrap: break-word;"
                                           class="text-center"><?php
                                               foreach ($compet as $comp) {
//                                                echo $comp." "; 
                                                   echo implode(" ", explode("_", $comp)) . ", ";
                                               }
                                               ?> </p>

                                        <div class="stats-container">
                                            <div class="stats">
                                                <h4>235</h4>
                                                <p>
                                                    Followers
                                                </p>
                                            </div>
                                            <div class="stats">
                                                <h4>114</h4>
                                                <p>
                                                    Following
                                                </p>
                                            </div>
                                            <div class="stats">
                                                <h4>35</h4>
                                                <p>
                                                    Projects
                                                </p>
                                            </div>
                                        </div>

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
                <?php
            endforeach;
//                    endif;
//                    endforeach;
        else:
            ?>
            <h2>Aucun profil disponible.</h2>
        <?php endif; ?>

    </div>

    <!-- modal -->
    <div class="modal about-modal fade" id="myModal45" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    <h4 class="modal-title">Embauche</h4>
                    <!--<h5>10 Août 2017</h5>-->
                </div> 
                <!--            <div class="modal-body">
                                <div class="agileits-w3layouts-info">
                                    <img src="images/2.jpg" alt="" />
                                    <p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
                                </div>
                            </div>-->
                <div class="modal-body">
                    <div class="row">
                        <form role='form' method="post" action="<?php echo site_url('freeLance/traitementPayementTest') ?>" class="form-horizontal" style="float: left">

                            <div class="input-group col-sm-12 col-sm-offset-3" >
                                <!--<label class="col-sm-6 control-label" for="login">Numero de telephone </label>-->
                                <!--<div class="col-sm-12">--> 
                                    <input type="text" name="phone" id="login" placeholder="Numero de telephone" class="form-control" required="" >
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <!--</div>-->
                            </div>
                            <br>

                            <div class="input-group col-sm-12 col-sm-offset-3">
                                <!--<label class="col-sm-6 control-label" for="pass">Montant</label>-->
                                <!--<div class="col-sm-12">-->
                                    <input type="text" name="amount" id="pass" placeholder="Montant" class="form-control" required="" >
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <!--</div>-->
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-6">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-magic"></i>Valider!!!</button>
                                </div>
                            </div>



                            <!--                            <div class="form-group">
                                                            
                                                            <div class="col-sm-offset-11">
                                                                <a href="inscription.php"><button type="submit" class="btn btn-info">Inscription!!!</button></a>
                            
                                                            </div>
                                                        </div>-->
                        </form>
                    </div>
                </div>

                <!--                <div class="modal-footer">
                                    <div class="form-group">
                
                                        <div class="col-sm-offset-9">
                                            <a href="inscription.php">S'inscrire!!</a>
                
                                        </div>
                                    </div>
                                </div>-->
            </div>
        </div>
    </div>
    <!-- //modal -->


    <div class="col-sm-6 col-md-4 " >
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
        </style>
        <div class="panel panel-default">
            <div class="panel-heading" style="height: 50px"><h4 style="margin-top: 5px"><strong>Profils</strong></h4></div>
            <div class="panel-body" style="height: 120px;border-radius: 4px;background-color: #fff;
                 -webkit-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
                 -moz-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
                 box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);" > 
                <div class="media">
                    <a class=" pull-left" href="#">
                        <!--<img width="40px" height="40px" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">-->
                    </a>                                                                                                                                                        <!--<h5 style="margin-top:5px" class="media-heading"><?php echo $post['iduser'][0]['nomuser']; ?> <?php echo $post['iduser'][0]['prenomuser']; ?></h5>-->
                    <!--<h5 style="margin-top:5px" class="media-heading"><?php echo $post['iduser'][0]['pseudo']; ?> <strong>|</strong> <?php echo $post['tarif']; ?> $ | <strong>Freelancer</strong></h5>-->

                    <div class="stats-container">
                        <div class="stats">
                            <h4><?php echo $post['adresse']; ?></h4>
                            <p>
                                Résidence
                            </p>
                        </div>
                        <div class="stats">
                            <h4><?php echo $post['tarif']; ?> $</h4>
                            <p>
                                Tarfis
                            </p>
                        </div>
                        <div class="stats">
                            <h4>35</h4>
                            <p>
                                Projects
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>





        <div class="panel panel-default">
            <div class="panel-heading" style="height: 50px"><h4 style="margin-top: 5px"><strong>Experience</strong></h4></div>
            <div class="panel-body" style="height: 120px;border-radius: 4px;background-color: #fff;
                 -webkit-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
                 -moz-box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);
                 box-shadow: 0px 0px 19px 0px rgba(0,0,0,0.16);" > 
                <div class="media">
                    <a class=" pull-left" href="#">
                        <!--<img width="40px" height="40px" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">-->
                    </a>                                                                                                                                                        <!--<h5 style="margin-top:5px" class="media-heading"><?php echo $post['iduser'][0]['nomuser']; ?> <?php echo $post['iduser'][0]['prenomuser']; ?></h5>-->
                    <!--<h5 style="margin-top:5px" class="media-heading"><?php echo $post['iduser'][0]['pseudo']; ?> <strong>|</strong> <?php echo $post['tarif']; ?> $ | <strong>Freelancer</strong></h5>-->

                    <div class="stats-container">
                        <div class="stats">
                            <h4><?php echo $post['adresse']; ?></h4>
                            <p>
                                Résidence
                            </p>
                        </div>
                        <div class="stats">
                            <h4><?php echo $post['tarif']; ?> $</h4>
                            <p>
                                Tarfis
                            </p>
                        </div>
                        <div class="stats">
                            <h4>35</h4>
                            <p>
                                Projects
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>