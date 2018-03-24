
<link rel="stylesheet" href="<?= base_url() ?>asset/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/font-awesome.min.css"/>
<!--<link rel="stylesheet" href="<?= base_url() ?>asset/cerulean/theme/bootstrap.min.css"/>-->

<link rel="stylesheet" href="<?= base_url() ?>asset/readable/theme/bootstrap.min.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/style.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/layoutDashboard.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/mycss.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/carouselFade.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/footerStyle.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/lance.css"/>




</head>
<body>

    <div id="1" class="row toggle" style="display:none">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('Accueil/') ?> "> <strong>Free Emploi</strong> || Bienvenue</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form id="signin" class="navbar-form navbar-right " method="post" action="<?php echo site_url('freeLance/connexion') ?>" role="form">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="tel" class="form-control" name="phone" value="" placeholder="Number">                                        
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control col-sm-3" name="pwd" value="" placeholder="Password">                                        
                            </div>

                            <input type="submit" class="btn btn-success">
                            <!--<i class="glyphicon glyphicon-log-in"></i>-->
                        </form>
                    <ul class="nav navbar-nav navbar-right">
                        <!--<li><a href="<?php echo site_url('FreeLance') ?>">Connexion</a></li>-->
                        <!--<li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-link"></i>Connexion</a></li>-->
                        <!--<li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>Help</a></li>-->
                        
                        <li><a href="<?php echo site_url('FreeLance') ?>">Connexion</a>
                    </ul>
                    <!--          <form class="navbar-form navbar-right">
                                <input type="text" class="form-control" placeholder="Search...">
                              </form>-->
                </div>
            </div>
        </nav>
    </div>


    <!--Second nav-->
    <div id="2" class="row toggle" style="display:none" >
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('Accueil/') ?> "> <strong>Free Emploi</strong> || Bienvenue</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <form id="signin" class="navbar-form navbar-right pull-left " method="post" action="<?php echo site_url('freeLance/connexion') ?>" role="form">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="tel" class="form-control" name="phone" value="" placeholder="Number">                                        
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control col-sm-3" name="pwd" value="" placeholder="Password">                                        
                            </div>

                            <input type="submit" class="btn btn-success">
                            <!--<i class="glyphicon glyphicon-log-in"></i>-->
                        </form>
                        <li id="11"><a href="#1"><i class="glyphicon glyphicon-log-in"></i>Connexion</a></li>
                        <li><a href="<?php echo site_url('FreeLance/inscription') ?>"><i class="glyphicon glyphicon-plus-sign"></i>S'inscrire</a></li>
                        <!--<li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-link"></i>Connexion</a></li>-->
                        <!--<li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>Help</a></li>-->
                        <!--                        <form id="signin" class="navbar-form navbar-right" role="form">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input id="email" type="email" class="form-control" name="email" value="" placeholder="Login">                                        
                                                    </div>
                        
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                        <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
                                                    </div>
                        
                                                    <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-log-in"></i></button>
                                                </form>-->
                    </ul>
                    <!--          <form class="navbar-form navbar-right">
                                <input type="text" class="form-control" placeholder="Search...">
                              </form>-->
                </div>
            </div>
        </nav>
    </div>

    <script>

        $(function () {
            $("#2").show();
        });
    </script>
    <script>//
//        $("#navbar a").click(function (e) {
//            e.preventDefault();
//            $(".toggle").hide();
//            var toShow = $(this).attr('href');
//            $(toShow).show();
//        });
//    </script>
    <script>
        $("#navbar a").click(function (e) {
            $("#2").hide();
            var toShow = $(this).attr('href');
            $(toShow).show();
        })
    </script>

    <!-- Modal1 -->
    <div class="modal about-modal fade" id="myModal1" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    <h4 class="modal-title">Connexion</h4>
                    <!--<h5>10 Août 2017</h5>-->
                </div> 
                <!--            <div class="modal-body">
                                <div class="agileits-w3layouts-info">
                                    <img src="images/2.jpg" alt="" />
                                    <p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
                                </div>
                            </div>-->
                <div class="modal-body">
                    <div class="agileits-w3layouts-info">
                        <div class="row">
                            <form role='form' method="post" action="conTr.php" class="form-horizontal" style="float: left">

                                <div class="form-group" >
                                    <label class="col-sm-6 control-label" for="login">Login </label>
                                    <div class="input-group col-sm-6">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span> 
                                        </div>
                                        <input type="text"  name="login" id="login" placeholder="Login.........." class="form-control" required="" >

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-6 control-label" for="pass">Password</label>
                                    <div class="input-group col-sm-6">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span> 
                                        </div>
                                        <input type="password" name="pass" id="pass" placeholder="Mot de passe.........." class="form-control" required="" >

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-6">
                                        <button type="submit" class="btn btn-success">Valider!!!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="form-group">

                        <div class="col-sm-offset-9">
                            <a href="inscription.php">S'inscrire!!</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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