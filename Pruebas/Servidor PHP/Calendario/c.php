<!DOCTYPE html>
<html>
	<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="calendar.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href="calendar.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="calendar" data-color="normal"><div data-role="day" data-day="<?php echo date("Ynd",mktime(0,0,0,date("m"),date("d")+1,date("Y"))); ?>"><div data-role="event" data-name="Soy un evento que siempre saldr&eacute; ma&ntilde;ana" data-start="9.00" data-end="9.30" data-location="martiniglesias.eu"></div></div></div>
	<script>
	var yy;
	var calendarArray =[];
	var monthOffset = [6,7,8,9,10,11,0,1,2,3,4,5];
	var monthArray = [["ENE","enero"],["FEB","Febrero"],["MAR","Marzo"],["ABR","Abril"],["MAY","Mayo"],["JUN","Junio"],["JUL","Julio"],["AGO","Agosto"],["SEP","Septiembre"],["OCT","Octubre"],["NOV","Noviembre"],["DIC","Diciembre"]];
	var letrasArray = ["L","M","X","J","V","S","D"];
	var dayArray = ["7","1","2","3","4","5","6"];
	$(document).ready(function() {
		$(document).on('click','.calendar-day.have-events',activateDay);
		$(document).on('click','.specific-day',activatecalendar);
		$(document).on('click','.calendar-month-view-arrow',offsetcalendar);
		$(window).resize(calendarScale);
		$(".calendar").calendar({
			"2013910": {
				"Mulberry Festival": {
					start: "9.00",
					end: "9.30",
					location: "London"
				}
			}
		});
		calendarSet();
		calendarScale();
		});
	</script>

	
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-266167-20");
		pageTracker._setDomainName(".martiniglesias.eu");
		pageTracker._trackPageview();
	} catch(err) {}</script>
</body>
</html>