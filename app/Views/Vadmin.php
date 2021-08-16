<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/buttons.bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/datatables.bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.datatables.css') ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <title>Reporte</title>
</head>

<body>
    <main class="p-4 m-sm-4">
        <div class="row g-4">
            <div class="col-12 d-flex col-md-7">
                <h1 class="mt-1 fw-bold text-secondary"><strong>LISTA DE PERROS</strong></h1>
                &nbsp;&nbsp;&nbsp;
                <img height="50" width="60" src="<?php echo base_url('img/perro.png') ?>" alt="icono">
            </div>
            <h1 class="col-12 d-flex col-md-5 align-items-center justify-content-md-end lead align-self-center">
                <a href="<?php echo base_url('agregarperro') ?>" class="btn me-3 px-3 py-2 btn-secondary mt-2">
                    Agregar
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
                <form method="GET" action="<?php echo base_url('salir') ?>">
                    <button class="btn btn-danger px-4 py-2 mt-2">
                        Salir
                        <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                            <path d="M7.5 1v7h1V1h-1z" />
                            <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                        </svg>
                    </button>  
                </form>
            </h1>
        </div>
        <br><br>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
            .table-dark { opacity: .9; }
            main { font-family: 'Poppins', sans-serif; }
        </style>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="dashboard" width="100%" cellspacing="0" class="table table-light display nowrap fs-6 align-middle table-striped text-center table-bordered">
                            <thead>
                                <tr class="table-dark align-middle">
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Raza</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Fecha ingreso</th>
                                    <th scope="col">Tamaño</th>
                                    <th scope="col">Longevidad</th>
                                    <th scope="col">Altura</th>
                                    <th scope="col">Pelaje</th>
                                    <th scope="col">Desparasitado</th>
                                    <th scope="col">Esterilizado</th>
                                    <th scope="col">Detalles</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="small">
                                <?php foreach ($datos['dogs'] as $canino) : ?>
                                    <tr>
                                        <td scope="col"><?php echo $canino['PRR_COD']; ?></td>
                                        <td scope="col"><?php echo $canino['PRR_NOMBRE']; ?></td>
                                        <td scope="col"><?php echo $canino['RAZA_NOMBRE']; ?></td>
                                        <td scope="col"><?php echo $canino['PRR_SEXO']; ?></td>
                                        <td scope="col"><?php echo strfdate($canino['PRR_FING']); ?></td>
                                        <td scope="col"><?php echo $canino['PRR_TAMANO']; ?></td>
                                        <td scope="col"><?php echo $canino['PRR_LONGEVIDAD']; ?></td>
                                        <td scope="col"><?php echo $canino['PRR_ALTURA']; ?></td>
                                        <td scope="col"><?php echo $canino['PRR_COLOR']; ?></td>
                                        <td scope="col"><?php echo $canino['PRR_DESPARASITADO'] ?></td>
                                        <td scope="col"><?php echo $canino['PRR_ESTERILIZADO'] ?></td>
                                        <td scope="col"><?php echo $canino['PRR_SALUD'] ?></td>
                                        <td scope="col">
                                            <div class="d-grid">
                                                <a href="<?php echo base_url("edit/{$canino['PRR_ID']}") ?>" class="btn d-flex mx-auto btn-secondary align-items-center justify-content-center">
                                                    EDITAR
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi ms-1 bi-pencil-fill" viewBox="0 0 16 16">
                                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="table-dark">
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Raza</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Fecha Ingreso</th>
                                    <th scope="col">Tamaño</th>
                                    <th scope="col">Longevidad</th>
                                    <th scope="col">Altura</th>
                                    <th scope="col">Pelaje</th>
                                    <th scope="col">Desparasitado</th>
                                    <th scope="col">Esterilizado</th>
                                    <th scope="col">Detalles</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="<?php echo base_url('js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('js/datatables.js') ?>"></script>

    <script src="<?php echo base_url('js/datatables.buttons.js') ?>"></script>
    <script src="<?php echo base_url('js/datatables.responsive.js') ?>"></script>

    <script src="<?php echo base_url('js/buttons.print.js') ?>"></script>
    <script src="<?php echo base_url('js/jszip.js') ?>"></script>
    <script src="<?php echo base_url('js/pdfmake.js') ?>"></script>
    <script src="<?php echo base_url('js/vfs_fonts.js') ?>"></script>
    <script src="<?php echo base_url('js/buttons.html5.js') ?>"></script>

    <script src="<?php echo base_url('js/datatables.bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('js/buttons.bootstrap.js') ?>"></script>

    <script src="<?php echo base_url('js/dashboard.js') ?>"></script>