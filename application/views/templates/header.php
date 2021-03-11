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

        <!-- Librerias locales -->

        <!-- Font awesome -->
        <link rel="stylesheet" href="<?=base_url()?>css/fonts/fontawesome/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="<?=base_url()?>css/fonts/fontawesome/css/brands.min.css" integrity="sha512-dBL5cY4qTt42J1cfabCHTYR7KMztyd+n4t2GhD6EH/MKWJIIHuEYckJ1nHEpTwIaiDkrjzbc6WyiSkdLP+3INQ==" crossorigin="anonymous" />
        <link rel="stylesheet" href="<?=base_url()?>css/fonts/fontawesome/css/solid.min.css" integrity="sha512-xIEmv/u9DeZZRfvRS06QVP2C97Hs5i0ePXDooLa5ZPla3jOgPT/w6CzoSMPuRiumP7A/xhnUBxRmgWWwU26ZeQ==" crossorigin="anonymous" />

        <!-- jquery -->
        <script src="<?=base_url()?>js/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>js/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>js/popper.min.js" integrity="sha512-g2PN+aYR0KupTVwea5Ppqw4bxWLLypWdd+h7E0ydT8zF+/Y2Qpk8Y1SnzVw6ZCVJPrgB/91s3VfhVhP7Y4+ucw==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?=base_url()?>js/jquery-ui.min.css" integrity="sha512-ug/p2fTnYRx/TfVgL8ejTWolaq93X+48/FLS9fKf7AiazbxHkSEENdzWkOxbjJO/X1grUPt9ERfBt21iLh2dxg==" crossorigin="anonymous" />

        <!-- bootstrap -->
        <script src="<?=base_url()?>js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?=base_url()?>js/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Chart.js -->
        <script src="<?=base_url()?>js/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?=base_url()?>js/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
        <script src="<?=base_url()?>js/chartjs-plugin-datalabels.min.js" integrity="sha512-FxGxGq2nisu+06U6WXH/FD+OkuKhMBfKOfuKz297nuE/25y9oLPMsWNpm1KcpThcoMzTYLeTWFv7DfBA6rZUpg==" crossorigin="anonymous"></script>

        <!-- leaflet -->
        <script src="<?=base_url()?>js/leaflet.min.js" integrity="sha512-SeiQaaDh73yrb56sTW/RgVdi/mMqNeM2oBwubFHagc5BkixSpP1fvqF47mKzPGWYSSy4RwbBunrJBQ4Co8fRWA==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?=base_url()?>js/leaflet.min.css" integrity="sha512-1xoFisiGdy9nvho8EgXuXvnpR5GAMSjFwp40gSRE3NwdUdIMIKuPa7bqoUhLD0O/5tPNhteAsE5XyyMi5reQVA==" crossorigin="anonymous" />
        <script src="<?=base_url()?>js/leaflet.ajax.min.js" integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw==" crossorigin="anonymous"></script>
        

        <!-- Librerias en linea -->
        <!--
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/brands.min.css" integrity="sha512-dBL5cY4qTt42J1cfabCHTYR7KMztyd+n4t2GhD6EH/MKWJIIHuEYckJ1nHEpTwIaiDkrjzbc6WyiSkdLP+3INQ==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/solid.min.css" integrity="sha512-xIEmv/u9DeZZRfvRS06QVP2C97Hs5i0ePXDooLa5ZPla3jOgPT/w6CzoSMPuRiumP7A/xhnUBxRmgWWwU26ZeQ==" crossorigin="anonymous" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js" integrity="sha512-g2PN+aYR0KupTVwea5Ppqw4bxWLLypWdd+h7E0ydT8zF+/Y2Qpk8Y1SnzVw6ZCVJPrgB/91s3VfhVhP7Y4+ucw==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.min.css" integrity="sha512-ug/p2fTnYRx/TfVgL8ejTWolaq93X+48/FLS9fKf7AiazbxHkSEENdzWkOxbjJO/X1grUPt9ERfBt21iLh2dxg==" crossorigin="anonymous" />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/0.7.0/chartjs-plugin-datalabels.min.js" integrity="sha512-FxGxGq2nisu+06U6WXH/FD+OkuKhMBfKOfuKz297nuE/25y9oLPMsWNpm1KcpThcoMzTYLeTWFv7DfBA6rZUpg==" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js" integrity="sha512-SeiQaaDh73yrb56sTW/RgVdi/mMqNeM2oBwubFHagc5BkixSpP1fvqF47mKzPGWYSSy4RwbBunrJBQ4Co8fRWA==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" integrity="sha512-1xoFisiGdy9nvho8EgXuXvnpR5GAMSjFwp40gSRE3NwdUdIMIKuPa7bqoUhLD0O/5tPNhteAsE5XyyMi5reQVA==" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js" integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw==" crossorigin="anonymous"></script>
        -->

    </head>
    <body>
        <nav class="navbar navbar-dark fixed-top d-print-block">
            <!-- municipio actual -->
            <div class="col-10 text-white">
                <h1 class="font-weight-bold"><?= $municipio['nom_mun'] ?></h1>
                <h5 class="font-weight-bold">Ficha municipal</h5>
            </div>

            <!-- boton para menu colapsado -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- menu colapsado -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="row ml-1 mb-1">
                    <div class="dropdown mr-1">
                        <button class="btn btn-secondary dropdown-toggle background-secundario border-secundario" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Abasolo - Gto
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php for ($i = 0; $i <= 14; $i++) { ?>
                            <a href="<?=base_url()?>fichas/detalle/<?=$municipios[$i]['cve_mun']?>" class="dropdown-item"><?= $municipios[$i]['nom_mun']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="dropdown mr-1">
                        <button class="btn btn-secondary dropdown-toggle background-secundario border-secundario" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Huan - S Felipe
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php for ($i = 15; $i <= 29; $i++) { ?>
                            <a href="<?=base_url()?>fichas/detalle/<?=$municipios[$i]['cve_mun']?>" class="dropdown-item"><?= $municipios[$i]['nom_mun']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle background-secundario border-secundario" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            S Fco R - Yur
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php for ($i = 30; $i <= 45; $i++) { ?>
                            <a href="<?=base_url()?>fichas/detalle/<?=$municipios[$i]['cve_mun']?>" class="dropdown-item"><?= $municipios[$i]['nom_mun']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div> 

        </nav>
        <div class="container-fluid">
