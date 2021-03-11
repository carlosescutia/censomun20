<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0 background-principal">
        <h3>Migración</h3>
    </div>
    <div class="card-body pb-3">
		<table class="table table-sm table-borderless text-left">
            <?php 
            $porciento = new \NumberFormatter("es-MX", \NumberFormatter::PERCENT); 
            $porciento->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 2);
            $porciento->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 2);
            ?>
   			<tr>
				<td>
					<p class="mb-0">Porcentaje población migrante que reside en el municipio y causa de migración</p>
				</td>
				<td>
                    <p class="mb-0"><?= $porciento->format($migracion['pob_migrante']) ?></p>
				</td>
			</tr>
		</table>
        <div>
            <canvas id="graf_migracion"></canvas>
			<script>
                trabajo = <?= $migracion['migrante_trabajo'] * 100 ?>;
                familiar = <?= $migracion['migrante_familiar'] * 100 ?>;
                estudio = <?= $migracion['migrante_estudio'] * 100 ?>;
                inseguridad = <?= $migracion['migrante_inseguridad'] * 100 ?>;
                otros = <?= $migracion['migrante_otros'] * 100 ?>;

                Chart.defaults.global.legend.position = 'right';
				var ctx = document.getElementById('graf_migracion').getContext('2d');
				var graf_migracion = new Chart(ctx, {
					type: 'doughnut',
					data: {
						labels: ['Trabajo', 'Familiar', 'Estudio', 'Inseguridad delictiva', 'Otros'],
						datasets: [{
                            data: [trabajo, familiar, estudio, inseguridad, otros],
							backgroundColor: [
                            'rgba(112, 173, 71, 1)',
							'rgba(68, 114, 196, 1)',
                            'rgba(255, 192, 0, 1)',
                            'rgba(67, 104, 43, 1)',
                            'rgba(38, 68, 120, 1)'
							],
							borderColor: [
                            'rgba(112, 173, 71, 1)',
							'rgba(68, 114, 196, 1)',
                            'rgba(255, 192, 0, 1)',
                            'rgba(67, 104, 43, 1)',
                            'rgba(38, 68, 120, 1)'
							],
							borderWidth: 1
						}]
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                color: 'white',
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

    </div>
</div>
