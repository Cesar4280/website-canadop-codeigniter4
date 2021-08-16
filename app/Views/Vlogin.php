<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/login.css') ?>">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="<?php echo site_url('/sesion') ?>" method="POST" class="sign-in-form" autocomplete="OFF">
                    <h2 class="title">Iniciar Sesión</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="USER_USUARIO" placeholder="Usuario">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="USER_CONTRASENA" placeholder="Contraseña">
                        </div>
                    <input type="submit" value="Iniciar" class="btn solid">
                    <p class="social-text">O inicia sesión con vuestras redes sociales</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="<?php echo site_url('/registrar') ?>" method="POST" class="sign-up-form" autocomplete="OFF">
                    <h2 class="title">Registrarse</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="USER" placeholder="Usuario">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="EMAIL" placeholder="Correo">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="PASS" placeholder="Contraseña">
                    </div>
                    <input type="submit" class="btn" value="Registrar">
                    <p class="social-text">O inicia sesión con vuestras redes sociales</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <!-- <h3>¿Eres Nuevo?</h3>
                    <p>
                        Registrarte para obtener una cuenta y acceder 
                        a todos los servicios que tenemos preparado para ti.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Registrarse
                    </button> -->
                    <h3>¿Eres Admin?</h3>
                    <p>
                        Inicia sesión para acceder al modo privilegiado instantaneamente.
                    </p>
                </div>
                <img src="<?php echo base_url('img/perro.svg') ?>" class="image" alt="perro">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>¿Ya estas dentro?</h3>
                    <p>
                        Inicia sesión para acceder a nuestros servicios al instante.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Iniciar Sesión
                    </button>
                </div>
                <img src="<?php echo base_url('img/paseando.svg') ?>" class="image" alt="paseando">
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('js/login.js') ?>"></script>
</body>

</html>