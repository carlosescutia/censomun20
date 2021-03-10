<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url('img/favicon.ico'); ?>" sizes="16x16" type="image/png" />

        <title>Fichas municipales Censo 2020</title>

        <!-- custom css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/base.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/print.css" media="print" />

        <!-- Font awesome -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/fonts/fontawesome/css/fontawesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/fonts/fontawesome/css/brands.min.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/fonts/fontawesome/css/solid.min.css" />

        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <!-- <script src="<?=base_url()?>js/jquery.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
        <!-- <script src="<?=base_url()?>js/jquery-ui.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js" integrity="sha512-g2PN+aYR0KupTVwea5Ppqw4bxWLLypWdd+h7E0ydT8zF+/Y2Qpk8Y1SnzVw6ZCVJPrgB/91s3VfhVhP7Y4+ucw==" crossorigin="anonymous"></script>
        <!-- <script src="<?=base_url()?>js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.min.css" integrity="sha512-ug/p2fTnYRx/TfVgL8ejTWolaq93X+48/FLS9fKf7AiazbxHkSEENdzWkOxbjJO/X1grUPt9ERfBt21iLh2dxg==" crossorigin="anonymous" />
        <!-- <link rel="stylesheet" type="text/css" href="<?=base_url()?>js/jquery-ui.css"/> -->

        <!-- bootstrap -->
        <link rel="stylesheet" href="<?=base_url()?>js/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="<?=base_url()?>js/tether.min.js"></script>
        <script src="<?=base_url()?>js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Chart.js -->
        <script src="<?=base_url()?>js/Chart.min.js"></script>
        <script src="<?=base_url()?>js/chartjs-plugin-labels.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>js/Chart.min.css"/>

        <!-- leaflet -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js" integrity="sha512-SeiQaaDh73yrb56sTW/RgVdi/mMqNeM2oBwubFHagc5BkixSpP1fvqF47mKzPGWYSSy4RwbBunrJBQ4Co8fRWA==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" integrity="sha512-1xoFisiGdy9nvho8EgXuXvnpR5GAMSjFwp40gSRE3NwdUdIMIKuPa7bqoUhLD0O/5tPNhteAsE5XyyMi5reQVA==" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js" integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw==" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top d-print-block">
            <!-- logo -->
            <div class="logo_menu">
                <img class="logo" src="<?=base_url()?>img/gto_iplaneg.png" class="d-inline-block align-top" alt="iplaneg">
            </div> <!-- logo -->

            <!-- boton para menu colapsado (pantallas pequeñas) -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" >
                <span class="navbar-toggler-icon"></span>
            </button> <!-- boton menu -->

            <!-- opciones del menu -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="col-sm-6 mr-5">
                    <h5 class="my-0 mr-md-auto font-weight-normal text-white">Fichas municipales Censo 2020</h5>
                </div>
            </div> <!-- opciones del menu -->
        </nav>
        <div class="container-fluid">

