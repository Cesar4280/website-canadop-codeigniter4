window.addEventListener('DOMContentLoaded', () => {
    const inputCedulaElement = document.getElementById('ADOP_CC');
    inputCedulaElement.addEventListener('input', validarCedula)
    inputCedulaElement.addEventListener('blur', quitarMensajeValidacion)
})

function quitarMensajeValidacion() {
    const msgValidUser = document.getElementById('msgValidUser')
    msgValidUser.innerHTML = ''
}

async function validarCedula(e) {
    const msgValidUser = document.getElementById('msgValidUser')
    msgValidUser.innerHTML = ''
    const cedula = e.target.value;

    if (cedula.length >= 6) {
        const requestOptions = {
            method: 'GET'
        };
        const url = `http://127.0.0.1:3000/api/adoptantes/cedula/${cedula}`
        const { error, adopter } = await sendRequest(url, requestOptions)

        if (error) {
            msgValidUser.innerHTML = 'Opps, servicio no disponible, intente mas tarde'
            msgValidUser.style.color = 'red'
            return
        }

        if (adopter === null) {
            msgValidUser.innerHTML = 'Usuario no registrado, llene los campos'

        } else {
            // TODO: logica para llenar los campos
            msgValidUser.innerHTML = 'Usuario registrado'
            msgValidUser.style.color = 'green'

            document.getElementById('ADOP_CC').readOnly = true;
            document.getElementById('ADOP_ANTIGUO').checked = true;

            const InputPnombre = document.getElementById('ADOP_PNOMBRE');
            InputPnombre.value = adopter.ADOP_PNOMBRE;
            InputPnombre.readOnly = true;

            const InputSnombre = document.getElementById('ADOP_SNOMBRE');
            InputSnombre.value = adopter.ADOP_SNOMBRE;
            InputSnombre.readOnly = true;

            const InputPapellido = document.getElementById('ADOP_PAPELLIDO');
            InputPapellido.value = adopter.ADOP_PAPELLIDO;
            InputPapellido.readOnly = true;

            const InputSapellido = document.getElementById('ADOP_SAPELLIDO');
            InputSapellido.value = adopter.ADOP_SAPELLIDO;
            InputSapellido.readOnly = true;

            const InputSexoFemenino = document.getElementById('femenino');
            const InputSexoMasculino = document.getElementById('masculino');

            if (adopter.ADOP_SEXO == 'M') {
                InputSexoMasculino.checked = true;
                InputSexoMasculino.classList.add("pe-none");
                InputSexoFemenino.classList.add("pe-none");
                InputSexoFemenino.readOnly = true;
                InputSexoMasculino.readOnly = true;
            } else if (adopter.ADOP_SEXO == 'F') {
                InputSexoFemenino.checked = true;
                InputSexoMasculino.classList.add("pe-none");
                InputSexoFemenino.classList.add("pe-none");
                InputSexoFemenino.readOnly = true;
                InputSexoMasculino.readOnly = true;
            }

            if (adopter.ADOP_ECIVIL == 'Soltero') {
                document.getElementById('soltero').checked = adopter.ADOP_ECIVIL;
            } else if (adopter.ADOP_ECIVIL == 'Casado') {
                document.getElementById('casado').checked = adopter.ADOP_ECIVIL;
            } else if (adopter.ADOP_ECIVIL == 'Viudo') {
                document.getElementById('viudo').checked = adopter.ADOP_ECIVIL;
            } else if (adopter.ADOP_ECIVIL == 'Divorciado') {
                document.getElementById('divorciado').checked = adopter.ADOP_ECIVIL;
            } else if (adopter.ADOP_ECIVIL == 'Union Libre') {
                document.getElementById('unionLibre').checked = adopter.ADOP_ECIVIL;
            } else if (adopter.ADOP_ECIVIL == 'Separado') {
                document.getElementById('separado').checked = adopter.ADOP_ECIVIL;
            }

            item = [`<option id="preescolar" value="preescolar" Selected>Preescolar</option>
            <option id="Primaria" value="primaria">Primaria</option>
            <option id="Secundaria" value="secundaria">Secundaria</option>
            <option id="Tecnica" value="tecnica">Técnica</option>
            <option id="Tecnologica" value="tecnologica">Tecnológica</option>
            <option id="Profesional" value="profesional">Profesional</option>
            <option id="Licenciatura" value="licenciatura">Licenciatura</option>
            <option id="Especializacion" value="especializacion">Especialización</option>
            <option id="Doctorado" value="doctorado">Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado">Postdoctorado</option>`,
                `<option id="preescolar" value="preescolar">Preescolar</option>
            <option id="Primaria" value="primaria" Selected>Primaria</option>
            <option id="Secundaria" value="secundaria">Secundaria</option>
            <option id="Tecnica" value="tecnica">Técnica</option>
            <option id="Tecnologica" value="tecnologica">Tecnológica</option>
            <option id="Profesional" value="profesional">Profesional</option>
            <option id="Licenciatura" value="licenciatura">Licenciatura</option>
            <option id="Especializacion" value="especializacion">Especialización</option>
            <option id="Doctorado" value="doctorado">Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado">Postdoctorado</option>`,
                `<option id="preescolar" value="preescolar">Preescolar</option>
            <option id="Primaria" value="primaria">Primaria</option>
            <option id="Secundaria" value="secundaria" selected>Secundaria</option>
            <option id="Tecnica" value="tecnica">Técnica</option>
            <option id="Tecnologica" value="tecnologica">Tecnológica</option>
            <option id="Profesional" value="profesional">Profesional</option>
            <option id="Licenciatura" value="licenciatura">Licenciatura</option>
            <option id="Especializacion" value="especializacion">Especialización</option>
            <option id="Doctorado" value="doctorado">Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado">Postdoctorado</option>`,
                `<option id="preescolar" value="preescolar">Preescolar</option>
            <option id="Primaria" value="primaria">Primaria</option>
            <option id="Secundaria" value="secundaria">Secundaria</option>
            <option id="Tecnica" value="tecnica" Selected>Técnica</option>
            <option id="Tecnologica" value="tecnologica">Tecnológica</option>
            <option id="Profesional" value="profesional">Profesional</option>
            <option id="Licenciatura" value="licenciatura">Licenciatura</option>
            <option id="Especializacion" value="especializacion">Especialización</option>
            <option id="Doctorado" value="doctorado">Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado">Postdoctorado</option>`,
                `<option id="preescolar" value="preescolar">Preescolar</option>
            <option id="Primaria" value="primaria">Primaria</option>
            <option id="Secundaria" value="secundaria">Secundaria</option>
            <option id="Tecnica" value="tecnica">Técnica</option>
            <option id="Tecnologica" value="tecnologica" Selected>Tecnológica</option>
            <option id="Profesional" value="profesional">Profesional</option>
            <option id="Licenciatura" value="licenciatura">Licenciatura</option>
            <option id="Especializacion" value="especializacion">Especialización</option>
            <option id="Doctorado" value="doctorado">Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado">Postdoctorado</option>`,
                `<option id="preescolar" value="preescolar">Preescolar</option>
            <option id="Primaria" value="primaria">Primaria</option>
            <option id="Secundaria" value="secundaria">Secundaria</option>
            <option id="Tecnica" value="tecnica">Técnica</option>
            <option id="Tecnologica" value="tecnologica">Tecnológica</option>
            <option id="Profesional" value="profesional" Selected>Profesional</option>
            <option id="Licenciatura" value="licenciatura">Licenciatura</option>
            <option id="Especializacion" value="especializacion">Especialización</option>
            <option id="Doctorado" value="doctorado">Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado">Postdoctorado</option>`,
                `<option id="preescolar" value="preescolar">Preescolar</option>
            <option id="Primaria" value="primaria">Primaria</option>
            <option id="Secundaria" value="secundaria">Secundaria</option>
            <option id="Tecnica" value="tecnica">Técnica</option>
            <option id="Tecnologica" value="tecnologica">Tecnológica</option>
            <option id="Profesional" value="profesional">Profesional</option>
            <option id="Licenciatura" value="licenciatura" Selected>Licenciatura</option>
            <option id="Especializacion" value="especializacion">Especialización</option>
            <option id="Doctorado" value="doctorado">Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado">Postdoctorado</option>`,
                `<option id="preescolar" value="preescolar">Preescolar</option>
            <option id="Primaria" value="primaria">Primaria</option>
            <option id="Secundaria" value="secundaria">Secundaria</option>
            <option id="Tecnica" value="tecnica">Técnica</option>
            <option id="Tecnologica" value="tecnologica">Tecnológica</option>
            <option id="Profesional" value="profesional">Profesional</option>
            <option id="Licenciatura" value="licenciatura">Licenciatura</option>
            <option id="Especializacion" value="especializacion" Selected>Especialización</option>
            <option id="Doctorado" value="doctorado">Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado">Postdoctorado</option>`,
                `<option id="preescolar" value="preescolar">Preescolar</option>
            <option id="Primaria" value="primaria">Primaria</option>
            <option id="Secundaria" value="secundaria">Secundaria</option>
            <option id="Tecnica" value="tecnica">Técnica</option>
            <option id="Tecnologica" value="tecnologica">Tecnológica</option>
            <option id="Profesional" value="profesional">Profesional</option>
            <option id="Licenciatura" value="licenciatura">Licenciatura</option>
            <option id="Especializacion" value="especializacion">Especialización</option>
            <option id="Doctorado" value="doctorado" Selected>Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado">Postdoctorado</option>`,
                `<option id="preescolar" value="preescolar">Preescolar</option>
            <option id="Primaria" value="primaria">Primaria</option>
            <option id="Secundaria" value="secundaria">Secundaria</option>
            <option id="Tecnica" value="tecnica">Técnica</option>
            <option id="Tecnologica" value="tecnologica">Tecnológica</option>
            <option id="Profesional" value="profesional">Profesional</option>
            <option id="Licenciatura" value="licenciatura">Licenciatura</option>
            <option id="Especializacion" value="especializacion">Especialización</option>
            <option id="Doctorado" value="doctorado">Doctorado</option>
            <option id="Postdoctorado" value="postdoctorado" Selected>Postdoctorado</option>`
            ];

            if (adopter.ADOP_NACAD === 'Preescolar') {
                document.getElementById('ADOP_NACAD').innerHTML = item[0]
            } else if (adopter.ADOP_NACAD === 'Primaria') {
                document.getElementById('ADOP_NACAD').innerHTML = item[1]
            } else if (adopter.ADOP_NACAD === 'Secundaria') {
                document.getElementById('ADOP_NACAD').innerHTML = item[2]
            } else if (adopter.ADOP_NACAD === 'Tecnica') {
                document.getElementById('ADOP_NACAD').innerHTML = item[3]
            } else if (adopter.ADOP_NACAD === 'Tecnologica') {
                document.getElementById('ADOP_NACAD').innerHTML = item[4]
            } else if (adopter.ADOP_NACAD === 'Profesional') {
                document.getElementById('ADOP_NACAD').innerHTML = item[5]
            } else if (adopter.ADOP_NACAD === 'Licenciatura') {
                document.getElementById('ADOP_NACAD').innerHTML = item[6]
            } else if (adopter.ADOP_NACAD === 'Especializacion') {
                document.getElementById('ADOP_NACAD').innerHTML = item[7]
            } else if (adopter.ADOP_NACAD === 'Doctorado') {
                document.getElementById('ADOP_NACAD').innerHTML = item[8]
            } else if (adopter.ADOP_NACAD === 'Postdoctorado') {
                document.getElementById('ADOP_NACAD').innerHTML = item[9]
            }

            document.getElementById('ADOP_SAPELLIDO').value = adopter.ADOP_SAPELLIDO;
            document.getElementById('ADOP_CELULAR').value = adopter.ADOP_CELULAR;
            document.getElementById('ADOP_PROFESION').value = adopter.ADOP_PROFESION;
            document.getElementById('ADOP_DIRECCION').value = adopter.ADOP_DIRECCION;
            document.getElementById('ADOP_EDAD').value = adopter.ADOP_EDAD;
            document.getElementById('ADOP_NHIJOS').value = adopter.ADOP_NHIJOS;
            document.getElementById('ADOP_EMAIL').value = adopter.ADOP_EMAIL;

        }
    }
}
const sendRequest = async(url, requestOptions) => {
    try {
        const response = await fetch(url, requestOptions)
        const result = await response.json()
        return { error: false, adopter: result.adopter }
    } catch (error) {
        console.debug(error)
        return { error: true, adopter: null }
    }
}