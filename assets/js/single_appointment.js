$(function(){
    var currentDate; // Holds the day clicked when adding a new event
    var currentEvent; // Holds the event object when editing an event

    $('#color').colorpicker(); // Colopicker
    $('#time').timepicker({
        minuteStep: 5,
        showInputs: false,
        disableFocus: true,
        showMeridian: false
    });  // Timepicker

     var id=$('#file_no').val();
     var base_url='http://localhost/mrs/'; // Here i define the base_url
    $('#visits').fullCalendar({
        timeFormat: 'H(:mm)',
        header: {
            left: 'prev, next, today',
            center: 'title',
             right: 'month, basicWeek, basicDay'
        },
        // Get all events stored in database

        eventLimit: true, // allow "more" link when too many events
        events: base_url+'patient/get_visit_events/'+id,

       // Handle Day Click
        dayClick: function(date, event, view) {
            currentDate = date.format();
            // Open modal to add event
            modal({
                // Available buttons when adding
                buttons: {
                    add: {
                        id: 'add-event', // Buttons id
                        css: 'btn-success', // Buttons class
                        label: 'Add' // Buttons label
                    }
                },
                title: 'Add Event (' + date.format() + ')' // Modal title
            });
        },
   
          editable: true, // Make the event draggable true 
         eventDrop: function(event, delta, revertFunc) {  

            
               $.post(base_url+'appointment/dragUpdateEvent',{                            
                id:event.id,
                date: event.start.format()
            }, function(result){
                if(result)
                {
                alert('Updated');
                }
                else
                {
                    alert('Try Again later!')
                }

            });
          
          


          },
        // Event Mouseover
        eventMouseover: function(calEvent, jsEvent, view){
          
            var tooltip = '<div class="event-tooltip">' + calEvent.desc+ '</div>';
            $("body").append(tooltip);

            $(this).mouseover(function(e) {
                $(this).css('z-index', 10000);
                $('.event-tooltip').fadeIn('500');
                $('.event-tooltip').fadeTo('10', 1.9);
            }).mousemove(function(e) {
                $('.event-tooltip').css('top', e.pageY + 10);
                $('.event-tooltip').css('left', e.pageX + 20);
            });
        },
        eventMouseout: function(calEvent, jsEvent) {
            $(this).css('z-index', 8);
            $('.event-tooltip').remove();
        },
        // Handle Existing Event Click
        eventClick: function(calEvent, jsEvent, view) {
            // Set currentEvent variable according to the event clicked in the calendar
            currentEvent = calEvent;

            // Open modal to edit or delete event
            modal({
                // Available buttons when editing
                buttons: {
                    delete: {
                        id: 'delete-event',
                        css: 'btn-danger',
                        label: 'Delete'
                    },
                    update: {
                        id: 'update-event',
                        css: 'btn-success',
                        label: 'Update'
                    }
                },
                title: 'Edit Event "' + calEvent.title + '"',
                event: calEvent
            });
        }

    });

});