//controlo el color del menu con el scroll
var nav = document.querySelector("nav");
window.addEventListener("scroll", function() {
    if (window.pageYOffset > 100) {
        nav.classList.add("bg-light", "shadow");
    } else {
        nav.classList.remove("bg-light", "shadow");
    }
});





























// //le pone colorcito al formulario y valida
// (function() {
//     'use strict'
//     var forms = document.querySelectorAll('.needs-validation')
//     Array.prototype.slice.call(forms)
//         .forEach(function(form) {
//             form.addEventListener('submit', function(event) {
//                 if (!form.checkValidity()) {
//                     event.preventDefault()
//                     event.stopPropagation()
//                 } else {
//                     axios({
//                         method: 'POST',
//                         url: 'http://127.0.0.1:4000/adoptantes',
//                         data: formDataToJSON()
//                     }).then(res => {
//                         console.log(res.data);
//                         const myModal = new bootstrap.Modal(document.getElementById('modalA'), {
//                             keyboard: false,
//                             backdrop: 'static'
//                         })
//                         myModal.show();
//                         console.log('Adoptante agregado correctamente por POST')
//                     }).catch(err => console.log(err))
//                 }
//                 form.classList.add('was-validated')
//             }, false)
//         })
// })()