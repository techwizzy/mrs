$(document).ready(function() {
        $('#example').dataTable({
        	dom: 'Bfrtip',
        	 lengthChange: false,
        	buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                 columns: ':contains("Office")'
                }
            },
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'colvis'
        ]
        });

} );