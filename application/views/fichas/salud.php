<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0 background-principal">
        <h3>Salud</h3>
    </div>
    <div class="card-body pb-0">
        <div class="row">
            <table class="table table-sm table-borderless text-left">
                <?php 
                $num = new \NumberFormatter("es-MX", \NumberFormatter::DECIMAL); 
                $num->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);
                $num->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 2);
                $porciento = new \NumberFormatter("es-MX", \NumberFormatter::PERCENT); 
                $porciento->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 2);
                ?>
                <tr>
                    <td>
                        <p class="mb-0">Porcentaje de población afiliada a servicios de salud</p>
                    </td>
                    <td>
                        <p class="mb-0"><?= $porciento->format($salud['pob_servicios_salud'] / $poblacion['pob_total']) ?></p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row mb-3">
            <canvas id="graf_salud"></canvas>
			<script>
                imss_bienestar = <?= round($salud['salud_imss_bienestar'] / $salud['pob_servicios_salud'] * 100, 2) ?>;
                insabi = <?= round($salud['salud_insabi'] / $salud['pob_servicios_salud'] * 100, 2) ?>;
                pemex = <?= round($salud['salud_pemex'] / $salud['pob_servicios_salud'] * 100, 2) ?>;
                issste = <?= round($salud['salud_issste'] / $salud['pob_servicios_salud'] * 100, 2) ?>;
                imss = <?= round($salud['salud_imss'] / $salud['pob_servicios_salud'] * 100, 2) ?>;

                Chart.defaults.global.legend.display = false;
				var ctx = document.getElementById('graf_salud').getContext('2d');
				var graf_salud = new Chart(ctx, {
					type: 'horizontalBar',
					data: {
						labels: ['Imss Bienestar', 'Insabi', 'Pemex, Defensa o Marina', 'Issste', 'Imss'],
						datasets: [{
                            data: [imss_bienestar, insabi, pemex, issste, imss],
							backgroundColor: [
                            'rgba(43, 74, 126, 1)',
							'rgba(73, 110, 48, 1)',
                            'rgba(255, 196, 0, 1)',
                            'rgba(74, 120, 199, 1)',
                            'rgba(118, 177, 77, 1)'
							],
							borderColor: [
                            'rgba(43, 74, 126, 1)',
							'rgba(73, 110, 48, 1)',
                            'rgba(255, 196, 0, 1)',
                            'rgba(74, 120, 199, 1)',
                            'rgba(118, 177, 77, 1)'
							],
							borderWidth: 1
						}]
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                align: 'end',
                                anchor: 'center',
                                color: 'black',
                                clamp: true,
                                font: {
                                    weight: 'bold'
                                },
                                formatter: function(value, context) {
                                    return value.toFixed(2) + '%';
                                }
                            }
                        }
                    }
				});
			</script>
        </div>
        <div class="row">
            <table class="table table-sm table-borderless text-left">
                <tr>
                    <td>
                        <h5 class="mb-0 text-center">COVID-19</h5>
                    </td>
                    <td>
                        <p class="mb-0">Casos confirmados</p>
                    </td>
                    <td>
                        <?= $num->format($salud['covid_confirmados']) ?></p>
                    </td>
                    <td class="text-info">
                        <span class="fa fa-head-side-mask fa-lg"></span>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-success">
                        <span class="fa fa-virus fa-3x"></span>
                    </td>
                    <td>
                        <p class="mb-0">Defunciones</p>
                    </td>
                    <td>
                        <?= $num->format($salud['covid_defunciones']) ?></p>
                    </td>
                    <td>
                        <span class="fa fa-skull-crossbones fa-lg"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mb-0 small text-center">* Corte al <?= date('d/m/y', strtotime($salud['covid_corte'])) ?></p>
                    </td>
                    <td>
                        <p class="mb-0">Tasa de letalidad</p>
                    </td>
                    <td>
                        <p class="mb-0"><?= $porciento->format($salud['covid_defunciones'] / $salud['covid_confirmados']) ?></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
