	</div>

</body>

	<!--   Core JS Files   -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url() ?>assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="<?= base_url() ?>assets/js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/fullcalendar.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-2.2.4/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/af-2.1.3/b-1.2.4/b-colvis-1.2.4/b-flash-1.2.4/b-html5-1.2.4/b-print-1.2.4/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.2.0/r-2.1.1/rr-1.2.0/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
    <script src="<?= base_url() ?>vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>
    <script src="<?= base_url() ?>assets/js/tables.js"></script>
    <script src="<?= base_url() ?>assets/vendors/fullcalendar/fullcalendar.js"></script>
    <script src="<?= base_url() ?>assets/vendors/fullcalendar/gcal.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
    <script src="<?= base_url() ?>assets/js/calendar.js"></script>
   <script src="<?= base_url() ?>assets/js/tabs.js"></script>
   <script src="<?= base_url() ?>assets/js/highcharts.js"></script>
    <script src="<?= base_url() ?>assets/js/exporting.js"></script>
	
    <script type="text/javascript">
    $(function() {
    	Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Browser market shares at a specific website, 2014'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        data: [
            ['Firefox', 45.0],
            ['IE', 26.8],
            {
                name: 'Chrome',
                y: 12.8,
                sliced: true,
                selected: true
            },
            ['Safari', 8.5],
            ['Opera', 6.2],
            ['Others', 0.7]
        ]
    }]
});
 });
    </script>
   <script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>

  </body>
</html>