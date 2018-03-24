<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?= base_url() ?>asset/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/font-awesome.min.css"/>
<!--<link rel="stylesheet" href="<?= base_url() ?>asset/cerulean/theme/bootstrap.min.css"/>-->

<!--<link rel="stylesheet" href="<?= base_url() ?>asset/readable/theme/bootstrap.min.css"/>-->
<!--<link rel="stylesheet" href="<?= base_url() ?>asset/bootstrap.min.css"/>-->
<link rel="stylesheet" href="<?= base_url() ?>asset/css/bootstrap-multiselect.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/style.css"/>
<!--<link rel="stylesheet" href="<?= base_url() ?>asset/css/layoutDashboard.css"/>-->
<link rel="stylesheet" href="<?= base_url() ?>asset/css/mycss.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/carouselFade.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/footerStyle.css"/>
<link rel="stylesheet" href="<?= base_url() ?>asset/css/lance.css"/>

<link rel="stylesheet" href="<?= base_url() ?>asset/css/cardFA.css"/>

<style>
    .lbg {
        background: #fff url('<?php echo base_url("asset/imgs/back.gif"); ?>');
    }
</style>


</head>
<body>




    <!-- nav-->
    <nav class="navbar navbar-default bg-primary navbar-fixed-top" >
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--style="color: #011d37"-->
                <a class="navbar-brand" href="<?php echo site_url('Accueil/') ?> "> <span ><strong>Free Emploi</strong> | Bienvenue <i class="text-muted"><?php echo $this->session->userdata('nom'); ?></i></span></a>
            </div>


            <?php if (!$this->session->userdata('nom')): ?>
                <div  id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <form id="signin" style="margin-top: 12px" class="navbar-form navbar-right pull-left " method="post" action="<?php echo site_url('accueil/connexion') ?>" role="form">
                            <div class="input-group" style="width: 180px">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="tel" class="form-control" name="pseudo" value="" placeholder="Pseudo">                                        
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


                <?php if ($this->session->userdata('nom')): ?>



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
            </div>
        </div>
    </nav>