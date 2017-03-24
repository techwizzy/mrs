$(function() {
    // Easy pie charts
 var base_url='http://localhost/mrs/';
    var calendar = $('#calendar').fullCalendar({
	 header: {
            left: 'prev, next, today',
            center: 'title',
             right: 'month, basicWeek, basicDay'
        },
	
    selectable: true,
    selectHelper: true,
    
    select: function(start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
            calendar.fullCalendar('renderEvent',
                {
                    title: title,
                    start: start,
                    end: end,
                    allDay: allDay
                },
                true // make the event "stick"
            );
        }
        calendar.fullCalendar('unselect');
    },
    eventLimit: true, // allow "more" link when too many events
    events: base_url+'appointment/getEvents',

	});
});
