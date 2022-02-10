<div class="card border-0">
    <div class="card-header rounded-0 text-white text-left pt-1 pb-0 background-principal">
        <h3>Localización</h3>
    </div>
    <div class="card-body pb-0">
        <div class="col-sm-12">
            <div class="row mb-3">
                <div class="col-sm-9 border-right">
					<div id="map"  style="width: 100%; height: 300px; float:left"></div>
					<script type="text/javascript">
                        // crear layer openstreetmap
                        var backgUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
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
                                    dashArray: '',
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
                                mouseover: highlightFeature,
                                mouseout: resetHighlight,
                                click: function(e){
                                    baseurl = '<?= base_url() ?>';
                                    newmun = feature.properties.CVE_MUN;
                                    url = baseurl + 'fichas/detalle/' + newmun;
                                    window.open(url, '_self');
                                }
                            });
                        }

                        // control de informacion
                        var info = L.control();
                        info.onAdd = function(map) {
                            this._div = L.DomUtil.create('div', 'info');
                            this.update();
                            return this._div;
                        }

                        info.update = function(props) {
                            this._div.innerHTML = '<h6>Mostrar ficha municipal</h6>' + (props ? '<b>' + props.NOM_MUN + '</b>' : 'Seleccione un municipio');
                        }

						function highlightFeature(e) {
							var layer = e.target;

							layer.setStyle({
								weight: 4,
								color: '#00f',
								dashArray: '',
								fillOpacity: 0.2
							});

							if (!L.Browser.ie && !L.Browser.opera) {
								layer.bringToFront();
							}

							info.update(layer.feature.properties);
						}

						function resetHighlight(e) {
							capa_municipios.resetStyle(e.target);
							info.update();
						}

                        // crear mapa en el div "map" y centrarlo en Guanajuato
                        var map = L.map('map', {
                        center: new L.LatLng(21.25304, -100.94788), 
                        zoom: 7,
                        layers: [backg_lyr, capa_municipios]
                        });

                        // agregar control info
                        info.addTo(map);

					</script>
                </div>
                <div class="col-sm-3">
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
