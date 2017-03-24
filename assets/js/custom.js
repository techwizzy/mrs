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

