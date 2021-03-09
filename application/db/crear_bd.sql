DROP TABLE IF EXISTS municipios;
CREATE TABLE municipios (
    cve_mun text,
    nom_mun text,
    region_mun text,
    sup_mun numeric(12,4),
    densidad_poblacion numeric(12,4)
);

DROP TABLE IF EXISTS gobierno;
CREATE TABLE gobierno (
    cve_mun text,
    nom_alcalde text,
    vigencia_alcalde text,
    partido_alcalde text
);

DROP TABLE IF EXISTS poblacion;
CREATE TABLE poblacion (
    cve_mun text,
    pob_total integer,
    pob_0_17 integer,
    pob_18_34 integer,
    pob_35_59 integer,
    pob_60_mas integer,
    edad_mediana integer,
    tasa_crecimiento numeric(12,4),
    pob_discapacidad integer,
    hijos_vivos numeric(12,4),
    maternidad_adolescente numeric(12,4)
);

DROP TABLE IF EXISTS migracion;
CREATE TABLE migracion (
    cve_mun text,
    pob_migrante numeric(12,4),
    migrante_trabajo numeric(12,4),
    migrante_familiar numeric(12,4),
    migrante_estudio numeric(12,4),
    migrante_inseguridad numeric(12,4),
    migrante_otros numeric(12,4)
);

DROP TABLE IF EXISTS educacion;
CREATE TABLE educacion (
    cve_mun text,
    pob_15_mas integer,
    educ_15_sin_escolaridad numeric(12,4),
    educ_15_basica numeric(12,4),
    educ_15_media numeric(12,4),
    educ_15_superior numeric(12,4),
    educ_15_no_especificado numeric(12,4),
    alfabetizacion_15_24 numeric(12,4),
    alfabetizacion_25_mas numeric(12,4),
    prom_escolaridad numeric(12,4)
);

DROP TABLE IF EXISTS economia;
CREATE TABLE economia (
    cve_mun text,
    pea_total integer,
    pea_hombres integer,
    pea_mujeres integer,
    pea_ocupada_total integer,
    pea_ocupada_hombres integer,
    pea_ocupada_mujeres integer
);

DROP TABLE IF EXISTS vivienda;
CREATE TABLE vivienda (
    cve_mun text,
    viviendas_habitadas integer,
    ocupantes_vivienda numeric(12,4),
    ocupantes_cuarto numeric(12,4),
    viviendas_sanitario numeric(12,4),
    viviendas_drenaje numeric(12,4),
    viviendas_electricidad numeric(12,4),
    viviendas_agua numeric(12,4),
    viviendas_internet numeric(12,4),
    viviendas_tvpaga numeric(12,4),
    viviendas_tv numeric(12,4),
    viviendas_computadora numeric(12,4),
    viviendas_celular numeric(12,4)
);

DROP TABLE IF EXISTS salud;
CREATE TABLE salud (
    cve_mun text,
    pob_servicios_salud integer,
    salud_imss_bienestar integer,
    salud_insabi integer,
    salud_pemex integer,
    salud_issste integer,
    salud_imss integer,
    covid_confirmados integer,
    covid_defunciones integer,
    covid_corte date
);
