document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    
    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'es',

        initialView: 'dayGridMonth',

        events: '/eventos',
    });

    

    calendar.render();
  });