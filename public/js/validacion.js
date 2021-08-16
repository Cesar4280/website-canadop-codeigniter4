(function () {
    const $FORMULARIO = document.forms[0]
    $FORMULARIO.addEventListener('submit', function (e) {
        if (!$FORMULARIO.checkValidity()) {
            e.preventDefault()
            e.stopPropagation()
        }
        $FORMULARIO.classList.add('was-validated')
    }, false)
})()