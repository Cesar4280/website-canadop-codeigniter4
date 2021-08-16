    <section class="container-fluid">
        <!--Seccion del formulario-->
        <div class="container my-5">
            <div class="card shadow border-0 rounded-3">
                <img src="https://i.ibb.co/wLW4n42/iniciativa.png" class="card-img-top" alt="anuncio" />
                <div class="card-body">
                    <form class="row g-3 p-4 text-brown needs-validation" action="<?php echo base_url('adopcion') ?>" name="formAdop" method="POST" novalidate>
                        <div class="col-md-4">
                            <label for="ADOP_CC" class="form-label">Cedula</label>
                            <input name="ADOP_CC" type="text" class="form-control" id="ADOP_CC" minlength="6" maxlength="10" pattern="^\d{6,10}$" autofocus required>
                            <span id="msgValidUser"></span>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">El campo debe tener entre 6 a 10 digitos</div>
                        </div>
                        <div class="col-md-4">
                            <label for="ADOP_DIRECCION" class="form-label">Dirección</label>
                            <input name="ADOP_DIRECCION" type="text" class="form-control" id="ADOP_DIRECCION" minlength="12" maxlength="100" pattern="^[A-ZÁÉÍÓÚÑa-zñáéíóú0-9,;\s#\.-]{12,100}$" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">El campo debe tener entre 12 a 70 caracteres</div>
                        </div>
                        <div class="col-md-4">
                            <label for="ADOP_CELULAR" class="form-label">Celular</label>
                            <input name="ADOP_CELULAR" type="tel" class="form-control" id="ADOP_CELULAR" minlength="6" maxlength="10" pattern="^\d{10}$" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">El campo Cedula debe tener entre 6 a 10 caracteres</div>
                        </div>
                        <div class="col-md-3">
                            <label for="ADOP_PNOMBRE" class="form-label">Primer Nombre</label>
                            <input name="ADOP_PNOMBRE" type="text" class="form-control" id="ADOP_PNOMBRE" minlength="3" maxlength="30" pattern="^[A-ZÁÉÍÓÚÑa-zñáéíóú]{3,30}$" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">El campo debe tener entre 3 a 20 letras</div>
                        </div>
                        <div class="col-md-3">
                            <label for="ADOP_SNOMBRE" class="form-label">Segundo Nombre</label>
                            <input name="ADOP_SNOMBRE" type="text" class="form-control" id="ADOP_SNOMBRE">
                        </div>
                        <div class="col-md-3">
                            <label for="ADOP_PAPELLIDO" class="form-label">Primer Apellido</label>
                            <input name="ADOP_PAPELLIDO" type="text" class="form-control" id="ADOP_PAPELLIDO" minlength="3" maxlength="30" pattern="^[A-ZÁÉÍÓÚÑa-zñáéíóú\s]{3,30}$" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">El campo debe tener entre 3 a 20 letras</div>
                        </div>
                        <div class="col-md-3">
                            <label for="ADOP_SAPELLIDO" class="form-label">Segundo Apellido</label>
                            <input name="ADOP_SAPELLIDO" type="text" class="form-control" id="ADOP_SAPELLIDO">
                        </div>
                        <div class="col-md-4">
                            <label for="ADOP_EDAD" class="form-label">Edad</label>
                            <input name="ADOP_EDAD" type="number" class="form-control" id="ADOP_EDAD" minlength="1" maxlength="2" min="18" max="70" pattern="^\d{1,2}$" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">Debe ser mayor de edad y no exceder una superior a 70 años</div>
                        </div>
                        <div class="col-md-3 col-lg-4">
                            <label for="ADOP_NHIJOS" class="form-label">N. hijos</label>
                            <input name="ADOP_NHIJOS" type="number" class="form-control" id="ADOP_NHIJOS" min="0" max="10" minlength="1" maxlength="2" pattern="^\d{1,2}$" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">Máximo de hijos requeridos es 10</div>
                        </div>
                        <div class="col col-lg-3">
                            <div class="row g-1 row-cols-1">
                                <label class="col mb-2 form-label">Sexo</label>
                                <div class="col d-flex justify-content-between">
                                    <div class="form-check form-check-inline">
                                        <input name="ADOP_SEXO" class="form-check-input" type="radio" id="masculino" value="M" required readonly>
                                        <label class="form-check-label">Masculino</label>
                                        <div class="invalid-feedback">Elija una</div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="ADOP_SEXO" class="form-check-input" type="radio" id="femenino" value="F" required readonly>
                                        <label class="form-check-label">Femenino</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label class="form-label mb-3">Estado civil</label>
                        <div class="row ms-1 ps-1 row-cols-2 row-cols-md-3 row-cols-lg-6">
                            <div class="form-check">
                                <input name="ADOP_ECIVIL" value="Soltero" type="radio" class="form-check-input" id="soltero" required>
                                <label class="form-check-label" for="soltero">Soltero</label>
                            </div>
                            <div class="form-check">
                                <input name="ADOP_ECIVIL" value="Casado" type="radio" class="form-check-input" id="casado" required>
                                <label class="form-check-label" for="casado">Casado</label>
                            </div>
                            <div class="form-check">
                                <input name="ADOP_ECIVIL" value="Separado" type="radio" class="form-check-input" id="separado" required>
                                <label class="form-check-label" for="separado">Separado</label>
                            </div>
                            <div class="form-check">
                                <input name="ADOP_ECIVIL" value="Divorciado" type="radio" class="form-check-input" id="divorciado" required>
                                <label class="form-check-label" for="divorciado">Divorciado</label>
                            </div>
                            <div class="form-check">
                                <input name="ADOP_ECIVIL" value="Viudo" type="radio" class="form-check-input" id="viudo" required>
                                <label class="form-check-label" for="viudo">Viudo</label>
                            </div>
                            <div class="form-check">
                                <input name="ADOP_ECIVIL" value="Union Libre" type="radio" class="form-check-input" id="unionLibre" required>
                                <label class="form-check-label" for="unionLibre">Unión libre</label>
                                <div class="invalid-feedback">Elija una</div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="ADOP_NACAD" class="form-label">Nivel academico</label>
                            <select name="ADOP_NACAD" class="form-select" id="ADOP_NACAD" required>
                                <option value="Preescolar">Preescolar</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                                <option value="Tecnica">Técnica</option>
                                <option value="Tecnologica">Tecnológica</option>
                                <option value="Profesional">Profesional</option>
                                <option value="Licenciatura">Licenciatura</option>
                                <option value="Especializacion">Especialización</option>
                                <option value="Doctorado">Doctorado</option>
                                <option value="Postdoctorado">Postdoctorado</option>
                            </select>
                            <div class="invalid-feedback">Favor seleccione una opción</div>
                        </div>
                        <div class="col-md-7">
                            <label for="ADOP_PROFESION" class="form-label">Profesión</label>
                            <input name="ADOP_PROFESION" type="text" class="form-control" id="ADOP_PROFESION" minlength="5" maxlength="60" pattern="^[A-ZÁÉÍÓÚÑa-zñáéíóú\s]{5,60}$" id="profesion" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">El campo acepta entre 5 a 60 letras y espacios</div>
                        </div>
                        <div class="col-12">
                            <label for="ADOP_EMAIL" class="form-label">E-mail</label>
                            <input name="ADOP_EMAIL" type="email" class="form-control" id="ADOP_EMAIL" aria-describedby="email" minlength="5" maxlength="60" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$" required />
                            <small id="email">hotmail, gmail, outlook, etc.</small>
                            <div class="invalid-feedback">Complete el campo</div>
                        </div>
                        <div class="form-check form-switch ms-2">
                            <input name="ADOP_ANTIGUO" class="form-check-input pe-none" type="checkbox" id="ADOP_ANTIGUO">
                            <label class="form-check-label pe-none">Adoptante antiguo</label>
                        </div>
                        <input type="hidden" name="PRR_ID" value="<?php echo $PRR_ID; ?>">
                        <div class="d-grid mx-auto col-12 col-sm-5 col-lg-3 mt-5">
                            <input type="submit" value="CONTINUAR" class="btn btn-lg btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Sección de google map-->
    <div class="ratio ratio-21x9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.7979777419378!2d-76.50789418467312!3d3.399412952509742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a12bd39639ed%3A0x2e2f482208da9adf!2sHuellitas%20Felices!5e0!3m2!1ses-419!2sco!4v1588995001686!5m2!1ses-419!2sco" allowfullscreen></iframe>
    </div>

    <script src="<?php echo base_url('js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('js/validarcedula.js') ?>"></script>
    <script src="<?php echo base_url('js/validacion.js') ?>"></script>