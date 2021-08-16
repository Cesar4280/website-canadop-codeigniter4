<header>
    <nav class="navbar shadow sticky-top navbar-expand-lg p-md-3">
        <div class="container">
            <h5>
                <a class="navbar-brand text-brown" href="<?php echo site_url() ?>">
                    <img src="https://i.ibb.co/sF0xjhC/perro.png" width="49" height="49" alt="logo" class="d-inline-block align-to" /> CANADOP
                </a>
            </h5>
            <button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link text-brown" href="<?php echo base_url('perros') ?>">
                            <h5>Mascotas</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-brown" href="<?php echo base_url('login') ?>">
                            <h5>Login</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>