    <div class="container my-5">
        <div class="row mb-4">
            <div class="d-flex col-9">
                <h1 class="text-primary">EDITAR CANINO</h1>
            </div>
            <h1 class="d-flex col-3 align-items-center justify-content-end lead align-self-center">
                <a class="btn btn-primary rounded-circle py-2 d-flex justify-content-center align-items-center" href="<?php echo base_url('admin') ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                        <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                    </svg>
                </a>
            </h1>
        </div>
        <form action="<?php echo site_url('/updatecanino') ?>" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
            <?php $perro = $datos['dog']; ?>
            <div class="col-md-4">
                <label for="PRR_NOMBRE" class="form-label">Nombre</label>
                <input type="text" value="<?php echo $perro['PRR_NOMBRE']; ?>" name="PRR_NOMBRE" id="PRR_NOMBRE" class="form-control" placeholder="Ejemplo: Salvador" disabled>
                <div class="invalid-feedback">El campo debe tener entre 2 a 20 letras</div>
            </div>
            <div class="col-md-4">
                <label for="RAZA_ID" class="form-label">Raza</label>
                <select name="RAZA_ID" class="form-select" id="RAZA_ID" disabled>
                    <option value="<?php echo $perro['RAZA_ID']; ?>" selected><?php echo $perro['RAZA_NOMBRE']; ?></option>
                </select>
            </div>
            <div class="col-md-4">
                <div class="row g-1 row-cols-1">
                    <label class="col pt-1 mb-1 form-label">Sexo</label>
                    <div class="col d-flex justify-content-between">
                        <div class="form-check form-check-inline">
                            <input name="PRR_SEXO" class="form-check-input" type="radio" id="macho" value="M" <?php if ($perro['PRR_SEXO'] === 'M') echo "checked"; ?> disabled>
                            <label class="form-check-label" for="macho">Macho</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="PRR_SEXO" class="form-check-input" type="radio" id="hembra" value="H" <?php if ($perro['PRR_SEXO'] === 'H') echo "checked"; ?> disabled>
                            <label class="form-check-label" for="hembra">Hembra</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="PRR_FING" class="form-label">Fecha de ingreso</label>
                <input class="form-control" type="text" name="PRR_FING" id="PRR_FING" value="<?php echo strfdate($perro['PRR_FING']); ?>" disabled>
            </div>
            <div class="col-md-4">
                <label for="PRR_TAMANO" class="form-label">Tamaño</label>
                <select name="PRR_TAMANO" class="form-select" id="PRR_TAMANO" required>
                    <?php foreach (["Alto", "Mediano", "Pequeño"] as $tamano) : ?>
                        <option value="<?php echo $tamano; ?>" <?php if ($perro['PRR_TAMANO'] === $tamano) echo "selected"; ?>><?php echo $tamano; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4">
                <div class="row g-1 row-cols-1">
                    <label class="col mb-1 pt-1 form-label">Longevidad</label>
                    <div class="col d-flex justify-content-between">
                        <div class="form-check form-check-inline">
                            <input name="PRR_LONGEVIDAD" class="form-check-input" type="radio" id="adulto" value="adulto" <?php if ($perro['PRR_LONGEVIDAD'] === "Adulto") echo "checked"; ?> required>
                            <label class="form-check-label" for="adulto">Adulto</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="PRR_LONGEVIDAD" class="form-check-input" type="radio" id="cachorro" value="cachorro" <?php if ($perro['PRR_LONGEVIDAD'] === "Cachorro") echo "checked"; ?> required>
                            <label class="form-check-label" for="cachorro">Cachorro</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-5">
                <label for="PRR_COLOR" class="form-label">Color (<i>Predominante</i>)</label>
                <input type="text" value="<?php echo $perro['PRR_COLOR']; ?>" name="PRR_COLOR" id="PRR_COLOR" class="form-control" minlength="3" maxlength="45" pattern="^[A-ZÁÉÍÓÚa-záéíóú\s]{3,45}$" placeholder="Ejemplo: Blanco" required>
                <div class="invalid-feedback">El campo debe tener entre 3 a 45 letras</div>
            </div>
            <div class="col-md-3 col-lg-3">
                <label for="PRR_ALTURA" class="form-label">Altura (<i>cm</i>)</label>
                <input type="number" value="<?php echo $perro['PRR_ALTURA']; ?>" name="PRR_ALTURA" id="PRR_ALTURA" min="5" max="99" maxlength="2" class="form-control" placeholder="Ejemplo: 60" required>
                <div class="invalid-feedback">La altura debe ser entre 5 a 99 cm</div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="row g-1 row-cols-1">
                    <label class="col mb-2 form-label">Estados de salud</label>
                    <div class="col d-flex justify-content-between">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="PRR_DESPARASITADO" id="PRR_DESPARASITADO" value="1" <?php echo $perro['PRR_DESPARASITADO'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="PRR_DESPARASITADO">Desparasitado</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="PRR_ESTERILIZADO" id="PRR_ESTERILIZADO" value="1" <?php echo $perro['PRR_ESTERILIZADO'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="PRR_ESTERILIZADO">Esterilizado</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <label class="form-label">Foto (<i>imagen del perro</i>)</label>
                <label class="shadow d-block h-40rem rounded" style="border-color: #ccc; background-image: url(<?php echo base_url("uploads/{$perro['PRR_FOTO']}"); ?>)">
                    <div class="mask h-100 position-relative rounded"></div>
                </label>
            </div>
            <div class="col-12">
                <label for="PRR_SALUD" class="form-label">Observaciones</label>
                <textarea class="form-control" name="PRR_SALUD" placeholder="Ejemplo: Presenta dificultad respiratoria heredada de sus progenitores, se recomienda estar en sitios calidos." minlength="0" maxlength="255" id="PRR_SALUD" rows="5"><?php echo $perro['PRR_SALUD']; ?></textarea>
                <div class="valid-feedback">Este campo es opcional</div>
            </div>
            <input type="hidden" name="PRR_ID" value="<?php echo $perro['PRR_ID']; ?>">

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

                label.d-block {
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                }

                #subir:hover .mask {
                    background: rgba(0, 0, 0, 0.5) !important;
                }

                .h-20rem {
                    height: 20rem;
                }

                .h-40rem {
                    height: 35rem;
                }

                .text-failed {
                    color: rgb(233, 62, 79);
                }

                .fw-300 {
                    font-weight: 300;
                }

                .fw-400 {
                    font-weight: 400;
                }

                .fw-500 {
                    font-weight: 500;
                }

                .text-poppins {
                    font-family: 'Poppins', sans-serif !important;
                }

                .border-regular {
                    border: .2rem dashed #1785cf !important;
                }

                .border-solid {
                    border: 1.2rem dashed #ccc !important;
                }

                .upload-file-zone {
                    border-style: dashed;
                    border-color: #a1c4fd;
                }

                .text-winter {
                    color: #a1c4fd;
                }

                .bi-light {
                    fill: #fff;
                }

                .bi-winter {
                    fill: #a1c4fd;
                }

                .btn-winter-neva {
                    color: #fff;
                    background: #a1c4fd;
                    transition: all .2s linear;
                }

                .upload-file-zone label.btn {
                    border: .125rem solid #a1c4fd;
                }

                .btn-winter-neva:hover {
                    color: #a1c4fd;
                    background: #fff;
                    border-color: #a1c4fd;
                }

                .btn-winter-light {
                    color: #a1c4fd;
                    background: #fff;
                    border-color: #a1c4fd;
                    transition: all .2s linear;
                }

                .btn-winter-light:hover {
                    color: #a1c4fd;
                    background: #f8f9fa;
                }

                .bg-winter-neva {
                    background: #a1c4fd;
                }

                .mask {
                    background: rgba(0, 0, 0, .3);
                }
            </style>

            <div id="modal" class="modal fade" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border-0">
                        <div class="modal-header bg-gradient bg-primary">
                            <h5 class="modal-title fs-2 fw-300 mx-auto text-poppins text-light">Confirmación</h5>
                        </div>
                        <div class="modal-body mx-auto pb-0 p-4">
                            <p class="text-secondary fw-300 fs-5">¿Estas seguro de editar los datos del canino llamado <span class="badge bg-primary bg-gradient p-2"><?php echo mb_strtoupper($perro['PRR_NOMBRE']); ?></span> ?</p>
                        </div>
                        <div class="modal-footer text-poppins border-top-0">
                            <button type="button" class="btn lead px-4 py-2 btn-secondary bg-gradient" data-bs-dismiss="modal">Denegar</button>
                            <input type="submit" value="Aceptar" class="btn ms-2 lead px-4 py-2 btn-primary bg-gradient">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid mt-4 mx-auto mt-md-5 col-md-4 col-lg-3">
                <button type="button" data-bs-target="#modal" class="btn btn-lg fw-bold btn-primary" data-bs-toggle="modal">
                    ACTUALIZAR
                </button>
            </div>

        </form>
    </div>

    <script src="<?php echo base_url('js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('js/validacion.js') ?>"></script>
    <script src="<?php echo base_url('js/editarcanino.js') ?>"></script>