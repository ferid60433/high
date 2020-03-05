$(document).ready(function() {
	"use strict";

	// Datatables

	$(".datatables_init").dataTable({
		responsive: true,
		language: {
			paginate: {
				previous: '<i class="fa fa-chevron-left"></i>',
				next: '<i class="fa fa-chevron-right"></i>'
			},
			search: "_INPUT_",
			searchPlaceholder: "--Search--"
		},
		dom: "Blfrtip",
		buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
		lengthMenu: [
			[10, 25, 50, -1],
			[10, 25, 50, "All"]
		]
	});
	$(".nb_init").dataTable({
		responsive: true,
		language: {
			paginate: {
				previous: '<i class="fa fa-chevron-left"></i>',
				next: '<i class="fa fa-chevron-right"></i>'
			},
			search: "_INPUT_",
			searchPlaceholder: "--Search--"
		},
		dom: "lfrtip",
		lengthMenu: [
			[10, 25, 50, -1],
			[10, 25, 50, "All"]
		]
	});

	$(".date-picker").datepicker({
		orientation: "top auto",
		autoclose: true
	});
});
