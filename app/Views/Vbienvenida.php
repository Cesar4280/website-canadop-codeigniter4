    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container">
                <h5>
                    <a class="navbar-brand text-brown" href="<?php echo site_url() ?>">
                        <img src="https://i.ibb.co/sF0xjhC/perro.png" width="49" height="49" alt="logo" class="d-inline-block align-to" /> CANADOP
                    </a>
                </h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="brown" class="bi bi-justify" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-brown" href="<?php echo base_url('info') ?>">
                                <h5>Curiosidades</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-brown" href="<?php echo base_url('/perros') ?>">
                                <h5>Mascotas</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-brown" href="<?php echo base_url('/login') ?>">
                                <h5>Login</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center img-pendon" style="background: url(<?php echo base_url('img/pendon.png') ?>) no-repeat;">
            <div class="content text-center">
                <h1 class="text-white">Adoptar es una gran forma de dar amor</h1>
            </div>
        </div>
    </header>

    <!--Esta es la sección del articulo-->
    <div class="container-fluid bg-content my-5">
        <section class="row g-4">
            <article class="col-lg-4 col-md-6 col-sm-12 col-12">
                <h1 class="text-center text-brown">Introducción</h1>
                <p class="px-3 pt-5 fw-light">
                    El abandono animal es una de las crueldades que se vive en el dia a dia, miles de perros en el mundo ambulan en las calles sin hogar y protección. Existen fundaciones que brindan su amor para proporcionarles una estadia temporal, mientras le consigen
                    un hogar donde vivir. Las mascotas son una gran compañía y muchas saben cuándo consolar y dar felicidad. Una de las mejores experiencias de la vida es darse la oportunidad de ser amado por un animalito. Recuerda que una mascota
                    es para querer y proteger, no para desquitar un mal día o por un capricho. Es un ser vivo que requiere respeto y un hogar en donde ocupe un lugar dentro de la familia.
                </p>
                <div class="text-center mt-4 px-3 mb-4 mb-md-0 d-block d-md-none d-xl-block">
                    <img src="https://cdn.pixabay.com/photo/2020/03/03/01/59/dog-4897327_960_720.jpg" class="img-fluid img-thumbnail">
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-sm-12 col-12">
                <h1 class="text-center text-brown">Importancia</h1>
                <p class="px-3 pt-5 fw-light">
                    Una mascota siempre te brinda compañía. Si tienes hijos, aprenden a querer y respetar a los animales. Durante la infancia es la mejor etapa para enseñarle a los niños como cuidar un perro o cualquier otra mascota. Una mascota te hace reír por más extraña
                    que sea. Se conforman siempre con la comida que le damos, sin protestar como hacemos nosotros. Sólo con la mirada aprenderás a entenderle. Cuidar de los seres vivos es cuidar de nuestro entorno y nuestro mundo. Consiente a tu cachoro,
                    proporciónale cariño y disfruta de los beneficios emocionales que te brinda tener un animalito a tu lado.
                </p>
                <div class="text-center mt-4 px-3 mb-4 mb-md-0 d-block d-md-none d-xl-block">
                    <img src="https://cdn.pixabay.com/photo/2016/11/21/16/43/bulldog-1846380_960_720.jpg" class="img-fluid img-thumbnail">
                </div>
            </article>
            <article class="col-lg-4 col-md-12 col-sm-12 col-12">
                <h1 class="text-center text-brown">¡Quierelos!</h1>
                <p class="px-3 pt-5 fw-light">
                    El perro es desde hace miles de años el mejor amigo del hombre. Con una inteligencia notable algunos la equiparan a la de un niño de 2 años, los perros son una excelente compañía para cualquier persona. Y también, como no, lo son especialmente para los
                    más pequeños de la casa. Y es que nada hay mejor para un niño que un perro. Y a la vez, nada hay mejor para un perro que un niño. En su inocencia, ambos disfrutan con un único objetivo, jugar y pasarlo bien. Regalale ese amor a ese ser especial, como lo
                    es un canino, tu fiel sabueso que te sigue a todas partes y nunca te defrauda sin duda la mejor compañía.
                </p>
                <div class="text-center mt-4 px-3 mb-2 mb-md-0 d-block d-md-none d-xl-block">
                    <img src="https://cdn.pixabay.com/photo/2014/01/01/13/31/dog-237193_960_720.jpg" class="img-fluid img-thumbnail">
                </div>
            </article>
        </section>
    </div>


    <script src="<?php echo base_url('js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('js/efectos.js') ?>"></script>