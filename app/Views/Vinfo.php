<style>
    .accordion-button::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }

    .img-adjust {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

<section>
    <div class="container-fluid px-0 mt-0">
        <section>
            <div id="Mcarrusel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#Mcarrusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#Mcarrusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#Mcarrusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#Mcarrusel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('img/s3.jpeg') ?>" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block" data-bs-interval="2000">
                            <h5>¿Para qué sirven los bigotes de los perros?</h5>
                            <p>
                                Su función no es otra que la de contribuir al sentido del tacto
                                del perro, pero también complementan la vista y el olfato.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('img/emocion.jpg') ?>" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block" data-bs-interval="2000">
                            <h5>Motivos por los que un perro se emociona al vernos</h5>
                            <p>
                                El organismo del can libera oxitocina, que es la hormona del amor
                                y hace que se sientan intensamente felices de que regreses a su lado.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('img/cadadia.jpg') ?>" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block" data-bs-interval="2000">
                            <h5>Cosas que tu perro hace cada día y no debería</h5>
                            <p>
                                El hígado de los canes no está capacitado para asimilar las elevadas
                                cantidades de grasas con las que podemos lidiar los humanos.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('img/s4.jpg') ?>" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block" data-bs-interval="2000">
                            <h5>Ventajas de la castración en perros</h5>
                            <p>
                                Cuando se capa a un perro, desaparece con el tiempo su necesidad
                                de ir marcando todo con su orina y el deseo eufórico hacia las
                                perras en celo.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#Mcarrusel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Antes</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#Mcarrusel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Después</span>
                </button>
            </div>
        </section>
        <section class="row g-0" style="background: #dd5a45;">
            <article class="col-12 col-md-6 h-100">
                <div class="position-relative">
                    <img src="https://www.hola.com/imagenes/estar-bien/20181024131834/vacuna-desparasitacion-perro/0-613-416/revisiones-perro-veterinario-m.jpg" class="img-fluid h-100 w-100" alt="veterinario">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <svg role="button" data-bs-toggle='modal' data-bs-target='#modalA' xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="brown" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                        </svg>
                    </div>
                </div>
                <div class="modal fade" id="modalA" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog  modal-lg modal-dialog-centered">
                        <div class="modal-content bg-transparent border-0">
                            <div class="modal-body p-0 text-info d-flex flex-column align-items-center position-relative">
                                <div class="ratio" style="--bs-aspect-ratio: 60%;">
                                    <iframe class="rounded-3 shadow" src="https://www.youtube.com/embed/7Fw9TMHbx1o" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="position-absolute end-0" style="top: -2%;">
                                    <svg role="button" data-bs-dismiss="modal" aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dc3545" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-12 col-md-6 p-5">
                <br>
                <h3 class="text-light fs-4 mb-3">Preguntas más frecuentes</h3>
                <h2 class="text-white display-6 " style="font-weight: 500;">Obtenga cada respuesta allí si lo desea</h2>
                <div class="accordion rounded-3" id="accordionFlushExample">
                    <div class="accordion-item bg-transparent border-0 rounded-3 mb-3 mt-4">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed rounded-3 text-light fst-italic shadow-none" style="background: #c34c3a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                ¿Qué alimentos comunes son venenosos para mi perro?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show " aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-light" style="background: #c34c3a;">La mayoría de la gente sabe que el <b>chocolate es venenoso</b> para los perros.
                                Contiene un compuesto llamado <b>teobromina</b>, y con una dosis lo suficientemente grande, este químico puede causar convulsiones, coma e incluso la muerte en los perros.
                                El <b>café tiene el mismo químico</b> y también es tóxico para los perros.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-transparent border-0 rounded-3 mb-3">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed rounded-3 text-light fst-italic shadow-none" style="background: #c34c3a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                ¿Cuales son las vacunas obligatorias?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-light" style="background: #c34c3a;">1. Al <b>mes y medio</b> se debe vacunar de parvovirus y moquillo.<br>
                                2. A los <b>dos meses</b> y una semana la polivalente (recuerdo de las dos anteriores, leptospira, hepatitis, y para influenza virus).<br>
                                3. Se debe revacunar a los <b>tres meses</b> de la polivalente (vacuna a partir de la cual puede salir a la calle). Se podrá vacunar de la tos de las perreras a continuación.<br>
                                4. A los <b>cuatro meses</b> la rabia. Luego se podrá poner la de leishmaniosis.<br>
                                5. <b>Cada año</b> vacuna polivalente y vacuna de la rabia.</div>
                        </div>
                    </div>
                    <div class="accordion-item bg-transparent border-0 rounded-3 mb-3">
                        <h2 class="accordion-header " id="flush-headingThree">
                            <button class="accordion-button collapsed rounded-3 text-light fst-italic shadow-none" style="background: #c34c3a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Vacunas para perros ¿Son obligatorias, cuando ponerlas?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-light" style="background: #c34c3a;">Si vamos a convivir con un perro, las vacunas son una de las actuaciones veterinarias que debemos implantar
                                como rutina preventiva tanto si nuestro compañero es un cachorro como si se trata ya de un adulto. Indiferentemente de si vive dentro o fuera de casa.</div>
                        </div>
                    </div>
                    <div class="accordion-item bg-transparent border-0 rounded-3 mb-3">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed rounded-3 text-light fst-italic shadow-none" style="background: #c34c3a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                ¿Por qué los perros comen caca?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse " aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-light" style="background: #c34c3a;">Este es el problema de comportamiento más frustrante con el que se enfrentan los dueños de perros.
                                Existen muchas teorías acerca de por qué parecen disfrutar de este pasatiempo asqueroso, pero la más aceptada es que están tratando de recuperar una proteína digerida.
                                Pero no nos enfoquemos tanto en por qué lo hacen, sino en qué hacer al respecto. Comienza con el entrenamiento de cachorro.
                            </div>
                        </div>
                    </div>
                </div>

            </article>
        </section>
        <section>
            <section id="sec1" style="background-image: linear-gradient(-60deg, #dd5a45 0%, #f09819 100%); 
                    height: 650px;
                    padding: 0;
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center; margin: 0;
                    box-sizing: border-box;">
                <div class="container contenedor-texto">
                    <h2 class="text-light display-1">Reúne sus provisiones</h2>
                    <p class="lead text-light my-5">
                        Consigue todo lo que necesitarás para hacerlo sentir seguro y
                        cómodo antes de traerlo a casa. Además de lo básico – un collar
                        y correa, así como platos para alimento y agua – también necesitarás
                        una cama para perro, puerta para mascotas, juguetes, premios y
                        artículos para su limpieza.
                    </p>
                    <a data-scroll class="btn btn-lg btn-outline-light rounded-3 px-4" href="#sec2">
                        Próximo Tip
                    </a>
                </div>
            </section>
            <section id="sec2" style="background-image: linear-gradient(-60deg, #f09819 0%, #dd5a45 100%); 
                    height: 650px;
                    padding: 0;
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center; margin: 0;
                    box-sizing: border-box;">
                <div class="container contenedor-texto">
                    <h2 class="text-light display-1">Prepara tu casa</h2>
                    <p class="lead text-light my-5">
                        De manera similar a cuando llevas a un bebé, es buena idea preparar
                        tu espacio antes de que el cachorro llegue a casa. Revisa la casa y
                        guarda los artículos que pudieran ser peligrosos para cachorros muy
                        pequeños o curiosos, y quita aquellas cosas que no quieres que muerda.
                    </p>
                    <a data-scroll class="btn btn-lg btn-outline-light border-1 rounded-3 px-4" href="#sec3">
                        Próximo Tip
                    </a>
                </div>
            </section>
            <section id="sec3" style="background-image: linear-gradient(-60deg, #dd5a45 0%, #f09819 100%); 
                    height: 650px;
                    padding: 0;
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center; margin: 0;
                    box-sizing: border-box;">
                <div class="container contenedor-texto">
                    <h2 class="text-light display-1">Presenta a la familia</h2>
                    <p class="lead text-light my-5">
                        La Animal Rescue League of Boston recomienda presentar a los miembros
                        de la familia y otros perros uno a la vez para que conozcan al nuevo can.
                        Mantén a los otros perros en su correa y supervisa sus interacciones,
                        manteniendo en mente que una presentación demasiado forzada puede causar
                        que se vuelvan territoriales con el recién llegado.
                    </p>
                    <a data-scroll class="btn btn-lg btn-outline-light border-1 rounded-3 px-4" href="#sec1">
                        Regresar
                    </a>
                </div>
            </section>
        </section>
    </div>
</section>
<section class="container-fluid px-0">
    <div class="row g-0">
        <div class="col-lg-7 order-2">
            <div class="ratio h-100 ratio-21x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.769061798509!2d-74.78427958473895!3d10.980796258389631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d61b87aac57%3A0x280baf230ea77d39!2sAlmacen%20Canino%20Mascotas!5e0!3m2!1ses!2sco!4v1625378645539!5m2!1ses!2sco" loading="lazy"></iframe>
            </div>
        </div>
        <div class="d-none col-lg-5 text-center d-lg-block align-self-center" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);">
            <img class="img-fluid w-75" src="https://www.revistapetlovers.com/wp-content/uploads/2020/08/03-SELLO-GRIS-1.png">
        </div>
    </div>
</section>

<script src="<?php echo base_url('js/bootstrap.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>