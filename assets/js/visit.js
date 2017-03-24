$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
         $('#visitrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //$('.loader').show();
       $("#visitTable tbody tr").detach();
         $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: 'getCustomList', // the url where we want to POST
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
                                    +val.name
                                    + '</a></td><td>'
                                    + val.age
                                    + '</td><td>'
                                    + val.address
                                    + '</td><td>'
                                    + val.wdate
                                    + '</td><td>'
                                    + val.status
                                    + '</td></tr>';
                            
                        });
                        //$('#tBody').append(trHTML);

           $("table#visitTable tbody").append(trHTML);
            // $("table#visitTable tbody tr").html(data);
            console.log(data);
            // here we will handle errors and validation messages
        }
        });
    }
        
    $('#visitrange').daterangepicker({
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
       
   //$('#visitrange').click(function() {
     //  cb(start, end);
    //});
});