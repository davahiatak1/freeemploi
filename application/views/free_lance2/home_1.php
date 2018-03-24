
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <ul class="breadcrumb" style="margin-bottom: -5px; background-color: white">
            <li class="active"><a href="<?php site_url('FreeLance') ?>">Free-Lance</a></li>
            <li >Accueil</li>            
        </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main home">

        <!--    <div class="row col-md-12">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Color</label>
                        <div class="col-xs-5 selectContainer">
                            <select class="form-control" name="color" >
                                <option value="">Services</option>
                                <option value="black">Developpeur</option>
                                <option value="green">Designeur</option>
                                <option value="red">Community Manager</option>
                            </select>
                        </div>
                    </div>
                </form>
                
            </div>-->





        <div class="row col-md-12">
            <?php
            //$posts=$this->session->userdata('posts');
            $posts = $_POST['posts'];
// print_r($_POST['posts']);
            if ($posts): foreach ($posts as $post):
                    ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="<?php echo site_url('freeLance/profil') ?>" class="pull-right">View all</a> <h4>Profiles</h4></div>
                            <div class="panel-body">
                                Check out some of our member profiles..
                                <hr>
                                <div class="well well-sm">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#">
                                            <img class="media-object" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                        </a>
                                        <div class="media-body">
                                            <!--<h4 class="media-heading">Jose Kinsella</h4>-->
                                            <h4 class="media-heading"><?php echo $post['nom']; ?></h4>
                                            <!--<h4 class="media-heading"><?php echo $this->session->userdata('nom'); ?></h4>-->
                                            <p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                                            <p>
                                                <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                                                <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                <?php endforeach;
            else:
                ?>
                <h2>Aucun profil disponible.</h2>
<?php endif; ?>

            <!--        <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Profiles</h4></div>
                            <div class="panel-body">
                                Check out some of our member profiles..
                                <hr>
                                <div class="well well-sm">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#">
                                            <img class="media-object" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jose Kinsella</h4>
                                            <p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                                            <p>
                                                <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                                                <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
            
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Profiles</h4></div>
                            <div class="panel-body">
                                Check out some of our member profiles..
                                <hr>
                                <div class="well well-sm">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#">
                                            <img class="media-object" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jose Kinsella</h4>
                                            <p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                                            <p>
                                                <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                                                <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>-->
        </div>

        <!--    <div class="row col-md-12">
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Profiles</h4></div>
                        <div class="panel-body">
                            Check out some of our member profiles..
                            <hr>
                            <div class="well well-sm">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#">
                                        <img class="media-object" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jose Kinsella</h4>
                                        <p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                                        <p>
                                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Profiles</h4></div>
                        <div class="panel-body">
                            Check out some of our member profiles..
                            <hr>
                            <div class="well well-sm">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#">
                                        <img class="media-object" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jose Kinsella</h4>
                                        <p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                                        <p>
                                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Profiles</h4></div>
                        <div class="panel-body">
                            Check out some of our member profiles..
                            <hr>
                            <div class="well well-sm">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#">
                                        <img class="media-object" src="<?php echo base_url("asset/img/a13ac7aed64918b6354f48da59490e3a.jpg") ?>">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jose Kinsella</h4>
                                        <p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                                        <p>
                                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>-->

<!--<script>
$(document).ready(function(){
          $('.combobox').combobox()
        });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->


    </div>

