<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0" style="background-color:#0262c9">
        <h3>Población</h3>
    </div>
    <div class="card-body pb-0">
		<table class="table table-sm table-borderless table-striped text-left">
            <thead>
                <tr>
                    <th>Grupos</th>
                    <th class="text-right">Población</th>
                    <th class="text-right">Porcentaje</th>
                </tr>
            </thead>
            <?php 
            $num = new \NumberFormatter("es-MX", \NumberFormatter::DECIMAL); 
            $porciento = new \NumberFormatter("es-MX", \NumberFormatter::PERCENT); 
            $porciento->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 2);
            $porciento->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 2);
            ?>
			<tr>
				<td>
					<p class="mb-0">Total</p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $num->format($poblacion['pob_total']) ?></p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $porciento->format($poblacion['pob_total'] / $poblacion['pob_total']) ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="mb-0">0 a 17</p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $num->format($poblacion['pob_0_17']) ?></p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $porciento->format($poblacion['pob_0_17'] / $poblacion['pob_total']) ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="mb-0">18 a 34</p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $num->format($poblacion['pob_18_34']) ?></p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $porciento->format($poblacion['pob_18_34'] / $poblacion['pob_total']) ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="mb-0">35 a 59</p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $num->format($poblacion['pob_35_59']) ?></p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $porciento->format($poblacion['pob_35_59'] / $poblacion['pob_total']) ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="mb-0">60 y más</p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $num->format($poblacion['pob_60_mas']) ?></p>
				</td>
				<td>
                    <p class="mb-0 text-right"><?= $porciento->format($poblacion['pob_60_mas'] / $poblacion['pob_total']) ?></p>
				</td>
			</tr>
		</table>
        <hr />
		<table class="table table-sm table-borderless text-left">
			<tr>
				<td>
					<p class="mb-0">Edad mediana</p>
				</td>
				<td>
					<p class="mb-0"><?= $poblacion['edad_mediana'] ?> años</p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="mb-0">Tasa de crecimiento</p>
				</td>
				<td>
                    <p class="mb-0"><?= $num->format($poblacion['tasa_crecimiento']) ?></p>
				</td>
			</tr>
		</table>

    </div>
</div>

