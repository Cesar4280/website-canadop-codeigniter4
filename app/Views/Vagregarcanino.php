    <div class="container my-5">
        <div class="row mb-4">
            <div class="d-flex col-9">
                <h1 class="text-danger">AGREGAR CANINO</h1>
            </div>
            <h1 class="d-flex col-3 align-items-center justify-content-end lead align-self-center">
                <a class="btn btn-danger rounded-circle py-2 d-flex justify-content-center align-items-center" href="<?php echo base_url('admin') ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                        <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                    </svg>
                </a>
            </h1>
        </div>
        <div class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content border-0">
                    <div class="modal-header bg-success">
                        <h5 class="fs-2 mx-auto fw-light text-light modal-title">Consulta Exitosa!</h5>
                    </div>
                    <div class="pt-4 d-flex flex-column align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#198754" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                        <p class="fs-3 my-2 text-success">Canino registrado!</p>
                    </div>
                    <div class="py-4 col-3 d-grid mx-auto">
                        <button id="enviar" type="button" class="btn py-2 fw-bold btn-success text-center" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <form action="<?php echo site_url('/registrarperro') ?>" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
            <div class="col-md-4">
                <label for="PRR_NOMBRE" class="form-label">Nombre</label>
                <input type="text" name="PRR_NOMBRE" id="PRR_NOMBRE" class="form-control" minlength="2" maxlength="20" pattern="^[A-ZÁÉÍÓÚÑa-zñáéíóú]{2,20}$" placeholder="Ejemplo: Salvador" autofocus required>
                <div class="invalid-feedback">El campo debe tener entre 2 a 20 letras</div>
            </div>
            <div class="col-md-4">
                <label for="RAZA_ID" class="form-label">Raza</label>
                <select name="RAZA_ID" class="form-select" id="RAZA_ID" required>
                    <?php foreach ($datos['breeds'] as $raza) : ?>
                        <option value="<?php echo $raza['RAZA_ID']; ?>"><?php echo $raza['RAZA_NOMBRE']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4">
                <div class="row g-1 row-cols-1">
                    <label class="col pt-1 mb-1 form-label">Sexo</label>
                    <div class="col d-flex justify-content-between">
                        <div class="form-check form-check-inline">
                            <input name="PRR_SEXO" class="form-check-input" type="radio" id="macho" value="M" required>
                            <label class="form-check-label" for="macho">Macho</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="PRR_SEXO" class="form-check-input" type="radio" id="hembra" value="H" required>
                            <label class="form-check-label" for="hembra">Hembra</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="PRR_FING" class="form-label">Fecha de ingreso</label>
                <?php $formato = date('Y-m-d\TH:i'); ?>
                <input type="datetime-local" name="PRR_FING" id="PRR_FING" class="form-control" max="<?php echo $formato; ?>" value="<?php echo $formato; ?>" required>
            </div>
            <div class="col-md-4">
                <label for="PRR_TAMANO" class="form-label">Tamaño</label>
                <select name="PRR_TAMANO" class="form-select" id="PRR_TAMANO" required>
                    <option value="alto">Alto</option>
                    <option value="mediano">Mediano</option>
                    <option value="pequeño" selected>Pequeño</option>
                </select>
            </div>
            <div class="col-md-4">
                <div class="row g-1 row-cols-1">
                    <label class="col mb-1 pt-1 form-label">Longevidad</label>
                    <div class="col d-flex justify-content-between">
                        <div class="form-check form-check-inline">
                            <input name="PRR_LONGEVIDAD" class="form-check-input" type="radio" id="adulto" value="adulto" required>
                            <label class="form-check-label" for="adulto">Adulto</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="PRR_LONGEVIDAD" class="form-check-input" type="radio" id="cachorro" value="cachorro" required>
                            <label class="form-check-label" for="cachorro">Cachorro</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-5">
                <label for="PRR_COLOR" class="form-label">Color (<i>Predominante</i>)</label>
                <input type="text" name="PRR_COLOR" id="PRR_COLOR" class="form-control" minlength="3" maxlength="45" pattern="^[A-ZÁÉÍÓÚa-záéíóú\s]{3,45}$" placeholder="Ejemplo: Blanco" required>
                <div class="invalid-feedback">El campo debe tener entre 3 a 45 letras</div>
            </div>
            <div class="col-md-3 col-lg-3">
                <label for="PRR_ALTURA" class="form-label">Altura (<i>cm</i>)</label>
                <input type="number" name="PRR_ALTURA" id="PRR_ALTURA" min="5" max="99" maxlength="2" class="form-control" placeholder="Ejemplo: 60" required>
                <div class="invalid-feedback">La altura debe ser entre 5 a 99 cm</div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="row g-1 row-cols-1">
                    <label class="col mb-2 form-label">Estados de salud</label>
                    <div class="col d-flex justify-content-between">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="PRR_DESPARASITADO" id="PRR_DESPARASITADO" value="1">
                            <label class="form-check-label" for="PRR_DESPARASITADO">Desparasitado</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="PRR_ESTERILIZADO" id="PRR_ESTERILIZADO" value="1">
                            <label class="form-check-label" for="PRR_ESTERILIZADO">Esterilizado</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <label for="PRR_FOTO" class="form-label">Foto</label>
                <input type="file" name="PRR_FOTO" id="PRR_FOTO" class="form-control" accept=".png, .jpg, .jpeg" required>
                <div class="invalid-feedback">Solo se aceptan imagenes jpg, jpeg y png de hasta 2MB</div>
            </div>
            <div class="col-12">
                <label for="PRR_SALUD" class="form-label">Observaciones</label>
                <textarea class="form-control" name="PRR_SALUD" placeholder="Ejemplo: Presenta dificultad respiratoria heredada de sus progenitores, se recomienda estar en sitios calidos." minlength="0" maxlength="255" id="PRR_SALUD" rows="5"></textarea>
                <div class="valid-feedback">Este campo es opcional</div>
            </div>

            <div class="d-grid mt-4 mx-auto mt-md-5 col-md-4 col-lg-3">
                <input type="submit" value="AGREGAR" class="btn btn-lg fw-bold btn-danger">
            </div>
        </form>
    </div>

    <script src="<?php echo base_url('js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('js/agregarperro.js') ?>"></script>