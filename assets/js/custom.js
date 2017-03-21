$(document).ready(function(){


  $(".submenu > a").click(function(e) {
    e.preventDefault();
    var $li = $(this).parent("li");
    var $ul = $(this).next("ul");

    if($li.hasClass("open")) {
      $ul.slideUp(350);
      $li.removeClass("open");
    } else {
      $(".nav > li > ul").slideUp(350);
      $(".nav > li").removeClass("open");
      $ul.slideDown(350);
      $li.addClass("open");
    }
  });
$(".tablesearch").hide();
// Search
$('#term').bind('input', function(){
  $("table#resultTable tbody tr").detach();
  if($("#term").val().length>3){
  $.ajax({
   type: "post",
   url: "http://localhost/mrs/patient/search_patient",
   cache: false,    
   data:'term='+$("#term").val(),
   success: function(response){
         var trHTML = '';
         var obj = JSON.parse(response);
          if(obj.length>0){
          
              $.each(obj, function(i,val){ 
                          
                      trHTML+='<tr><td><a href="http://localhost/mrs/patient/view/'+val.file_no+'">'
                                    +val.file_no
                                    + '</a></td><td>'
                                    + val.first_name
                                    + '</td><td>'
                                    + val.gender
                                    + '</td></tr>';
                            
                        });
                        //$('#tBody').append(trHTML);
        $("table#resultTable tbody").append(trHTML);
        $(".tablesearch").show();
     
       }else{
        trHTML+='<tr><td colspan="3">No patient data found</td></tr>';
       $("table#resultTable tbody").append(trHTML);
       $(".tablesearch").show();
     }
    },
   });
  }
  });
});

 


