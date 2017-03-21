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
function search() {
  var query_value = $('input#name').val();
  if(query_value !== ''){
    $.ajax({
      type: "POST",
      url: "<?= site_url('patient/search_patient') ?>",
      data: "json",
      cache: false,
      success: function(resp){
         var trHTML = '';
                        $.each(resp, function (i, userData) {
                            for (i = 0; i < resp.UserData.length; i++) {
                                trHTML +=
                                    '<tr><td>'
                                    + resp.userData[i].fname
                                    + '</td><td>'
                                    + resp.userData[i].gender
                                    + '</td><td>'
                                    + resp.userData[i].id
                                    + '</td></tr>';
                            }
                        });
                        //$('#tBody').append(trHTML);
        $("table#resultTable tbody").append(trHTML);
      }
    });
  }return false;    
}


});



