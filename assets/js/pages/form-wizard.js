$(document).ready(function() {
	"use strict";

	var $validator = $("#wizardFormStudent").validate({
		rules: {
			name: {
				required: true
			},
			guardian_name: {
				required: true
			},
			designation: {
				required: true
			},
			joined: {
				required: true
			},
			guardian: {
				required: true
			},
			dob: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true
			},
			confirm_password: {
				required: true,
				equalTo: "#password"
			},
			class: {
				required: true
			},
			section: {
				required: true
			},
			admin_no: {
				required: true
			},
			roll: {
				required: true,
				number: true
			},
			phone: {
				number: true
			}
		}
	});
	var NavButtons = function(tab, navigation, index) {
		if (index == 0) {
			$(".previous").addClass("d-none");
			$(".next").removeClass("d-none");
			$(".finish").addClass("d-none");
		} else if (navigation.find("li").length - 1 == index) {
			$(".previous").removeClass("d-none");
			$(".next").addClass("d-none");
			$(".finish").removeClass("d-none");
		} else if (navigation.find("li").length - 1 > index) {
			$(".previous").removeClass("d-none");
			$(".next").removeClass("d-none");
			$(".finish").addClass("d-none");
		}
	};
	$("button.finish").on("click", function() {
		var $valid = $("#wizardFormStudent").valid();
		if (!$valid) {
			$validator.focusInvalid();
			return false;
		}
		$("#wizardFormStudent").submit();
	});
	$("#rootWizardStudent").bootstrapWizard({
		tabClass: "nav nav-tabs",
		onTabShow: function(tab, navigation, index) {
			var $total = navigation.find("li").length;
			var $current = index + 1;
			var $percent = ($current / $total) * 100;
			$("#rootWizardStudent")
				.find(".progress-bar")
				.css({ width: $percent + "%" });
		},
		onNext: function(tab, navigation, index) {
			var $valid = $("#wizardFormStudent").valid();
			if (!$valid) {
				$validator.focusInvalid();
				return false;
			}
			NavButtons(tab, navigation, index);
		},
		onPrevious: function(tab, navigation, index) {
			NavButtons(tab, navigation, index);
		},
		onTabClick: function(tab, navigation, index) {
			var $valid = $("#wizardFormStudent").valid();
			if (!$valid) {
				$validator.focusInvalid();
				return false;
			}
			NavButtons(tab, navigation, index);
		}
	});

	$(".date-picker").datepicker({
		orientation: "top auto",
		autoclose: true
	});
});
