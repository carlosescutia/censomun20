<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0" style="background-color:#0262c9">
        <h3>Discapacidad</h3>
    </div>
    <div class="card-body pb-0">
		<table class="table table-sm table-borderless text-left">
            <?php 
            $num = new \NumberFormatter("es-MX", \NumberFormatter::DECIMAL); 
            ?>
   			<tr>
				<td>
					<p class="mb-0">Población con alguna discapacidad</p>
				</td>
				<td>
                    <p class="mb-0"><?= $num->format($poblacion['pob_discapacidad']) ?></p>
				</td>
			</tr>
		</table>
    </div>
</div>
