$(document).ready(function() {
	// The Calender
  $("#calendar").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        maxViewMode: 0
  }).datepicker('update', new Date());
});