<section class="container-fluid">
    <!--Seccion del formulario-->
    <div class="container my-5">
        <div class="card shadow border-0 rounded-3">
            <div class="card-body">
                <div class="container">
                    <form action="<?php echo base_url('finalizar') ?>" method="POST" class="row my-3">
                        <div class="col mb-2">
                            <h2 class="text-brown mb-0 ps-3 m-4">¡Info de la adopcion!</h2>
                            <div class="card-body">
                                <div class="row g-3 p-4 needs-validation" style="color: #b54837">
                                    <div class="col-md-12">
                                        <label for="ADOPTAR_FECHA" class="form-label">Fecha de adopcion</label>
                                        <input name="ADOPTAR_FECHA" type="text" value="<?php echo date("Y-m-d H:i:s"); ?>" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-brown mb-0 ps-3 m-4">¡Felicitaciones Adoptante!</h2>
                            <div class="card-body">
                                <div class="row g-3 p-4 needs-validation" style="color: #b54837">
                                    <div class="col-md-3">
                                        <label for="ADOP_PNOMBRE" class="form-label">Primer Nombre</label>
                                        <input name="ADOP_PNOMBRE" value="<?php echo $ADOP_PNOMBRE; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="ADOP_SNOMBRE" class="form-label">Segundo Nombre</label>
                                        <input name="ADOP_SNOMBRE" value="<?php echo $ADOP_SNOMBRE; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="ADOP_PAPELLIDO" class="form-label">Primer Apellido</label>
                                        <input name="ADOP_PAPELLIDO" value="<?php echo $ADOP_PAPELLIDO; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="ADOP_SAPELLIDO" class="form-label">Segundo Apellido</label>
                                        <input name="ADOP_SAPELLIDO" value="<?php echo $ADOP_SAPELLIDO; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ADOP_CC" class="form-label">Cedula</label>
                                        <input name="ADOP_CC" value="<?php echo $ADOP_CC; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ADOP_DIRECCION" class="form-label">Dirección</label>
                                        <input name="ADOP_DIRECCION" value="<?php echo $ADOP_DIRECCION; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ADOP_CELULAR" class="form-label">Celular</label>
                                        <input name="ADOP_CELULAR" value="<?php echo $ADOP_CELULAR; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ADOP_EDAD" class="form-label">Edad</label>
                                        <input name="ADOP_EDAD" value="<?php echo $ADOP_EDAD; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ADOP_NHIJOS" class="form-label">N. Hijos</label>
                                        <input name="ADOP_NHIJOS" value="<?php echo $ADOP_NHIJOS; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ADOP_ECIVIL" class="form-label">Estado civil</label>
                                        <input name="ADOP_ECIVIL" value="<?php echo $ADOP_ECIVIL; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="ADOP_NACAD" class="form-label">Nivel Academico</label>
                                        <input name="ADOP_NACAD" value="<?php echo $ADOP_NACAD; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ADOP_SEXO" class="form-label">Sexo</label>
                                        <input name="ADOP_SEXO" value="<?php echo $ADOP_SEXO == 'M' ? 'Masculino' : 'Femenino'; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ADOP_PROFESION" class="form-label">Profesión</label>
                                        <input name="ADOP_PROFESION" value="<?php echo $ADOP_PROFESION; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ADOP_EMAIL" class="form-label">Email</label>
                                        <input name="ADOP_EMAIL" value="<?php echo $ADOP_EMAIL; ?>" type="email" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-brown mb-0 ps-3 m-4">¡Nuevo integrante de tu familia!</h2>
                            <div class="card-body">
                                <div class="row g-3 p-4 needs-validation" style="color: #b54837">
                                    <div class="col-md-3">
                                        <label for="PRR_COD" class="form-label">Codigo</label>
                                        <input name="PRR_COD" value="<?php echo $PRR_COD; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="PRR_NOMBRE" class="form-label">Nombre</label>
                                        <input name="PRR_NOMBRE" value="<?php echo $PRR_NOMBRE; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="PRR_SEXO" class="form-label">Sexo</label>
                                        <input name="PRR_SEXO" value="<?php echo $PRR_SEXO == 'M' ? 'Macho' : 'Hembra'; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="PRR_FING" class="form-label">Fecha de Ingreso</label>
                                        <input name="PRR_FING" value="<?php echo strfdate($PRR_FING); ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="PRR_TAMANO" class="form-label">Tamaño</label>
                                        <input name="PRR_TAMANO" value="<?php echo $PRR_TAMANO; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="PRR_LONGEVIDAD" class="form-label">Longevidad</label>
                                        <input name="PRR_LONGEVIDAD" value="<?php echo $PRR_LONGEVIDAD; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="PRR_ALTURA" class="form-label">Altura (cm)</label>
                                        <input name="PRR_ALTURA" value="<?php echo $PRR_ALTURA; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="PRR_COLOR" class="form-label">Color</label>
                                        <input name="PRR_COLOR" value="<?php echo $PRR_COLOR; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="PRR_DESPARASITADO" class="form-label">Desparasitado</label>
                                        <input name="PRR_DESPARASITADO" value="<?php echo $PRR_DESPARASITADO ? 'Si' : 'No'; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="PRR_ESTERILIZADO" class="form-label">Esterilizado</label>
                                        <input name="PRR_ESTERILIZADO" value="<?php echo $PRR_ESTERILIZADO ? 'Si' : 'No'; ?>" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="PRR_SALUD" class="form-label">Salud</label>
                                        <textarea name="PRR_SALUD" class="form-control overflow-scroll" id="floatingTextarea2" style="height: 100px; resize: none;" readonly><?php echo $PRR_SALUD; ?>.</textarea>
                                    </div>
                                    <input type="hidden" name="PRR_ID" value="<?php echo $PRR_ID; ?>">
                                    <input type="hidden" name="PRR_FOTO" value="<?php echo $PRR_FOTO; ?>">
                                    <input type="hidden" name="ADOP_ANTIGUO" value="<?php echo $ADOP_ANTIGUO; ?>">
                                </div>
                            </div>
                            <div class="d-grid mx-auto col-10 col-md-5 col-lg-3">
                                <input type="submit" value="CONFIRMAR" class="btn btn-lg btn-danger">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>