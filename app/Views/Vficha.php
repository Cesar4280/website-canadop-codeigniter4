<div class="container my-5">
    <div class="row no-gutters">
        <div class="card mb-3 shadow border-0 rounded-0 text-white">
            <div class="row" style="background: linear-gradient(to bottom, #323232 0%, #3F3F3F 40%, #1C1C1C 150%), linear-gradient(to top, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.25) 200%); background-blend-mode: multiply;">
                <div class="p-5 col-lg-5 text-center align-self-center">
                    <?php $perro = $datos['dog']; ?>
                    <img class="shadow rounded img-fluid" src="<?php echo base_url("uploads/{$perro['PRR_FOTO']}") ?>" alt="<?php echo $perro['PRR_NOMBRE'] ?>">
                </div>
                <div class="col-lg-7">
                    <div class="card-body">
                        <div class="row lead mx-auto justify-content-between align-items-center">
                            <h1 class="mb-5 col-12 fw-bold mb-lg-0 pt-lg-3 pb-lg-5 display-6 text-center text-muted"><?php echo mb_strtoupper($perro['PRR_NOMBRE']) ?></h1>
                            <div class="col-5">
                                <p>Altura: <?php echo $perro['PRR_ALTURA']; ?> cm</p>
                                <p>Color: <?php echo $perro['PRR_COLOR']; ?></p>
                                <p>Sexo: <?php echo $perro['PRR_SEXO'] === 'M' ? 'Macho' : 'Hembra'; ?></p>
                                <p>Codigo: <?php echo $perro['PRR_COD']; ?></p>
                            </div>
                            <div class="col-5">
                                <p>Esterilizado: <?php echo $perro['PRR_ESTERILIZADO']  ? 'Si' : 'No'; ?></p>
                                <p>Desparasitado: <?php echo $perro['PRR_DESPARASITADO']  ? 'Si' : 'No'; ?></p>
                                <p>Tamaño: <?php echo $perro['PRR_TAMANO']; ?></p>
                                <p>Longevidad: <?php echo $perro['PRR_LONGEVIDAD']; ?></p>
                            </div>
                            <p class="col-12 mt-5">Fecha De Ingreso:<br><?php echo strfdate($perro['PRR_FING']); ?></p>
                            <p class="col-12 mt-1">Detalles:<br><?php echo $perro['PRR_SALUD'] ? $perro['PRR_SALUD'] : 'Sin novedad'; ?></p>
                            <div class="my-4 col-12 d-grid">
                                <a role="button" href="<?php echo base_url("formulario/{$perro['PRR_ID']}") ?>" class="btn col-7 col-sm-6 col-md-4 btn-lg mx-auto btn-secondary rounded-0">ADOPTAR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-3 col-12 bg-secondary card-footer rounded-0">
                    <address class="fst-italic text-white">
                        También disponemos de un sistema de grabación de voz
                        en el que puedes contarnos lo que tú quieras. Llama
                        al (+57) 318 736 8023 las 24 horas del día, de los 365 días del año.
                        En cuanto escuchemos tu mensaje, te llamamos.
                    </address>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('js/bootstrap.js') ?>"></script>