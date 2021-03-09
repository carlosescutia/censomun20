<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0" style="background-color:#0262c9">
        <h3>Gobierno</h3>
    </div>
    <div class="card-body pb-0">
		<table class="table table-sm table-borderless text-left">
			<tr>
				<td>
					<p class="mb-0">Presidente municipal</p>
				</td>
				<td>
					<p class="mb-0"><?= $gobierno['nom_alcalde'] ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="mb-0">Vigencia</p>
				</td>
				<td>
					<p class="mb-0"><?= $gobierno['vigencia_alcalde'] ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="mb-0">Partido político</p>
				</td>
				<td>
					<p class="mb-0"><?= $gobierno['partido_alcalde'] ?></p>
				</td>
			</tr>
		</table>
    </div>
</div>
