<?php

$backgroundImage = $backgroundImage ?? base_url('themes/site-scrolling-nav/images/home-bg.jpg');

?>
<!-- Header-->
<style type="text/css">
    header {
        background: no-repeat center center;
        background-color: #6c757d;
        background-size: cover;
        background-attachment: scroll;
        background-image: url('<?= $backgroundImage;?>');
    }
</style>
<header class="text-white">
    <div class="container px-4 text-center">
        <h1 class="fw-bolder"><?= $title;?></h1>
        <p class="lead"><?= $description;?></p>
        <?php
        /*
        <a class="btn btn-lg btn-light" href=""></a>
        */?>
    </div>
</header>