<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="<?php echo site_url('FreeLance') ?> "> <span class="text-warning"> <strong class="text-info">Free Emploi |</strong>  Interview </span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>
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