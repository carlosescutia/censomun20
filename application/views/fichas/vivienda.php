<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0" style="background-color:#0262c9">
        <h3>Vivienda</h3>
    </div>
    <div class="card-body pb-0">
        <div class="row">
            <table class="table table-sm table-borderless table-striped text-left">
                <?php 
                $num = new \NumberFormatter("es-MX", \NumberFormatter::DECIMAL); 
                $num->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);
                $num->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 2);
                $porciento = new \NumberFormatter("es-MX", \NumberFormatter::PERCENT); 
                $porciento->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 0);
                ?>
                <tr>
                    <td>
                        <p class="mb-0">Total de viviendas particulares habitadas</p>
                    </td>
                    <td>
                        <p class="mb-0"><?= $num->format($vivienda['viviendas_habitadas']) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mb-0">Promedio de ocupantes por vivienda</p>
                    </td>
                    <td>
                        <p class="mb-0"><?= $num->format($vivienda['ocupantes_vivienda']) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mb-0">Promedio de ocupantes por cuarto</p>
                    </td>
                    <td>
                        <p class="mb-0"><?= $num->format($vivienda['ocupantes_cuarto']) ?></p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row mb-3">
            <canvas id="graf_vivienda"></canvas>
			<script>
                sanitario = <?= $vivienda['viviendas_sanitario'] * 100 ?>;
                drenaje = <?= $vivienda['viviendas_drenaje'] * 100 ?>;
                electricidad = <?= $vivienda['viviendas_electricidad'] * 100 ?>;
                agua = <?= $vivienda['viviendas_agua'] * 100 ?>;

                Chart.defaults.global.legend.display = false;
				var ctx = document.getElementById('graf_vivienda').getContext('2d');
				var graf_vivienda = new Chart(ctx, {
                    plugins: [ChartDataLabels],
					type: 'horizontalBar',
					data: {
						labels: ['Sanitario', 'Drenaje', 'Energía eléctrica', 'Agua'],
						datasets: [{
                            data: [sanitario, drenaje, electricidad, agua],
							backgroundColor: [
                            'rgba(100, 171, 235, 1)',
							'rgba(255, 212, 0, 1)',
                            'rgba(161, 229, 88, 1)',
                            'rgba(0, 123, 212, 1)'
							],
							borderColor: [
                            'rgba(100, 171, 235, 1)',
							'rgba(255, 212, 0, 1)',
                            'rgba(161, 229, 88, 1)',
                            'rgba(0, 123, 212, 1)'
							],
							borderWidth: 1
						}]
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                align: 'end',
                                anchor: 'enter',
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
            <h6>Viviendas con disponibilidad de TIC</h6>
            <table class="table table-sm table-borderless table-striped text-left">
                <tr>
                    <td>
                        <p class="mb-0">Internet</p>
                    </td>
                    <td>
                        <span class="fa fa-wifi"></span>
                    </td>
                    <td>
                        <p class="mb-0"><?= $porciento->format($vivienda['viviendas_internet']) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mb-0">Televisión de paga</p>
                    </td>
                    <td>
                        <span class="fa fa-satellite-dish"></span>
                    </td>
                    <td>
                        <p class="mb-0"><?= $porciento->format($vivienda['viviendas_tvpaga']) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mb-0">Pantalla plana</p>
                    </td>
                    <td>
                        <span class="fa fa-tv"></span>
                    </td>
                    <td>
                        <p class="mb-0"><?= $porciento->format($vivienda['viviendas_tv']) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mb-0">Computadora</p>
                    </td>
                    <td>
                        <span class="fa fa-laptop"></span>
                    </td>
                    <td>
                        <p class="mb-0"><?= $porciento->format($vivienda['viviendas_computadora']) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mb-0">Teléfono celular</p>
                    </td>
                    <td>
                        <span class="fa fa-mobile-alt"></span>
                    </td>
                    <td>
                        <p class="mb-0"><?= $porciento->format($vivienda['viviendas_celular']) ?></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
