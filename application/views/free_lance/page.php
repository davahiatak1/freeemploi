<script src="<?= base_url() ?>asset/js/jquery-2.1.4.min.js"></script>

<div id="content">
    

<div id="data">
    <?php foreach ($user as $post) {
        ?>
        <div class="col-sm-4 ">
            <div class="card-container manual-flip">

                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="<?php echo base_url("asset/imgs/129556292-kyz84k3.jpg"); ?>">
                        </div>
                        <div class="user">
                            <img class="img-circle" src="<?php echo base_url("asset/imgs/profile-Zeyad.jpg"); ?>">
                        </div>
                        <!-- Simple Pricing Tables -->
                        <!--<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9155049400353686" data-ad-slot="6591520258" data-ad-format="auto" xoqznr6="" hidden=""></ins>-->
                        <div class="content">
                            <div class="main">
                                <h3 style="margin-top: -10px" class="name"><?php echo (isset($post['iduser'][0])) ? $post['iduser'][0]['nomuser'] : ""; ?></h3>

                                <p class="profession"><?php echo $post['domaine']; ?>
                                <p style="margin-top: -20px"class="text-center">"Lamborghini Mercy "</p>
                                <!--<p style="margin-top: -10px"class="text-center"><?php echo $post['tarif']; ?> $</p>-->
                                </p>
                                <!--<p class="text-center">"Lamborghini Mercy <br>Your chick she so thirsty <br>I'm in that two seat Lambo"</p>-->

                            </div>
                            <div class="footers">
                                <button style="margin-top: -20px " class="btn btn-simple" onclick="rotateCard(this)">
                                    <i class="fa fa-mail-forward"></i> Voir plus
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <!--                                                <div class="header">
                                                                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                                                        </div>-->
                        <div class="content">
                            <div class="main">
                                <?php
                                $compet = explode(",", $post['competence']);
                                ?>
                                <h4 class="text-center text-info">Competence</h4>
                                <p style="overflow-wrap: break-word;"
                                   class="text-center"><?php
                                       foreach ($compet as $comp) {
//                                                echo $comp." "; 
                                           echo implode(" ", explode("_", $comp)) . ", ";
                                       }
                                       ?> </p>

                                <div class="stats-container" style="margin-top: 0px">
                                    <div class="stats">
                                        <h4 class="text-info">Zone</h4>
                                        <p> <?php echo $post['adresse']; ?></p>
                                    </div>
                                    <div class="stats">
                                        <h4 class="text-info">Tarif</h4>
                                        <p> <?php echo $post['tarif']; ?> $</p>
                                    </div>
                                    <div class="stats">
                                        <h4 class="text-info">Diplome</h4>
                                        <p> <?php echo $post['diplome']; ?></p>
                                    </div>
                                </div>


                                <!--                                            <div class="stats-container">
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
                                                                            </div>-->

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
    <?php } ?>
</div>
    </div>

<script>
    $(function () {
        applyPagination();

        function applyPagination() {
            $("#ajax_paging a").click(function () {
                var url = $(this).attr("href");
                $.ajax({
                    type: "POST",
                    data: "ajax=1",
                    url: url,
                    beforeSend: function () {
                        $("#data").html("");


                    },
                    success: function (msg) {
                        $("#data").html(msg);
                        applyPagination();
                    }
                });
                return false;
            });
        }
    });
</script>-->
