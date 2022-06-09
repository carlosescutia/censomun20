<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0 background-principal">
        <h3>Economía</h3>
    </div>
    <div class="card-body pb-0">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-6 border-right">
                    <h6>Población económicamente activa (población de 12 años y más)</h6>
                    <table class="table table-sm table-borderless table-striped text-left">
                        <?php 
                        $num = new \NumberFormatter("es-MX", \NumberFormatter::DECIMAL); 
                        $porciento = new \NumberFormatter("es-MX", \NumberFormatter::PERCENT); 
                        $porciento->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 2);
                        $porciento->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 2);
                        ?>
                        <thead>
                            <tr>
                                <th>
                                </th>
                                <th scope="col">Frecuencia</th>
                                <th scope="col">Porcentaje</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                <p class="mb-0">Total</p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $num->format($economia['pea_total']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $porciento->format($economia['pea_total'] / $poblacion['pob_total']) ?> <span class="small">Respecto a la población total</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0">Hombres</p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $num->format($economia['pea_hombres']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $porciento->format($economia['pea_hombres'] / $economia['pea_total']) ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0">Mujeres</p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $num->format($economia['pea_mujeres']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $porciento->format($economia['pea_mujeres'] / $economia['pea_total']) ?></p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <h6>Población Económicamente Activa ocupada</h6>
                    <table class="table table-sm table-borderless table-striped text-left">
                        <thead>
                            <tr>
                                <th>
                                </th>
                                <th scope="col">Frecuencia</th>
                                <th scope="col">Porcentaje</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                <p class="mb-0">Total</p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $num->format($economia['pea_ocupada_total']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $porciento->format($economia['pea_ocupada_total'] / $economia['pea_total']) ?></p>
                            </td>
                            <td>
                                <p class="small">Respecto a la PEA</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0">Hombres</p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $num->format($economia['pea_ocupada_hombres']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $porciento->format($economia['pea_ocupada_hombres'] / $economia['pea_ocupada_total']) ?></p>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0">Mujeres</p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $num->format($economia['pea_ocupada_mujeres']) ?></p>
                            </td>
                            <td>
                                <p class="mb-0"><?= $porciento->format($economia['pea_ocupada_mujeres'] / $economia['pea_ocupada_total']) ?></p>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
