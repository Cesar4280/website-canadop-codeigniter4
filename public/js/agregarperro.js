(function() {
    const $formulario = document.forms[0]
    const $subida = $formulario["PRR_FOTO"]
    const $comentario = $subida.nextElementSibling
    const $enviar = document.getElementById('enviar')
    const $notificacion = new bootstrap.Modal($formulario.previousElementSibling, { keyboard: false, backdrop: "static" })
    $formulario.addEventListener('submit', e => {
        if (!$formulario.checkValidity()) {
            e.preventDefault()
            e.stopPropagation()
        } else {
            e.preventDefault()
            e.stopPropagation()
            $notificacion.show()
        }
        $formulario.classList.add('was-validated')
    }, false)
    $subida.addEventListener('change', e => {
        const archivo = $subida.files[0]
        if (archivo.size > 2097152) {
            e.target.value = null
            $comentario.textContent = "El archivo excede de 2MB"
        } else if (!["image/jpeg", "image/jpg", "image/png"].includes(archivo.type)) {
            e.target.value = null
            $comentario.textContent = "Solo se acepta JPG, JPEG y PNG"
        }
    })
    $enviar.addEventListener('click', e => $formulario.submit())
})()