const contenedor = document.querySelector(".container")
const btnIniciarSesion = document.querySelector("#sign-in-btn")
const btnRegistrarUsuario = document.querySelector("#sign-up-btn")

btnIniciarSesion.addEventListener("click", () => contenedor.classList.remove("sign-up-mode"))