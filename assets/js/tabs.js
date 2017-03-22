
    	 $(document).ready(function () {
        $('.menu  li a').click(function(e) {
             
            $('.menu li ').removeClass('menu-current');

            var $parent = $(this).parent();
            if (!$parent.hasClass('menu-current')) {
                $parent.addClass('menu-current');
            }
           
        });
        });