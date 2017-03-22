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
 var file_no=$('#file_no').val();

var zone = "03:00";
$('#visits').fullCalendar({
  header: {
   left: 'prev,next today',
   center: 'title',
   right: 'month,agendaWeek,agendaDay'
  },
  editable: true,
  droppable: true
});
$.ajax({
    url: 'http://localhost/mrs/patient/get_visit_events/'+file_no,
   type: 'POST',
   data: 'type=fetch',
   async: false,
   success: function(response){
     json_events = response;
     $('#visits').fullCalendar({
    events: JSON.parse(json_events)
    });
   }

});
 
var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-warning').addClass('btn-default');
          $item.addClass('btn-warning');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-warning').trigger('click');
});

 


