
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Mon compte</h3>
                </div>
                <div class="panel-body">
                    <div class="media">
                        <a class=" pull-left " style="margin-left: 27%" href="#">
                            <img class="media-object img-responsive img-circle " src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                        </a>
                    </div>
                    <h4 class="text-center"><?php echo $this->session->userdata('nom'); ?></h4>
                    <hr/>
                    
                    <ul class="nav nav-pills nav-stacked" style="max-width: 300px; ">
                        <!--<li class="active " ><a href="#">Projet<span class="badge">42</span></a></li>-->
                        <li  ><a href="<?php echo site_url('freeLance/update') ?>">Mise à jour</a></li>
                        <li  ><a href="<?php echo site_url('freeLance/update') ?>">Déconnexion</a></li>


                    </ul>
                </div>
<!--                <div class="panel-footer">
                    <ul class="nav nav-pills nav-stacked" style="max-width: 300px; ">
                        <li class="active " ><a href="#">Projet<span class="badge">42</span></a></li>
                        <li  ><a href="<?php echo site_url('freeLance/update') ?>">Mise à jour</a></li>


                    </ul>
                </div>-->
            </div>
            <!--            <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Offres</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
                                    <li class="active " ><a href="#">Projet<span class="badge">42</span></a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <span class="glyphicon glyphicon-send"></span>
                                            Free Lance <span class="caret "></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                                            <span class="glyphicon glyphicon-user"></span>
                                            Prêt Employé <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <span class="glyphicon glyphicon-stats"></span>
                                            Interview <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>-->



            <!--            <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Reports</a></li>
                            <li><a href="#">Analytics</a></li>
                            <li><a href="#">Export</a></li>
                        </ul>
                        <ul class="nav nav-sidebar">
                            <li><a href="">Nav item</a></li>
                            <li><a href="">Nav item again</a></li>
                            <li><a href="">One more nav</a></li>
                            <li><a href="">Another nav item</a></li>
                            <li><a href="">More navigation</a></li>
                        </ul>
                        <ul class="nav nav-sidebar">
                            <li><a href="">Nav item again</a></li>
                            <li><a href="">One more nav</a></li>
                            <li><a href="">Another nav item</a></li>
                        </ul>-->
        </div>

    </div>
</div>
