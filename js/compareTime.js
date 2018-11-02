/*

• define the banner to show/hide
var banner = document.getElementsByClassName('banner')[0];

• define variable for current time
var getTime = ..........

• define variable for time (in standard unit) to show banner
var startTime = ..........

• define variable for time (in standard unit) to re-hide banner [after event] (optional)
var endTime = ..........

• convert to same standard unit as show/hide times
var currentTime = getTime.SOMEFUNCTION()


• if current time > start time AND <= end time then show the banner
if (currentTime > startTime	&& currentTime <= endTime) {..........}

• else if current time > end time then hide the banner
else if (currentTime > endTime) {..........}


• define function
function compareTime() {..........}

• run function on page load
window.onload = function() {
  compareTime();
};
document.addEventListener("DOMContentLoaded", function(event) {
  compareTime();
});

*/

function displayMaintenance() {
	var currentTime = new Date();
	var banner = document.getElementsByClassName('banner')[0];
	// Converts currentTime (client local time) to UTC
	function toUTC(date) {
			return Date.UTC(
					date.getFullYear(),
					date.getMonth(),
					date.getDate(),
					date.getHours(),
					date.getMinutes(),
					date.getSeconds(),
					date.getMilliseconds()
			);
	}
	toUTC(currentTime);

	var startTime = new Date("2018-11-01T20:12:00Z");
	var endTime = new Date("2018-11-01T20:15:00Z");

	if (currentTime.getTime() > startTime.getTime()
			&&
			currentTime.getTime() <= endTime.getTime()) {
				$('.banner').show();
	} else if (currentTime.getTime() > endTime.getTime) {
			$('.banner').hide();
	}
}

// Invoke displayMaintenance()
displayMaintenance();
