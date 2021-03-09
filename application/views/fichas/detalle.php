<main role="main" class="ml-sm-auto px-4">
    <div class="col-md-12 mb-3 pb-2 pt-3 border-bottom">

        <!-- Titulo -->
        <div class="row">
            <div class="col-md-12 text-white mb-3" style="background-color: #0262c9">
                <h1 class="display-4 font-weight-bold"><?= $municipio['nom_mun'] ?></h1>
                <h5 class="font-weight-bold">Ficha municipal</h5>
            </div>
        </div>

        <!-- Temas -->
        <div class="row">
            <div class="col-md-6 pl-0">
                <?php include 'gobierno.php' ?>
                <?php include 'poblacion.php' ?>
                <?php include 'discapacidad.php' ?>
                <?php include 'migracion.php' ?>
                <?php include 'fecundidad.php' ?>
                <?php include 'educacion.php' ?>
            </div>
            <div class="col-md-6 pr-0">
                <?php include 'localizacion.php' ?>
            </div>
        </div>
        <!-- Economia -->
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>

</main>
