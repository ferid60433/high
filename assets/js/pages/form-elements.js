$(document).ready(function() {
	"use strict";
	$(".date-picker").datepicker({
		orientation: "top auto",
		autoclose: true
	});
	var input = $(".time-picker").clockpicker({
		placement: "bottom",
		align: "left",
		autoclose: true,
		default: "now"
	});
});
