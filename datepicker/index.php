<!DOCTYPE html>
<html>
<head>
	<title>jQuery Datepicker</title>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
</head>
<body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#select_date").datepicker({
        format: "yy-mm-dd",
        autoclose: true,
        todayHighlight: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        autoclose: true,
        changeMonth: true,
        changeYear: true,
        minDate: new Date()
        });
	});

var dateToday = new Date();
var dates = $("#from, #to").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 3,
    minDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
    }
});
</script>
Choose Date: <input type="text" name="select_date" id="select_date">
<label for="from">From</label> <input type="text" id="from" name="from"/> <label for="to">to</label> <input type="text" id="to" name="to"/>
