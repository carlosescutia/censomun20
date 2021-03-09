<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0" style="background-color:#0262c9">
        <h3>Educacion</h3>
    </div>
    <div class="card-body pb-0">
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-6 border-right border-bottom">
                    <h6>Población de 15 años y más según nivel de escolaridad</h6>
                    <table class="table table-sm table-borderless text-left">
                        <?php 
                        $num = new \NumberFormatter("es-MX", \NumberFormatter::DECIMAL); 
                        $porciento = new \NumberFormatter("es-MX", \NumberFormatter::PERCENT); 
                        $porciento->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 2);
                        $porciento->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 2);
                        ?>
                        <tr>
                            <td>
                                <p class="mb-0">Población de 15 +</p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $num->format($educacion['pob_15_mas']) ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0"><?= $porciento->format($educacion['educ_15_sin_escolaridad']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0">Sin escolaridad</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0"><?= $porciento->format($educacion['educ_15_basica']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0">Básica</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0"><?= $porciento->format($educacion['educ_15_media']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0">Media superior</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0"><?= $porciento->format($educacion['educ_15_superior']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0">Superior</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0"><?= $porciento->format($educacion['educ_15_no_especificado']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0">No especificado</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6 border-bottom">
                    <h6>Tasa de alfabetización</h6>
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-md-6">
                            <img class="img-fluid" src="<?=base_url()?>img/libro.png" style="width:80%">
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0">15 a 24 años</p>
                            <p class="mb-0 font-weight-bold"><?= $porciento->format($educacion['alfabetizacion_15_24']) ?></p>
                            <br />
                            <p class="mb-0">25 años y más</p>
                            <p class="mb-0 font-weight-bold"><?= $porciento->format($educacion['alfabetizacion_25_mas']) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-sm table-borderless text-left">
                <tr>
                    <td>
                        <p class="mb-0">Promedio de escolaridad</p>
                    </td>
                    <td>
                        <p class="mb-0 font-weight-bold"><?= $num->format($educacion['prom_escolaridad']); ?> años</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
