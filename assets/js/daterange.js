$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //$('.loader').show();
       $("#scheduleTable tbody tr").detach();
         $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: 'getCustomEvents', // the url where we want to POST
            data: 'startDate='+start.format('YYYY-MM-DD')+'&endDate='+end.format('YYYY-MM-DD'), // our data object
        })
        // using the done promise callback
        .done(function(data) {
            //$('.loader').hide();
            // log data to the console so we can see
          var trHTML = '';
          var obj = JSON.parse(data);
          if(obj.length>0){
          
              $.each(obj, function(i,val){ 
                          
                      trHTML+='<tr><td>'
                                    +val.start
                                    + '</a></td><td>'
                                    + val.end
                                    + '</td><td>'
                                    + val.desc
                                    + '</td></tr>';
                            
                        });
                        //$('#tBody').append(trHTML);

           $("table#scheduleTable tbody").append(trHTML);
            // $("table#scheduleTable tbody tr").html(data);
            console.log(data);
            // here we will handle errors and validation messages
        }
        });
    }
        
    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);
       
   //$('#reportrange').click(function() {
     //  cb(start, end);
    //});


});

var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()