// Exportar la tabla en distintos formatos
$(document).ready(function () {
    $('#dashboard').DataTable({
        dom: "<'top'Bfl<'clear'>>rt<'bottom'ip<'clear'>>",
        buttons: [
            {
                extend: "copyHtml5",
                titleAttr: "Copiar registros",
                text: "<i class='fas fa-lg fa-copy text-light'></i>",
                className: "btn bg-gradient btn-info"
            },
            {
                extend: "excelHtml5",
                titleAttr: "Exportar a Excel",
                className: "btn bg-gradient btn-success",
                text: "<i class='fas fa-lg fa-file-excel'></i>"
            },
            {
                extend: "csvHtml5",
                titleAttr: "Exportar a CSV",
                className: "btn bg-gradient",
                text: "<i class='fas fa-lg fa-file-csv text-light'></i>"
            },
            {
                extend: "pdfHtml5",
                titleAttr: "Exportar a PDF",
                className: "btn bg-gradient btn-danger",
                text: "<i class='fas fa-lg fa-file-pdf'></i>"
            },
            {
                extend: "print",
                titleAttr: "Imprimir",
                className: "btn bg-primary",
                text: "<i class='fas fa-lg fa-print text-light'></i>"
            }
        ],
        responsive: true,
        language: { "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json" }
    })
})