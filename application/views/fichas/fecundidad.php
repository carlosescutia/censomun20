<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0" style="background-color:#0262c9">
        <h3>Fecundidad</h3>
    </div>
    <div class="card-body pb-0">
		<table class="table table-sm table-borderless text-left">
            <?php 
            $num = new \NumberFormatter("es-MX", \NumberFormatter::DECIMAL); 
            $num->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 4);
            $num->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 4);
            $porciento = new \NumberFormatter("es-MX", \NumberFormatter::PERCENT); 
            $porciento->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 2);
            $porciento->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 2);
            ?>
   			<tr>
				<td>
					<p class="mb-0">Promedio de hijos nacidos vivos</p>
				</td>
				<td>
                    <p class="mb-0"><?= $num->format($poblacion['hijos_vivos']) ?></p>
				</td>
			</tr>
   			<tr>
				<td>
					<p class="mb-0">Maternidad adolescente</p>
				</td>
				<td>
                    <p class="mb-0"><?= $porciento->format($poblacion['maternidad_adolescente']) ?></p>
				</td>
			</tr>
		</table>
    </div>
</div>
