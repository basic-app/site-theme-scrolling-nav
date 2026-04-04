<!DOCTYPE html>
<html lang="<?= $locale;?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?= $title;?></title>
        <link rel="icon" type="image/x-icon" href="<?= base_url('themes/site-scrolling-nav/assets/favicon.ico');?>" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('themes/site-scrolling-nav/css/styles.css');?>" rel="stylesheet" />
        <?= $styles;?>
    </head>
    <body id="page-top">
        <?= $nav;?>
        <?= $header;?>
        <?= $content;?>
        <?= $footer;?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('themes/site-scrolling-nav/js/scripts.js');?>"></script>
        <?= $scripts;?>
    </body>
</html>