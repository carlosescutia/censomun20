<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0" style="background-color:#0262c9">
        <h3>Localización</h3>
    </div>
    <div class="card-body pb-0">
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-9 border-right">
					<div id="map"  style="width: 100%; height: 300px; float:left"></div>

					<script type="text/javascript">
                        // crear layer openstreetmap
                        var backgUrl = 'http://{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png';
                        backgAttrib = '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>';
                        var backg_lyr = L.tileLayer(backgUrl, {maxZoom: 18, attribution: backgAttrib});                        

                        // crear capa_municipios desde geojson
                        var capa_municipios = new L.GeoJSON.AJAX("<?=base_url()?>doc/municipios_gto.geojson", {
                            style: style,
                            onEachFeature: onEachFeature
                        });

						function style(feature){
                            cve_mun = "<?= $municipio['cve_mun'] ?>";
                            if (feature.properties.CVE_MUN == cve_mun ) {
                                return {
                                    fillColor: '#00f',
                                    weight: 2,
                                    opacity: 1,
                                    color: '#00f',
                                    dashArray: '3',
                                    fillOpacity: 0.8
                                };
                            } else {
                                return {
                                    weight: 1,
                                    opacity: 0.5,
                                    color: '#000',
                                    fillOpacity: 0
                                };
                            }
						}

                        function onEachFeature(feature, layer) {
                            layer.on({
                                click: function(e){
                                    baseurl = '<?= base_url() ?>';
                                    newmun = feature.properties.CVE_MUN;
                                    url = baseurl + 'fichas/detalle/' + newmun;
                                    window.open(url, '_self');
                                }
                            });
                        }

                        // crear mapa en el div "map" y centrarlo en Guanajuato
                        var map = L.map('map', {
                        center: new L.LatLng(20.85304, -100.94788), 
                        zoom: 7,
                        layers: [backg_lyr, capa_municipios]
                        });
					</script>
                </div>
                <div class="col-md-3">
                    <?php 
                    $num = new \NumberFormatter("es-MX", \NumberFormatter::DECIMAL); 
                    $num->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);
                    $num->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 2);
                    ?>
                    <p class="mb-0">Región</p>
                    <p class="mb-0 font-weight-bold"><?= $municipio['region_mun'] ?></p>
                    <br />
                    <p class="mb-0">Densidad de población</p>
                    <p class="mb-0 font-weight-bold"><?= $num->format($municipio['densidad_poblacion']) ?> hab/km<sup>2</sup></p>
                    <br />
                    <p class="mb-0">Superficie</p>
                    <p class="mb-0 font-weight-bold"><?= $num->format($municipio['sup_mun']) ?> km<sup>2</sup></p>
                </div>
            </div>
        </div>
    </div>
</div>
