document.addEventListener("DOMContentLoaded", function () {
  if (typeof calendarData !== 'undefined') {
    flatpickr("#availability-calendar", {
      disable: calendarData.unavailableDates,
      dateFormat: "Y-m-d",
      minDate: "today"
    });
  }
});
